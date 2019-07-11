<?php

namespace App\DURC\Controllers;

use App\person_creature_relation;
use Illuminate\Http\Request;
use CareSet\DURC\DURC;
use CareSet\DURC\DURCController;
use Illuminate\Support\Facades\View;

class person_creature_relationController extends DURCController
{


	public $view_data = [];

	protected static $hidden_fields_array = [
		'created_at',
		'updated_at',

	];


	public function getWithArgumentArray(){
		
		$with_summary_array = [];
		$with_summary_array[] = "person:id,".\App\person::getNameField();
		$with_summary_array[] = "relation:id,".\App\relation::getNameField();
		$with_summary_array[] = "creature:id,".\App\creature::getNameField();

		return($with_summary_array);
		
	}


	private function _get_index_list(Request $request){

		$return_me = [];

		$with_argument = $this->getWithArgumentArray();

		$these = person_creature_relation::with($with_argument)->paginate(100);

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

                                        if ( isset( person_creature_relation::$field_type_map[$lowest_key] ) ) {
                                            $field_type = person_creature_relation::$field_type_map[ $lowest_key ];
                                            $return_me_data[$data_i][$key .'_id_DURClabel'] = DURC::formatForDisplay( $field_type, $lowest_key, $lowest_data, true );
                                        } else {
                                            $return_me_data[$data_i][$key .'_id_DURClabel'] = $lowest_data;
                                        }
                                }
                        }

                        if ( isset( person_creature_relation::$field_type_map[$key] ) ) {
                            $field_type = person_creature_relation::$field_type_map[ $key ];
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

		//TODO we need to escape this query string to avoid SQL injection.

		//what is the field I should be searching
                $search_fields = person_creature_relation::getSearchFields();

		$where_sql = '';
		$or = '';
		foreach($search_fields as $this_field){
			$where_sql .= " $or $this_field LIKE '%$q%'  ";
			$or = ' OR ';
		}

		$these = person_creature_relation::whereRaw($where_sql)
					->take(20)
					->get();


		$return_me['pagination'] = ['more' => false];
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
			$tmp['text'] = $tmp_text;
			$real_array[] = $tmp;
		}


		$return_me['results'] = $real_array;

		// you might this helpful for debugging..
		//$return_me['where'] = $where_sql;

		return response()->json($return_me);

	}

    /**
     * Get a json version of all the objects.. 
     * @param  \App\person_creature_relation  $person_creature_relation
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
	$durc_template_results = view('DURC.person_creature_relation.index',$this->view_data);        
	return view($main_template_name,['content' => $durc_template_results]);
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */ 
    public function store(Request $request){

	$myNewperson_creature_relation = new person_creature_relation();

	//the games we play to easily auto-generate code..
	$tmp_person_creature_relation = $myNewperson_creature_relation;
			$tmp_person_creature_relation->id = DURC::formatForStorage( 'id', 'int', $request->id ); 
		$tmp_person_creature_relation->person_id = DURC::formatForStorage( 'person_id', 'int', $request->person_id ); 
		$tmp_person_creature_relation->relation_id = DURC::formatForStorage( 'relation_id', 'int', $request->relation_id ); 
		$tmp_person_creature_relation->creature_id = DURC::formatForStorage( 'creature_id', 'int', $request->creature_id ); 
		$tmp_person_creature_relation->justification_note = DURC::formatForStorage( 'justification_note', 'varchar', $request->justification_note ); 
		$tmp_person_creature_relation->justification_url = DURC::formatForStorage( 'justification_url', 'varchar', $request->justification_url ); 
		$tmp_person_creature_relation->save();


	$new_id = $myNewperson_creature_relation->id;

	return redirect("/DURC/person_creature_relation/$new_id")->with('status', 'Data Saved!');
    }//end store function

    /**
     * Display the specified resource.
     * @param  \App\$person_creature_relation  $person_creature_relation
     * @return \Illuminate\Http\Response
     */
    public function show(person_creature_relation $person_creature_relation){
	return($this->edit($person_creature_relation));
    }

    /**
     * Get a json version of the given object 
     * @param  \App\person_creature_relation  $person_creature_relation
     * @return JSON of the object
     */
    public function jsonone(Request $request, $person_creature_relation_id){
		$person_creature_relation = \App\person_creature_relation::find($person_creature_relation_id);
		$person_creature_relation = $person_creature_relation->fresh_with_relations(); //this is a custom function from DURCModel. you can control what gets autoloaded by modifying the DURC_selfish_with contents on your customized models
		return response()->json($person_creature_relation->toArray());
 	}


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(){
	// but really, we are just going to edit a new object..
	$new_instance = new person_creature_relation();
	return $this->edit($new_instance);
    }


    /**
     * Show the form for editing the specified resource.
     * @param  \App\person_creature_relation  $person_creature_relation
     * @return \Illuminate\Http\Response
     */
    public function edit(person_creature_relation $person_creature_relation){

	$main_template_name = $this->_getMainTemplateName();

	//do we have a status message in the session? The view needs it...
	$this->view_data['session_status'] = session('status',false);
	if($this->view_data['session_status']){
		$this->view_data['has_session_status'] = true;
	}else{
		$this->view_data['has_session_status'] = false;
	}

	$this->view_data['csrf_token'] = csrf_token();
	
	
	foreach ( person_creature_relation::$field_type_map as $column_name => $field_type ) {
        // If this field name is in the configured list of hidden fields, do not display the row.
        $this->view_data["{$column_name}_row_class"] = '';
        if ( in_array( $column_name, self::$hidden_fields_array ) ) {
            $this->view_data["{$column_name}_row_class"] = 'd-none';
        }
    }

	if($person_creature_relation->exists){	//we will not have old data if this is a new object

		//well lets properly eager load this object with a refresh to load all of the related things
		$person_creature_relation = $person_creature_relation->fresh_with_relations(); //this is a custom function from DURCModel. you can control what gets autoloaded by modifying the DURC_selfish_with contents on your customized models

		//put the contents into the view...
		foreach($person_creature_relation->toArray() as $key => $value){
			if ( isset( person_creature_relation::$field_type_map[$key] ) ) {
                $field_type = person_creature_relation::$field_type_map[ $key ];
                $this->view_data[$key] = DURC::formatForDisplay( $field_type, $key, $value );
            } else {
                $this->view_data[$key] = $value;
            }
		}

		//what is this object called?
		$name_field = $person_creature_relation->_getBestName();
		$this->view_data['is_new'] = false;
		$this->view_data['durc_instance_name'] = $person_creature_relation->$name_field;
	}else{
		$this->view_data['is_new'] = true;
	}

	$debug = false;
	if($debug){
		echo '<pre>';
		var_export($this->view_data);
		exit();
	}
	

	$durc_template_results = view('DURC.person_creature_relation.edit',$this->view_data);        
	return view($main_template_name,['content' => $durc_template_results]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\person_creature_relation  $person_creature_relation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, person_creature_relation $person_creature_relation){

	$tmp_person_creature_relation = $person_creature_relation;
			$tmp_person_creature_relation->id = DURC::formatForStorage( 'id', 'int', $request->id ); 
		$tmp_person_creature_relation->person_id = DURC::formatForStorage( 'person_id', 'int', $request->person_id ); 
		$tmp_person_creature_relation->relation_id = DURC::formatForStorage( 'relation_id', 'int', $request->relation_id ); 
		$tmp_person_creature_relation->creature_id = DURC::formatForStorage( 'creature_id', 'int', $request->creature_id ); 
		$tmp_person_creature_relation->justification_note = DURC::formatForStorage( 'justification_note', 'varchar', $request->justification_note ); 
		$tmp_person_creature_relation->justification_url = DURC::formatForStorage( 'justification_url', 'varchar', $request->justification_url ); 
		$tmp_person_creature_relation->save();


	$id = $person_creature_relation->id;

	return redirect("/DURC/person_creature_relation/$id")->with('status', 'Data Saved!');
        
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\person_creature_relation  $person_creature_relation
     * @return \Illuminate\Http\Response
     */
    public function destroy(person_creature_relation $person_creature_relation){
	    return person_creature_relation::destroy( $person_creature_relation->id );  
    }
    
    /**
     * Restore the specified resource from storage.
     * @param  $id ID of resource
     * @return \Illuminate\Http\Response
     */
    public function restore( $id )
    {
        $person_creature_relation = person_creature_relation::withTrashed()->find($id)->restore();
        return redirect("/DURC/test_soft_delete/$id")->with('status', 'Data Restored!');
    }
}