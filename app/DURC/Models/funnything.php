<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_aaa.funnything by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in funnything.php 

*/

class funnything extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_aaa.funnything';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'thisint' => 'int',
		'thisfloat' => 'float',
		'thisdecimal' => 'decimal',
		'thisvarchar' => 'varchar',
		'thisdate' => 'date',
		'thisdatetime' => 'datetime',
		'thistimestamp' => 'timestamp',
		'thischar' => 'char',
		'thistext' => 'mediumtext',
		'thisblob' => 'blob',
		'thistinyint' => 'tinyint',
		'thistinytext' => 'text',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'thischar',
		'thistext',
		'thistinyint',
		'thistinytext',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'thisint' => 'NULL',
		'thisfloat' => 'NULL',
		'thisdecimal' => 'NULL',
		'thisvarchar' => 'NULL',
		'thisdate' => 'NULL',
		'thisdatetime' => 'NULL',
		'thistimestamp' => 'NULL',
		'thischar' => null,
		'thistext' => null,
		'thisblob' => 'NULL',
		'thistinyint' => null,
		'thistinytext' => null,
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'thisint' => 'integer|nullable',
		'thisfloat' => 'numeric|nullable',
		'thisdecimal' => 'numeric|nullable',
		'thisvarchar' => 'nullable',
		'thisdate' => 'nullable',
		'thisdatetime' => 'nullable',
		'thistimestamp' => 'nullable',
		'thischar' => 'required',
		'thistext' => 'required',
		'thisblob' => 'nullable',
		'thistinyint' => 'integer|required',
		'thistinytext' => 'required',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_aaa`.`funnything` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thisint` int(11) DEFAULT NULL,
  `thisfloat` float DEFAULT NULL,
  `thisdecimal` decimal(5,5) DEFAULT NULL,
  `thisvarchar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thisdate` date DEFAULT NULL,
  `thisdatetime` datetime DEFAULT NULL,
  `thistimestamp` timestamp NULL DEFAULT NULL,
  `thischar` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thistext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thisblob` blob DEFAULT NULL,
  `thistinyint` tinyint(11) NOT NULL,
  `thistinytext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
*/


}//end of funnything