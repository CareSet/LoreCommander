<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.creature by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in creature.php 

*/

class creature extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.creature';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'classofc_creature', //from from many
			'creature_cardface', //from from many
			'person_creature_tag', //from from many
			'emblematic_theme', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'creature_name' => 'varchar',
		'creature_image_uri' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'creature_name',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'creature_name' => null,
		'creature_image_uri' => 'NULL',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'creature_name' => 'required',
		'creature_image_uri' => 'url|nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the classofc_creature for this creature
*/
	public function classofc_creature(){
		return $this->hasMany('App\classofc_creature','creature_id','id');
	}


/**
*	get all the creature_cardface for this creature
*/
	public function creature_cardface(){
		return $this->hasMany('App\creature_cardface','creature_id','id');
	}


/**
*	get all the person_creature_tag for this creature
*/
	public function person_creature_tag(){
		return $this->hasMany('App\person_creature_tag','creature_id','id');
	}


/**
*	get all the emblematic_theme for this creature
*/
	public function emblematic_theme(){
		return $this->hasMany('App\theme','emblematic_creature_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`creature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creature_name` varchar(255) NOT NULL,
  `creature_image_uri` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `creature_name` (`creature_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of creature