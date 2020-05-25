<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_northwind_model.product by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in product.php 

*/

class product extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_northwind_model.product';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'inventorytransaction', //from from many
			'orderdetail', //from from many
			'purchaseorderdetail', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'supplier_ids' => 'longtext',
		'id' => 'int',
		'productCode' => 'varchar',
		'productName' => 'varchar',
		'description' => 'longtext',
		'standardCost' => 'decimal',
		'listPrice' => 'decimal',
		'reorderLevel' => 'int',
		'targetLevel' => 'int',
		'quantityPerUnit' => 'varchar',
		'discontinued' => 'tinyint',
		'minimumReorderQuantity' => 'int',
		'category' => 'varchar',
		'attachments' => 'longblob',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'listPrice',
		'discontinued',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'supplier_ids' => 'NULL',
		'id' => null,
		'productCode' => 'NULL',
		'productName' => 'NULL',
		'description' => 'NULL',
		'standardCost' => '0.0000',
		'listPrice' => '0.0000',
		'reorderLevel' => 'NULL',
		'targetLevel' => 'NULL',
		'quantityPerUnit' => 'NULL',
		'discontinued' => '0',
		'minimumReorderQuantity' => 'NULL',
		'category' => 'NULL',
		'attachments' => 'NULL',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'supplier_ids' => 'nullable',
		'id' => 'integer',
		'productCode' => 'nullable',
		'productName' => 'nullable',
		'description' => 'nullable',
		'standardCost' => 'nullable',
		'reorderLevel' => 'integer|nullable',
		'targetLevel' => 'integer|nullable',
		'quantityPerUnit' => 'nullable',
		'minimumReorderQuantity' => 'integer|nullable',
		'category' => 'nullable',
		'attachments' => 'nullable',
	]; // End of validation rules
		
        
	// These are mutators generated for all model attributes.
	// Mutators are called implicitly when getting and setting the attribute
	public function getSupplierIdsAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setSupplierIdsAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('supplier_ids', 'longtext', $value, $this);
		$this->attributes['supplier_ids'] = $formatted_value;
	}

	public function getIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('id', 'int', $value, $this);
		$this->attributes['id'] = $formatted_value;
	}

	public function getProductCodeAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setProductCodeAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('productCode', 'varchar', $value, $this);
		$this->attributes['productCode'] = $formatted_value;
	}

	public function getProductNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setProductNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('productName', 'varchar', $value, $this);
		$this->attributes['productName'] = $formatted_value;
	}

	public function getDescriptionAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setDescriptionAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('description', 'longtext', $value, $this);
		$this->attributes['description'] = $formatted_value;
	}

	public function getStandardCostAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setStandardCostAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('standardCost', 'decimal', $value, $this);
		$this->attributes['standardCost'] = $formatted_value;
	}

	public function getListPriceAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setListPriceAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('listPrice', 'decimal', $value, $this);
		$this->attributes['listPrice'] = $formatted_value;
	}

	public function getReorderLevelAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setReorderLevelAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('reorderLevel', 'int', $value, $this);
		$this->attributes['reorderLevel'] = $formatted_value;
	}

	public function getTargetLevelAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setTargetLevelAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('targetLevel', 'int', $value, $this);
		$this->attributes['targetLevel'] = $formatted_value;
	}

	public function getQuantityPerUnitAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setQuantityPerUnitAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('quantityPerUnit', 'varchar', $value, $this);
		$this->attributes['quantityPerUnit'] = $formatted_value;
	}

	public function getDiscontinuedAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setDiscontinuedAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('discontinued', 'tinyint', $value, $this);
		$this->attributes['discontinued'] = $formatted_value;
	}

	public function getMinimumReorderQuantityAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setMinimumReorderQuantityAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('minimumReorderQuantity', 'int', $value, $this);
		$this->attributes['minimumReorderQuantity'] = $formatted_value;
	}

	public function getCategoryAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCategoryAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('category', 'varchar', $value, $this);
		$this->attributes['category'] = $formatted_value;
	}

	public function getAttachmentsAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setAttachmentsAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('attachments', 'longblob', $value, $this);
		$this->attributes['attachments'] = $formatted_value;
	}

 
        
		
//DURC HAS_MANY SECTION

/**
*	get all the inventorytransaction for this product
*/
	public function inventorytransaction(){
		return $this->hasMany('App\inventorytransaction','product_id','id');
	}


/**
*	get all the orderdetail for this product
*/
	public function orderdetail(){
		return $this->hasMany('App\orderdetail','product_id','id');
	}


/**
*	get all the purchaseorderdetail for this product
*/
	public function purchaseorderdetail(){
		return $this->hasMany('App\purchaseorderdetail','product_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_model`.`product` (
  `supplier_ids` longtext DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productCode` varchar(25) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `standardCost` decimal(19,4) DEFAULT 0.0000,
  `listPrice` decimal(19,4) NOT NULL DEFAULT 0.0000,
  `reorderLevel` int(11) DEFAULT NULL,
  `targetLevel` int(11) DEFAULT NULL,
  `quantityPerUnit` varchar(50) DEFAULT NULL,
  `discontinued` tinyint(1) NOT NULL DEFAULT 0,
  `minimumReorderQuantity` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `attachments` longblob DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productCode` (`productCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of product