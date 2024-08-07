<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=42b3d9e21fc3dc7c55bb7f016e363dde
*/
namespace App;
/*
	employee: controls DURC_northwind_model.employee

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class employee extends \App\DURC\Models\employee
{
	//this controls what is downloaded in the json for this object under card_body.. 
	//this function returns the html snippet that should be loaded for the summary of this object in a bootstrap card
	//read about the structure here: https://getbootstrap.com/docs/4.3/components/card/
	//this function should return an html snippet to go in the first 'card-body' div of an HTML interface...
	public function getCardBody() {
		return parent::getCardBody(); //just use the standard one unless a user over-rides this..
	}


	//You may need to change these for 'one to very very many' relationships.
/*
		protected $DURC_selfish_with = [ 
			'order', //from from many
			'order_2017', //from from many
			'order_2018', //from from many
			'order_2019', //from from many
			'createdBy_purchaseorder', //from from many
			'approvedBy_purchaseorder', //from from many
			'submittedBy_purchaseorder', //from from many
			'employeeprivilege', //from from one
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'company', //varchar
			//'lastName', //varchar
			//'firstName', //varchar
			//'emailAddress', //varchar
			//'jobTitle', //varchar
			//'businessPhone', //varchar
			//'homePhone', //varchar
			//'mobilePhone', //varchar
			//'faxNumber', //varchar
			//'address', //longtext
			//'city', //varchar
			//'stateProvince', //varchar
			//'zipPostalCode', //varchar
			//'countryRegion', //varchar
			//'webPage', //longtext
			//'notes', //longtext
			//'attachments', //longblob
		]; //end hidden array


//DURC HAS_MANY SECTION

/**
*	DURC is handling the order for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function order(){
		return parent::order();
	}


/**
*	DURC is handling the order_2017 for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function order_2017(){
		return parent::order_2017();
	}


/**
*	DURC is handling the order_2018 for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function order_2018(){
		return parent::order_2018();
	}


/**
*	DURC is handling the order_2019 for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function order_2019(){
		return parent::order_2019();
	}


/**
*	DURC is handling the createdBy_purchaseorder for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function createdBy_purchaseorder(){
		return parent::createdBy_purchaseorder();
	}


/**
*	DURC is handling the approvedBy_purchaseorder for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function approvedBy_purchaseorder(){
		return parent::approvedBy_purchaseorder();
	}


/**
*	DURC is handling the submittedBy_purchaseorder for this employee in employee
*       but you can extend or override the defaults by editing this function...
*/
	public function submittedBy_purchaseorder(){
		return parent::submittedBy_purchaseorder();
	}


//DURC BELONGS_TO SECTION
			//DURC did not detect any belongs_to relationships

	//look in the parent class for the SQL used to generate the underlying table

	//add fields here to entirely hide them in the default DURC web interface.
        public static $UX_hidden_col = [
        ];

        public static function isFieldHiddenInGenericDurcEditor($field){
                if(in_array($field,self::$UX_hidden_col)){
                        return(true);
                }
        }

	//add fields here to make them view-only in the default DURC web interface
        public static $UX_view_only_col = [
        ];

        public static function isFieldViewOnlyInGenericDurcEditor($field){
                if(in_array($field,self::$UX_view_only_col)){
                        return(true);
                }
        }

	//your stuff goes here..
	

}//end employee