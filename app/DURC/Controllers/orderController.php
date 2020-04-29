<?php

namespace App\DURC\Controllers;

use App\order;
use Illuminate\Http\Request;
use CareSet\DURC\DURC;
use CareSet\DURC\DURCController;
use Illuminate\Support\Facades\View;

class orderController extends DURCController
{


	public $view_data = [];

	protected static $hidden_fields_array = [

	];


	public function getWithArgumentArray(){
		
		$with_summary_array = [];
		$with_summary_array[] = "employee:id,".\App\employee::getNameField();
		$with_summary_array[] = "customer:id,".\App\customer::getNameField();
		$with_summary_array[] = "shipper:id,".\App\shipper::getNameField();

		return($with_summary_array);
		
	}


	private function _get_index_list(Request $request){

		$return_me = [];

		$with_argument = $this->getWithArgumentArray();

		$these = order::with($with_argument)->paginate(100);

        	foreach($these->toArray() as $key => $value){ //add the contents of the obj to the the view 
			$return_me[$key] = $value;
        	}

		//collapse and format joined data..
		$return_me_data = [];
        foreach($return_me['data'] as $data_i => $data_row){
                foreach($data_row as $key => $value){
                        if(is_array($value)){
                                foreach($value as $lowest_key => $lowest_data){
                                        //then this is a loaded attribute..
                                        //lets move it one level higher...

                                        if ( isset( order::$field_type_map[$lowest_key] ) ) {
                                            $field_type = order::$field_type_map[ $lowest_key ];
                                            $return_me_data[$data_i][$key .'_id_DURClabel'] = DURC::formatForDisplay( $field_type, $lowest_key, $lowest_data, true );
                                        } else {
                                            $return_me_data[$data_i][$key .'_id_DURClabel'] = $lowest_data;
                                        }
                                }
                        }

                        if ( isset( order::$field_type_map[$key] ) ) {
                            $field_type = order::$field_type_map[ $key ];
                            $return_me_data[$data_i][$key] = DURC::formatForDisplay( $field_type, $key, $value, true );
                        } else {
                            $return_me_data[$data_i][$key] = $value;
                        }
                }
        }
        $return_me['data'] = $return_me_data;
		
		
                foreach($return_me['data'] as $data_i => $data_row){
                        foreach($data_row as $key => $value){
                                if(is_array($value)){
                                        foreach($value as $lowest_key => $lowest_data){
                                                //then this is a loaded attribute..
                                                //lets move it one level higher...
                                                $return_me['data'][$data_i][$key .'_id_DURClabel'] = $lowest_data;
                                        }
                                        unset($return_me['data'][$data_i][$key]);
                                }
                        }
                }


		//helps with logic-less templating...
		if($return_me['first_page_url'] == $return_me['last_page_url']){
			$return_me['is_need_paging'] = false;
		}else{
			$return_me['is_need_paging'] = true;
		}

		if($return_me['current_page'] == 1){
			$return_me['first_page_class'] = 'disabled';
			$return_me['prev_page_class'] = 'disabled';
		}else{
			$return_me['first_page_class'] = '';
			$return_me['prev_page_class'] = '';
		}


		if($return_me['current_page'] == $return_me['last_page']){
			$return_me['next_page_class'] = 'disabled';
			$return_me['last_page_class'] = 'disabled';
		}else{
			$return_me['next_page_class'] = '';
			$return_me['last_page_class'] = '';
		}

		return($return_me);
	}

