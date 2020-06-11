<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_aaa.filterTest by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in filtertest.php 

*/

class filtertest extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'DURC_aaa.filterTest';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'is_boolean' => 'tinyint',
		'dec_value' => 'decimal',
		'float_value' => 'float',
		'tiny_integer' => 'tinyint',
		'small_integer' => 'smallint',
		'integer_field' => 'int',
		'test_uri' => 'varchar',
		'test_url' => 'varchar',
		'test_uuid' => 'varchar',
		'test_alpha' => 'varchar',
		'test_alpha_dash' => 'varchar',
		'test_alpha_num' => 'varchar',
		'test_email' => 'varchar',
		'test_ipv4' => 'varchar',
		'test_ipv6' => 'varchar',
		'test_json' => 'mediumtext',
		'test_timezone' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'is_boolean',
		'dec_value',
		'float_value',
		'tiny_integer',
		'small_integer',
		'integer_field',
		'test_uri',
		'test_url',
		'test_uuid',
		'test_alpha',
		'test_alpha_dash',
		'test_alpha_num',
		'test_email',
		'test_ipv4',
		'test_ipv6',
		'test_json',
		'test_timezone',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'is_boolean' => null,
		'dec_value' => null,
		'float_value' => null,
		'tiny_integer' => null,
		'small_integer' => null,
		'integer_field' => null,
		'test_uri' => null,
		'test_url' => null,
		'test_uuid' => null,
		'test_alpha' => null,
		'test_alpha_dash' => null,
		'test_alpha_num' => null,
		'test_email' => null,
		'test_ipv4' => null,
		'test_ipv6' => null,
		'test_json' => null,
		'test_timezone' => null,
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'is_boolean' => 'boolean|integer|required',
		'dec_value' => 'numeric|required',
		'float_value' => 'numeric|required',
		'tiny_integer' => 'integer|required',
		'small_integer' => 'integer|required',
		'integer_field' => 'integer|required',
		'test_uri' => 'url|required',
		'test_url' => 'url|required',
		'test_uuid' => 'uuid|required',
		'test_alpha' => 'alpha|required',
		'test_alpha_dash' => 'alpha_dash|required',
		'test_alpha_num' => 'alpha_num|required',
		'test_email' => 'email|required',
		'test_ipv4' => 'ipv4|required',
		'test_ipv6' => 'ipv6|required',
		'test_json' => 'json|required',
		'test_timezone' => 'timezone|required',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_aaa`.`filterTest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_boolean` tinyint(1) NOT NULL,
  `dec_value` decimal(11,0) NOT NULL,
  `float_value` float NOT NULL,
  `tiny_integer` tinyint(4) NOT NULL,
  `small_integer` smallint(3) NOT NULL,
  `integer_field` int(11) NOT NULL,
  `test_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha_dash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_ipv4` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_ipv6` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_json` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
*/


}//end of filtertest