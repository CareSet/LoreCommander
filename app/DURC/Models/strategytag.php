<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.strategytag by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in strategytag.php 

*/

class strategytag extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.strategytag';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'person_strategy_strategytag', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'strategytag_name' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'strategytag_name',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'strategytag_name' => null,
		'created_at' => null,
		'updated_at' => null,
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'id' => 'integer',
		'strategytag_name' => 'present',
		'created_at' => 'present',
		'updated_at' => 'present',
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
		$formatted_value = DURC::formatForStorage('id', 'int', $value, $this);
		$this->attributes['id'] = $formatted_value;
	}

	public function getStrategytagNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setStrategytagNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('strategytag_name', 'varchar', $value, $this);
		$this->attributes['strategytag_name'] = $formatted_value;
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

/**
*	get all the person_strategy_strategytag for this strategytag
*/
	public function person_strategy_strategytag(){
		return $this->hasMany('App\person_strategy_strategytag','strategytag_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`strategytag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strategytag_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of strategytag