	/**
	*	A simple function that allows fo rthe searching of this object type in the db, 
	*	And returns the results in a select2-json compatible way.
	*	This powers the select2 widgets across the forms...
	*/
   	public function search(Request $request){

		$q = $request->input('q');
		$page = $request->input('page');

		//TODO we need to escape this query string to avoid SQL injection.

		//what is the field I should be searching
                $search_fields = order::getSearchFields();

		//sometimes there is an image field that contains the url of an image
		//but this is typically null
		$img_field = order::getImgField();

		$where_sql = '';
		$or = '';
		foreach($search_fields as $this_field){
			$where_sql .= " $or $this_field LIKE '%$q%'  ";
			$or = ' OR ';
		}

		$query = order::whereRaw($where_sql);
		            
		$count = $query->count();			
		$these = $query
		            ->skip(20*($page-1))
					->take(20)
					->get();
					
        $more = $count > $page * 20;

		$return_me['pagination'] = ['more' => $more];
		$raw_array = $these->toArray();

		$real_array = [];
		foreach($raw_array as $this_row){
			$tmp = [ 'id' => $this_row['id']];
			$tmp_text = '';
			foreach($this_row as $field => $data){
				if(in_array($field,$search_fields)){
					//then we need to show this text!!
					$tmp_text .=  "$data ";
				}
			}
			$tmp['text'] = trim($tmp_text);

			//show the id of the data at the end of the select..
			$tmp['text'] .= ' ('.$this_row['id'].')';;

			if(!is_null($img_field)){ //then there is an image for this entry
				$tmp['img_field'] = $img_field;
				if(isset($this_row[$img_field])){
					$tmp['img_url'] = $this_row[$img_field];
				}else{	
					$tmp['img_url'] = null;
				}
			}

			$real_array[] = $tmp;
		}


		$return_me['results'] = $real_array;

		// you might this helpful for debugging..
		//$return_me['where'] = $where_sql;

		return response()->json($return_me);

	}

    /**
     * Get a json version of all the objects.. 
     * @param  \App\order  $order
     * @return JSON of the object
     */
    public function jsonall(Request $request){
		return response()->json($this->_get_index_list($request));
 	}

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
	$main_template_name = $this->_getMainTemplateName();


	$this->view_data = $this->_get_index_list($request);

	if($request->has('debug')){
		var_export($this->view_data);
		exit();
	}
	$durc_template_results = view('DURC.order.index',$this->view_data);        
	return view($main_template_name,['content' => $durc_template_results]);
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */ 
    public function store(Request $request){

	$myNeworder = new order();

	//the games we play to easily auto-generate code..
	$tmp_order = $myNeworder;
			$tmp_order->id = DURC::formatForStorage( 'id', 'int', $request->id, $tmp_order ); 
		$tmp_order->employee_id = DURC::formatForStorage( 'employee_id', 'int', $request->employee_id, $tmp_order ); 
		$tmp_order->customer_id = DURC::formatForStorage( 'customer_id', 'int', $request->customer_id, $tmp_order ); 
		$tmp_order->orderDate = DURC::formatForStorage( 'orderDate', 'datetime', $request->orderDate, $tmp_order ); 
		$tmp_order->shippedDate = DURC::formatForStorage( 'shippedDate', 'datetime', $request->shippedDate, $tmp_order ); 
		$tmp_order->shipper_id = DURC::formatForStorage( 'shipper_id', 'int', $request->shipper_id, $tmp_order ); 
		$tmp_order->shipName = DURC::formatForStorage( 'shipName', 'varchar', $request->shipName, $tmp_order ); 
		$tmp_order->shipAddress = DURC::formatForStorage( 'shipAddress', 'longtext', $request->shipAddress, $tmp_order ); 
		$tmp_order->shipCity = DURC::formatForStorage( 'shipCity', 'varchar', $request->shipCity, $tmp_order ); 
		$tmp_order->shipStateProvince = DURC::formatForStorage( 'shipStateProvince', 'varchar', $request->shipStateProvince, $tmp_order ); 
		$tmp_order->shipZipPostalCode = DURC::formatForStorage( 'shipZipPostalCode', 'varchar', $request->shipZipPostalCode, $tmp_order ); 
		$tmp_order->shipCountryRegion = DURC::formatForStorage( 'shipCountryRegion', 'varchar', $request->shipCountryRegion, $tmp_order ); 
		$tmp_order->shippingFee = DURC::formatForStorage( 'shippingFee', 'decimal', $request->shippingFee, $tmp_order ); 
		$tmp_order->taxes = DURC::formatForStorage( 'taxes', 'decimal', $request->taxes, $tmp_order ); 
		$tmp_order->paymentType = DURC::formatForStorage( 'paymentType', 'varchar', $request->paymentType, $tmp_order ); 
		$tmp_order->paidDate = DURC::formatForStorage( 'paidDate', 'datetime', $request->paidDate, $tmp_order ); 
		$tmp_order->notes = DURC::formatForStorage( 'notes', 'longtext', $request->notes, $tmp_order ); 
		$tmp_order->taxRate = DURC::formatForStorage( 'taxRate', 'double', $request->taxRate, $tmp_order ); 
		$tmp_order->taxStatus_id = DURC::formatForStorage( 'taxStatus_id', 'tinyint', $request->taxStatus_id, $tmp_order ); 
		$tmp_order->status_id = DURC::formatForStorage( 'status_id', 'tinyint', $request->status_id, $tmp_order ); 

	
	try {
	    		$tmp_order->save();

	} catch (\Exception $e) {
	          return redirect("/DURC/order/create")->with('status', 'There was an error in your data: '.$e->getMessage());

	}

	$new_id = $myNeworder->id;
	
	return redirect("/DURC/order/$new_id")->with('status', 'Data Saved!');
    }//end store function

