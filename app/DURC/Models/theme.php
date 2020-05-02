<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.theme by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in theme.php 

*/

class theme extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.theme';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'emblematic_person', //from belongs to
			'emblematic_cardface', //from belongs to
			'emblematic_creature', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'theme_name' => 'varchar',
		'theme_description' => 'text',
		'emblematic_person_id' => 'int',
		'emblematic_cardface_id' => 'int',
		'emblematic_creature_id' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'id',
		'theme_name',
		'theme_description',
		'emblematic_person_id',
		'emblematic_cardface_id',
		'emblematic_creature_id',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'theme_name' => null,
		'theme_description' => null,
		'emblematic_person_id' => null,
		'emblematic_cardface_id' => null,
		'emblematic_creature_id' => null,
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'id' => 'integer|required',
		'theme_name' => 'required',
		'theme_description' => 'required',
		'emblematic_person_id' => 'integer|required',
		'emblematic_cardface_id' => 'integer|required',
		'emblematic_creature_id' => 'integer|required',
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

	public function getThemeNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setThemeNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('theme_name', 'varchar', $value, $this);
		$this->attributes['theme_name'] = $formatted_value;
	}

	public function getThemeDescriptionAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setThemeDescriptionAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('theme_description', 'text', $value, $this);
		$this->attributes['theme_description'] = $formatted_value;
	}

	public function getEmblematicPersonIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setEmblematicPersonIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('emblematic_person_id', 'int', $value, $this);
		$this->attributes['emblematic_person_id'] = $formatted_value;
	}

	public function getEmblematicCardfaceIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setEmblematicCardfaceIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('emblematic_cardface_id', 'int', $value, $this);
		$this->attributes['emblematic_cardface_id'] = $formatted_value;
	}

	public function getEmblematicCreatureIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setEmblematicCreatureIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('emblematic_creature_id', 'int', $value, $this);
		$this->attributes['emblematic_creature_id'] = $formatted_value;
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
*	get the single emblematic_person for this theme
*/
	public function emblematic_person(){
		return $this->belongsTo('App\person','emblematic_person_id','id');
	}


/**
*	get the single emblematic_cardface for this theme
*/
	public function emblematic_cardface(){
		return $this->belongsTo('App\cardface','emblematic_cardface_id','id');
	}


/**
*	get the single emblematic_creature for this theme
*/
	public function emblematic_creature(){
		return $this->belongsTo('App\creature','emblematic_creature_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`theme` (
  `id` int(11) NOT NULL,
  `theme_name` varchar(150) NOT NULL,
  `theme_description` text NOT NULL,
  `emblematic_person_id` int(11) NOT NULL,
  `emblematic_cardface_id` int(11) NOT NULL,
  `emblematic_creature_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4
*/


}//end of theme