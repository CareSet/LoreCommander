<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_northwind_model.shipper by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in shipper.php 

*/

class shipper extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_northwind_model.shipper';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'order', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'company' => 'varchar',
		'lastName' => 'varchar',
		'firstName' => 'varchar',
		'emailAddress' => 'varchar',
		'jobTitle' => 'varchar',
		'businessPhone' => 'varchar',
		'homePhone' => 'varchar',
		'mobilePhone' => 'varchar',
		'faxNumber' => 'varchar',
		'address' => 'longtext',
		'city' => 'varchar',
		'stateProvince' => 'varchar',
		'zipPostalCode' => 'varchar',
		'countryRegion' => 'varchar',
		'webPage' => 'longtext',
		'notes' => 'longtext',
		'attachments' => 'longblob',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'company' => 'NULL',
		'lastName' => 'NULL',
		'firstName' => 'NULL',
		'emailAddress' => 'NULL',
		'jobTitle' => 'NULL',
		'businessPhone' => 'NULL',
		'homePhone' => 'NULL',
		'mobilePhone' => 'NULL',
		'faxNumber' => 'NULL',
		'address' => 'NULL',
		'city' => 'NULL',
		'stateProvince' => 'NULL',
		'zipPostalCode' => 'NULL',
		'countryRegion' => 'NULL',
		'webPage' => 'NULL',
		'notes' => 'NULL',
		'attachments' => 'NULL',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'company' => 'nullable',
		'lastName' => 'nullable',
		'firstName' => 'nullable',
		'emailAddress' => 'nullable',
		'jobTitle' => 'nullable',
		'businessPhone' => 'nullable',
		'homePhone' => 'nullable',
		'mobilePhone' => 'nullable',
		'faxNumber' => 'nullable',
		'address' => 'nullable',
		'city' => 'nullable',
		'stateProvince' => 'nullable',
		'zipPostalCode' => 'nullable',
		'countryRegion' => 'nullable',
		'webPage' => 'nullable',
		'notes' => 'nullable',
		'attachments' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the order for this shipper
*/
	public function order(){
		return $this->hasMany('App\order','shipper_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_model`.`shipper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `emailAddress` varchar(50) DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL,
  `businessPhone` varchar(25) DEFAULT NULL,
  `homePhone` varchar(25) DEFAULT NULL,
  `mobilePhone` varchar(25) DEFAULT NULL,
  `faxNumber` varchar(25) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stateProvince` varchar(50) DEFAULT NULL,
  `zipPostalCode` varchar(15) DEFAULT NULL,
  `countryRegion` varchar(50) DEFAULT NULL,
  `webPage` longtext DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `attachments` longblob DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`city`),
  KEY `company` (`company`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `zipPostalCode` (`zipPostalCode`),
  KEY `stateProvince` (`stateProvince`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of shipper