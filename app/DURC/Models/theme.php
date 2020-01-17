<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.theme by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in theme.php 

*/

class theme extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.theme';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'emblematic_person', //from belongs to
			'emblematic_cardface', //from belongs to
			'emblematic_creature', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'theme_name' => 'varchar',
		'theme_description' => 'text',
		'emblematic_person_id' => 'int',
		'emblematic_cardface_id' => 'int',
		'emblematic_creature_id' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map

		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single emblematic_person for this theme
*/
	public function emblematic_person(){
		return $this->belongsTo('App\person','emblematic_person_id','id');
	}


/**
*	get the single emblematic_cardface for this theme
*/
	public function emblematic_cardface(){
		return $this->belongsTo('App\cardface','emblematic_cardface_id','id');
	}


/**
*	get the single emblematic_creature for this theme
*/
	public function emblematic_creature(){
		return $this->belongsTo('App\creature','emblematic_creature_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`theme` (
  `id` int(11) NOT NULL,
  `theme_name` varchar(150) NOT NULL,
  `theme_description` text NOT NULL,
  `emblematic_person_id` int(11) NOT NULL,
  `emblematic_cardface_id` int(11) NOT NULL,
  `emblematic_creature_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4
*/


}//end of theme