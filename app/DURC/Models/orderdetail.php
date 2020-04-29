<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

DURC_northwind_data.orderDetail by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in orderdetail.php 

*/

class orderdetail extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_northwind_data.orderDetail';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'order', //from belongs to
			'product', //from belongs to
			'purchaseorder', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'order_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'decimal',
		'unitPrice' => 'decimal',
		'discount' => 'double',
		'status_id' => 'int',
		'dateAllocated' => 'datetime',
		'PurchaseOrder_id' => 'int',
		'inventory_id' => 'int',
			]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'id',
		'order_id',
		'quantity',
		'discount',
			]; // End of nullable fields

    // Use Eloquent attributes array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $attributes = [
		'id' => null,
		'order_id' => null,
		'product_id' => 'NULL',
		'quantity' => '0.0000',
		'unitPrice' => '0.0000',
		'discount' => '0',
		'status_id' => 'NULL',
		'dateAllocated' => 'NULL',
		'PurchaseOrder_id' => 'NULL',
		'inventory_id' => 'NULL',
			]; // End of attributes
        
		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single order for this orderdetail
*/
	public function order(){
		return $this->belongsTo('App\order','order_id','id');
	}


/**
*	get the single product for this orderdetail
*/
	public function product(){
		return $this->belongsTo('App\product','product_id','id');
	}


/**
*	get the single purchaseorder for this orderdetail
*/
	public function purchaseorder(){
		return $this->belongsTo('App\purchaseorder','PurchaseOrder_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_data`.`orderDetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` decimal(18,4) NOT NULL DEFAULT 0.0000,
  `unitPrice` decimal(19,4) DEFAULT 0.0000,
  `discount` double NOT NULL DEFAULT 0,
  `status_id` int(11) DEFAULT NULL,
  `dateAllocated` datetime DEFAULT NULL,
  `PurchaseOrder_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `inventory_id` (`inventory_id`),
  KEY `product_id` (`product_id`),
  KEY `purchaseOrder_id` (`PurchaseOrder_id`),
  KEY `fkOrderDetailOrder1_idx` (`order_id`),
  KEY `fkOrderDetailOrderDetailStatus1_idx` (`status_id`),
  CONSTRAINT `fkOrderDetailOrder1` FOREIGN KEY (`order_id`) REFERENCES `northwind_model`.`order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderDetailOrderDetailStatus1` FOREIGN KEY (`status_id`) REFERENCES `northwind_model`.`orderDetailStatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderDetailProducts1` FOREIGN KEY (`product_id`) REFERENCES `northwind_model`.`product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of orderdetail