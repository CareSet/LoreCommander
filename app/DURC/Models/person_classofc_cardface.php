<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
use OwenIt\Auditing\Contracts\Auditable;
/*
	Note this class was auto-generated from 

lore.person_classofc_cardface by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in person_classofc_cardface.php 

*/

class person_classofc_cardface extends DURCModel  implements Auditable {

	 use \OwenIt\Auditing\Auditable; // configured using is_auditable = 1 in config json

    

    
        // the datbase for this model
        protected $table = 'lore.person_classofc_cardface';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'person', //from belongs to
			'classofc', //from belongs to
			'cardface', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'person_id' => 'int',
		'classofc_id' => 'int',
		'cardface_id' => 'int',
		'is_bulk_linker' => 'tinyint',
		'link_note' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'person_id',
		'classofc_id',
		'cardface_id',
		'is_bulk_linker',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'person_id' => null,
		'classofc_id' => null,
		'cardface_id' => null,
		'is_bulk_linker' => '0',
		'link_note' => 'NULL',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'person_id' => 'integer|required',
		'classofc_id' => 'integer|required',
		'cardface_id' => 'integer|required',
		'is_bulk_linker' => 'boolean|integer',
		'link_note' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single person for this person_classofc_cardface
*/
	public function person(){
		return $this->belongsTo('App\person','person_id','id');
	}


/**
*	get the single classofc for this person_classofc_cardface
*/
	public function classofc(){
		return $this->belongsTo('App\classofc','classofc_id','id');
	}


/**
*	get the single cardface for this person_classofc_cardface
*/
	public function cardface(){
		return $this->belongsTo('App\cardface','cardface_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`person_classofc_cardface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `classofc_id` int(11) NOT NULL,
  `cardface_id` int(11) NOT NULL,
  `is_bulk_linker` tinyint(1) NOT NULL DEFAULT 0,
  `link_note` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id` (`person_id`,`classofc_id`,`cardface_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
*/


}//end of person_classofc_cardface