    /**
     * Display the specified resource.
     * @param  \App\$order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order){
	return($this->edit($order));
    }

    /**
     * Get a json version of the given object 
     * @param  \App\order  $order
     * @return JSON of the object
     */
    public function jsonone(Request $request, $order_id){
		$order = \App\order::find($order_id);
		$order = $order->fresh_with_relations(); //this is a custom function from DURCModel. you can control what gets autoloaded by modifying the DURC_selfish_with contents on your customized models
		$return_me_array = $order->toArray();
		
		//lets see if we can calculate a card-img-top for a front end bootstrap card interface
		$img_uri_field = \App\order::getImgField();
		if(!is_null($img_uri_field)){ //then this object has an image link..
			if(!isset($return_me_array['card_img_top'])){ //allow the user to use this as a field without pestering..
				$return_me_array['card_img_top'] = $order->$img_uri_field;
			}
		}

		//lets get a card_body from the DURC mode class!!
		if(!isset($return_me_array['card_body'])){ //allow the user to use this as a field without pestering..
			//this is simply the name unless someone has put work into this...
			$return_me_array['card_body'] = $order->getCardBody();
		}
		
		return response()->json($return_me_array);
 	}


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(){
	// but really, we are just going to edit a new object..
	$new_instance = new order();
	return $this->edit($new_instance);
    }


