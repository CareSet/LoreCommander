<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_aaa.test_boolean by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in test_boolean.php 

*/

class test_boolean extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_aaa.test_boolean';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'label' => 'varchar',
		'is_something' => 'varchar',
		'has_something' => 'varchar',
		'is_something2' => 'tinyint',
		'has_something2' => 'tinyint',
		'has_something3' => 'tinyint',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'label',
		'is_something',
		'has_something',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'label' => null,
		'is_something' => null,
		'has_something' => null,
		'is_something2' => 'NULL',
		'has_something2' => 'NULL',
		'has_something3' => 'NULL',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'label' => 'required',
		'is_something' => 'boolean|required',
		'has_something' => 'boolean|required',
		'is_something2' => 'boolean|integer|nullable',
		'has_something2' => 'boolean|integer|nullable',
		'has_something3' => 'boolean|integer|nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_aaa`.`test_boolean` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `is_something` varchar(255) NOT NULL,
  `has_something` varchar(255) NOT NULL,
  `is_something2` tinyint(4) DEFAULT NULL,
  `has_something2` tinyint(4) DEFAULT NULL,
  `has_something3` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1
*/


}//end of test_boolean