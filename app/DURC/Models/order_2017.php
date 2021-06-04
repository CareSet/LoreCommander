<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_northwind_data.order_2017 by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in order_2017.php 

*/

class order_2017 extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_northwind_data.order_2017';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'employee', //from belongs to
			'customer', //from belongs to
			'shipper', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'employee_id' => 'int',
		'customer_id' => 'int',
		'orderDate' => 'datetime',
		'shippedDate' => 'datetime',
		'shipper_id' => 'int',
		'shipName' => 'varchar',
		'shipAddress' => 'longtext',
		'shipCity' => 'varchar',
		'shipStateProvince' => 'varchar',
		'shipZipPostalCode' => 'varchar',
		'shipCountryRegion' => 'varchar',
		'shippingFee' => 'decimal',
		'taxes' => 'decimal',
		'paymentType' => 'varchar',
		'paidDate' => 'datetime',
		'notes' => 'longtext',
		'taxRate' => 'double',
		'taxStatus_id' => 'tinyint',
		'status_id' => 'tinyint',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'orderDate',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'employee_id' => 'NULL',
		'customer_id' => 'NULL',
		'orderDate' => 'current_timestamp()',
		'shippedDate' => 'NULL',
		'shipper_id' => 'NULL',
		'shipName' => 'NULL',
		'shipAddress' => 'NULL',
		'shipCity' => 'NULL',
		'shipStateProvince' => 'NULL',
		'shipZipPostalCode' => 'NULL',
		'shipCountryRegion' => 'NULL',
		'shippingFee' => '0.0000',
		'taxes' => '0.0000',
		'paymentType' => 'NULL',
		'paidDate' => 'NULL',
		'notes' => 'NULL',
		'taxRate' => '0',
		'taxStatus_id' => 'NULL',
		'status_id' => '0',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'employee_id' => 'integer|nullable',
		'customer_id' => 'integer|nullable',
		'shippedDate' => 'nullable',
		'shipper_id' => 'integer|nullable',
		'shipName' => 'nullable',
		'shipAddress' => 'nullable',
		'shipCity' => 'nullable',
		'shipStateProvince' => 'nullable',
		'shipZipPostalCode' => 'nullable',
		'shipCountryRegion' => 'nullable',
		'shippingFee' => 'numeric|nullable',
		'taxes' => 'numeric|nullable',
		'paymentType' => 'nullable',
		'paidDate' => 'nullable',
		'notes' => 'nullable',
		'taxRate' => 'numeric|nullable',
		'taxStatus_id' => 'integer|nullable',
		'status_id' => 'integer|nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single employee for this order_2017
*/
	public function employee(){
		return $this->belongsTo('App\employee','employee_id','id');
	}


/**
*	get the single customer for this order_2017
*/
	public function customer(){
		return $this->belongsTo('App\customer','customer_id','id');
	}


/**
*	get the single shipper for this order_2017
*/
	public function shipper(){
		return $this->belongsTo('App\shipper','shipper_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_data`.`order_2017` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `shippedDate` datetime DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `shipName` varchar(50) DEFAULT NULL,
  `shipAddress` longtext DEFAULT NULL,
  `shipCity` varchar(50) DEFAULT NULL,
  `shipStateProvince` varchar(50) DEFAULT NULL,
  `shipZipPostalCode` varchar(50) DEFAULT NULL,
  `shipCountryRegion` varchar(50) DEFAULT NULL,
  `shippingFee` decimal(19,4) DEFAULT 0.0000,
  `taxes` decimal(19,4) DEFAULT 0.0000,
  `paymentType` varchar(50) DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `taxRate` double DEFAULT 0,
  `taxStatus_id` tinyint(4) DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `id` (`id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `taxStatus` (`taxStatus_id`),
  KEY `shipZipPostalCode` (`shipZipPostalCode`),
  KEY `fkOrderOrderStatus1` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of order_2017