    /**
     * Show the form for editing the specified resource.
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order){

	$main_template_name = $this->_getMainTemplateName();

	//do we have a status message in the session? The view needs it...
	$this->view_data['session_status'] = session('status',false);
	if($this->view_data['session_status']){
		$this->view_data['has_session_status'] = true;
	}else{
		$this->view_data['has_session_status'] = false;
	}

	$this->view_data['csrf_token'] = csrf_token();
	
	
	foreach ( order::$field_type_map as $column_name => $field_type ) {
        // If this field name is in the configured list of hidden fields, do not display the row.
        $this->view_data["{$column_name}_row_class"] = '';
        if ( in_array( $column_name, self::$hidden_fields_array ) ) {
            $this->view_data["{$column_name}_row_class"] = 'd-none';
        }
    }

	if($order->exists){	//we will not have old data if this is a new object

		//well lets properly eager load this object with a refresh to load all of the related things
		$order = $order->fresh_with_relations(); //this is a custom function from DURCModel. you can control what gets autoloaded by modifying the DURC_selfish_with contents on your customized models

		//put the contents into the view...
		foreach($order->toArray() as $key => $value){
			if ( isset( order::$field_type_map[$key] ) ) {
                $field_type = order::$field_type_map[ $key ];
                $this->view_data[$key] = DURC::formatForDisplay( $field_type, $key, $value );
            } else {
                $this->view_data[$key] = $value;
            }
            
            // If this is a nullable field, see whether null checkbox should be checked by default
			if ($order->isFieldNullable($key) &&
                $value == null) {
			    $this->view_data["{$key}_checked"] = "checked";
            }
		}

		//what is this object called?
		$name_field = $order->_getBestName();
		$this->view_data['is_new'] = false;
		$this->view_data['durc_instance_name'] = $order->$name_field;
	}else{
		$this->view_data['is_new'] = true;
	}

	$debug = false;
	if($debug){
		echo '<pre>';
		var_export($this->view_data);
		exit();
	}
	

	$durc_template_results = view('DURC.order.edit',$this->view_data);        
	return view($main_template_name,['content' => $durc_template_results]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order){

	$tmp_order = $order;
			$tmp_order->id = DURC::formatForStorage( 'id', 'int', $request->id, $tmp_order ); 
		$tmp_order->employee_id = DURC::formatForStorage( 'employee_id', 'int', $request->employee_id, $tmp_order ); 
		$tmp_order->customer_id = DURC::formatForStorage( 'customer_id', 'int', $request->customer_id, $tmp_order ); 
		$tmp_order->orderDate = DURC::formatForStorage( 'orderDate', 'datetime', $request->orderDate, $tmp_order ); 
		$tmp_order->shippedDate = DURC::formatForStorage( 'shippedDate', 'datetime', $request->shippedDate, $tmp_order ); 
		$tmp_order->shipper_id = DURC::formatForStorage( 'shipper_id', 'int', $request->shipper_id, $tmp_order ); 
		$tmp_order->shipName = DURC::formatForStorage( 'shipName', 'varchar', $request->shipName, $tmp_order ); 
		$tmp_order->shipAddress = DURC::formatForStorage( 'shipAddress', 'longtext', $request->shipAddress, $tmp_order ); 
		$tmp_order->shipCity = DURC::formatForStorage( 'shipCity', 'varchar', $request->shipCity, $tmp_order ); 
		$tmp_order->shipStateProvince = DURC::formatForStorage( 'shipStateProvince', 'varchar', $request->shipStateProvince, $tmp_order ); 
		$tmp_order->shipZipPostalCode = DURC::formatForStorage( 'shipZipPostalCode', 'varchar', $request->shipZipPostalCode, $tmp_order ); 
		$tmp_order->shipCountryRegion = DURC::formatForStorage( 'shipCountryRegion', 'varchar', $request->shipCountryRegion, $tmp_order ); 
		$tmp_order->shippingFee = DURC::formatForStorage( 'shippingFee', 'decimal', $request->shippingFee, $tmp_order ); 
		$tmp_order->taxes = DURC::formatForStorage( 'taxes', 'decimal', $request->taxes, $tmp_order ); 
		$tmp_order->paymentType = DURC::formatForStorage( 'paymentType', 'varchar', $request->paymentType, $tmp_order ); 
		$tmp_order->paidDate = DURC::formatForStorage( 'paidDate', 'datetime', $request->paidDate, $tmp_order ); 
		$tmp_order->notes = DURC::formatForStorage( 'notes', 'longtext', $request->notes, $tmp_order ); 
		$tmp_order->taxRate = DURC::formatForStorage( 'taxRate', 'double', $request->taxRate, $tmp_order ); 
		$tmp_order->taxStatus_id = DURC::formatForStorage( 'taxStatus_id', 'tinyint', $request->taxStatus_id, $tmp_order ); 
		$tmp_order->status_id = DURC::formatForStorage( 'status_id', 'tinyint', $request->status_id, $tmp_order ); 


	$id = $order->id;
	
    try {
	    		$tmp_order->save();

	} catch (\Exception $e) {
	          return redirect("/DURC/order/{$id}")->with('status', 'There was an error in your data: '.$e->getMessage());

	}

	return redirect("/DURC/order/$id")->with('status', 'Data Saved!');
        
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order){
	    return order::destroy( $order->id );  
    }
    
    /**
     * Restore the specified resource from storage.
     * @param  $id ID of resource
     * @return \Illuminate\Http\Response
     */
    public function restore( $id )
    {
        $order = order::withTrashed()->find($id)->restore();
        return redirect("/DURC/test_soft_delete/$id")->with('status', 'Data Restored!');
    }
}
