<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.cardprice by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in cardprice.php 

*/

class cardprice extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.cardprice';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'card', //from belongs to
			'pricetype', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'bigint',
		'card_id' => 'int',
		'scryfall_id' => 'varchar',
		'pricetype_id' => 'int',
		'price' => 'decimal',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'card_id',
		'scryfall_id',
		'pricetype_id',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'card_id' => null,
		'scryfall_id' => null,
		'pricetype_id' => null,
		'price' => 'NULL',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'card_id' => 'integer|present',
		'scryfall_id' => 'present',
		'pricetype_id' => 'integer|present',
		'price' => 'nullable',
	]; // End of validation rules
		
        
	// These are mutators generated for all model attributes.
	// Mutators are called implicitly when getting and setting the attribute
	public function getIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('id', 'bigint', $value, $this);
		$this->attributes['id'] = $formatted_value;
	}

	public function getCardIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCardIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('card_id', 'int', $value, $this);
		$this->attributes['card_id'] = $formatted_value;
	}

	public function getScryfallIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setScryfallIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('scryfall_id', 'varchar', $value, $this);
		$this->attributes['scryfall_id'] = $formatted_value;
	}

	public function getPricetypeIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setPricetypeIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('pricetype_id', 'int', $value, $this);
		$this->attributes['pricetype_id'] = $formatted_value;
	}

	public function getPriceAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setPriceAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('price', 'decimal', $value, $this);
		$this->attributes['price'] = $formatted_value;
	}

	public function getCreatedAtAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCreatedAtAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('created_at', 'datetime', $value, $this);
		$this->attributes['created_at'] = $formatted_value;
	}

	public function getUpdatedAtAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setUpdatedAtAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('updated_at', 'datetime', $value, $this);
		$this->attributes['updated_at'] = $formatted_value;
	}

 
        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single card for this cardprice
*/
	public function card(){
		return $this->belongsTo('App\card','card_id','id');
	}


/**
*	get the single pricetype for this cardprice
*/
	public function pricetype(){
		return $this->belongsTo('App\pricetype','pricetype_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`cardprice` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) NOT NULL,
  `scryfall_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricetype_id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `card_id` (`card_id`),
  KEY `created_at` (`created_at`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
*/


}//end of cardprice