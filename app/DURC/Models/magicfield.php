<?php

namespace App\DURC\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
//use Owen It\Auditing\Contracts\Auditable;
/*
	Note this class was auto-generated from 

DURC_aaa.magicField by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in magicfield.php 

*/

class magicfield extends DURCModel {

	 //not auditable, configured using is_auditable = 0 in config json

    

    use SoftDeletes;

        // the datbase for this model
        protected $table = 'DURC_aaa.magicField';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	protected $dates = ['deleted_at'];


	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'editsome_markdown' => 'varchar',
		'typesome_sql_code' => 'varchar',
		'typesome_php_code' => 'mediumtext',
		'typesome_python_code' => 'mediumtext',
		'typesome_javascript_code' => 'varchar',
		'this_datetime' => 'datetime',
		'this_date' => 'date',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'deleted_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'editsome_markdown',
		'typesome_sql_code',
		'typesome_php_code',
		'typesome_python_code',
		'typesome_javascript_code',
		'this_datetime',
		'this_date',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'editsome_markdown' => null,
		'typesome_sql_code' => null,
		'typesome_php_code' => null,
		'typesome_python_code' => null,
		'typesome_javascript_code' => null,
		'this_datetime' => null,
		'this_date' => null,
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
		'deleted_at' => 'NULL',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'editsome_markdown' => 'required',
		'typesome_sql_code' => 'required',
		'typesome_php_code' => 'required',
		'typesome_python_code' => 'required',
		'typesome_javascript_code' => 'required',
		'this_datetime' => 'required',
		'this_date' => 'required',
		'deleted_at' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_aaa`.`magicField` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `editsome_markdown` varchar(2000) NOT NULL,
  `typesome_sql_code` varchar(2000) NOT NULL,
  `typesome_php_code` mediumtext NOT NULL,
  `typesome_python_code` mediumtext NOT NULL,
  `typesome_javascript_code` varchar(3000) NOT NULL,
  `this_datetime` datetime NOT NULL,
  `this_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
*/


}//end of magicfield