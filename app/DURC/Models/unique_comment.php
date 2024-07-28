<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
//use Owen It\Auditing\Contracts\Auditable;
/*
	Note this class was auto-generated from 

mirrulation.unique_comment by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in unique_comment.php 

*/

class unique_comment extends DURCModel {

	 //not auditable, configured using is_auditable = 0 in config json

    

    
        // the datbase for this model
        protected $table = 'mirrulation.unique_comment';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'simplified_comment_text' => 'longtext',
		'comment_count' => 'bigint',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'simplified_comment_text',
		'comment_count',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'simplified_comment_text' => null,
		'comment_count' => null,
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'simplified_comment_text' => 'required',
		'comment_count' => 'integer|required',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `mirrulation`.`unique_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `simplified_comment_text` longtext NOT NULL,
  `comment_count` bigint(21) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
*/


}//end of unique_comment