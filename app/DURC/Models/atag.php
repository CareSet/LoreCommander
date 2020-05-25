<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.atag by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in atag.php 

*/

class atag extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.atag';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'cardface_classofc_atag', //from from many
			'cardface_person_atag', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'arttag_name' => 'varchar',
		'is_directed' => 'tinyint',
		'excludes_arttag_id' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'arttag_name',
		'is_directed',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'arttag_name' => null,
		'is_directed' => '0',
		'excludes_arttag_id' => 'NULL',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'arttag_name' => 'required',
		'is_directed' => 'integer',
		'excludes_arttag_id' => 'integer|nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the cardface_classofc_atag for this atag
*/
	public function cardface_classofc_atag(){
		return $this->hasMany('App\cardface_classofc_atag','atag_id','id');
	}


/**
*	get all the cardface_person_atag for this atag
*/
	public function cardface_person_atag(){
		return $this->hasMany('App\cardface_person_atag','atag_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`atag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arttag_name` varchar(255) NOT NULL,
  `is_directed` tinyint(1) NOT NULL DEFAULT 0,
  `excludes_arttag_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_name` (`arttag_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of atag