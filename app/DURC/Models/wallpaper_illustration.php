<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.wallpaper_illustration by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in wallpaper_illustration.php 

*/

class wallpaper_illustration extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.wallpaper_illustration';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'wallpaper', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'wallpaper_name' => 'varchar',
		'wallpaper_id' => 'int',
		'illustration_id' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'wallpaper_name' => 'NULL',
		'wallpaper_id' => 'NULL',
		'illustration_id' => 'NULL',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'wallpaper_name' => 'nullable',
		'wallpaper_id' => 'integer|nullable',
		'illustration_id' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single wallpaper for this wallpaper_illustration
*/
	public function wallpaper(){
		return $this->belongsTo('App\wallpaper','wallpaper_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`wallpaper_illustration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wallpaper_name` varchar(190) DEFAULT NULL,
  `wallpaper_id` int(11) DEFAULT NULL,
  `illustration_id` varchar(190) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4
*/


}//end of wallpaper_illustration