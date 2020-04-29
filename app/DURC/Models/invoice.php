<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

DURC_northwind_data.invoice by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in invoice.php 

*/

class invoice extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_northwind_data.invoice';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'order', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'order_id' => 'int',
		'invoiceDate' => 'datetime',
		'dueDate' => 'datetime',
		'tax' => 'decimal',
		'shipping' => 'decimal',
		'amountDue' => 'decimal',
			]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'id',
		'invoiceDate',
			]; // End of nullable fields

    // Use Eloquent attributes array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $attributes = [
		'id' => null,
		'order_id' => 'NULL',
		'invoiceDate' => 'current_timestamp()',
		'dueDate' => 'NULL',
		'tax' => '0.0000',
		'shipping' => '0.0000',
		'amountDue' => '0.0000',
			]; // End of attributes
        
		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single order for this invoice
*/
	public function order(){
		return $this->belongsTo('App\order','order_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_data`.`invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `invoiceDate` datetime NOT NULL DEFAULT current_timestamp(),
  `dueDate` datetime DEFAULT NULL,
  `tax` decimal(19,4) DEFAULT 0.0000,
  `shipping` decimal(19,4) DEFAULT 0.0000,
  `amountDue` decimal(19,4) DEFAULT 0.0000,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `fkInvoicesOrder1_idx` (`order_id`),
  CONSTRAINT `fkInvoicesOrder1` FOREIGN KEY (`order_id`) REFERENCES `northwind_model`.`order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of invoice