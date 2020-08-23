<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
use OwenIt\Auditing\Contracts\Auditable;
/*
	Note this class was auto-generated from 

DURC_aaa.author by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in author.php 

*/

class author extends DURCModel {

	

    

    
        // the datbase for this model
        protected $table = 'DURC_aaa.author';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'author_book', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_date';
	const CREATED_AT = 'created_date';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'lastname' => 'varchar',
		'firstname' => 'varchar',
		'created_date' => 'datetime',
		'updated_date' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'lastname',
		'firstname',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'lastname' => null,
		'firstname' => null,
		'created_date' => 'NULL',
		'updated_date' => 'NULL',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'lastname' => 'required',
		'firstname' => 'required',
		'created_date' => 'nullable',
		'updated_date' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the author_book for this author
*/
	public function author_book(){
		return $this->hasMany('App\author_book','author_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_aaa`.`author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1
*/


}//end of author