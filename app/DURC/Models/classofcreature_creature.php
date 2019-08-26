<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.classofcreature_creature by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in classofcreature_creature.php 

*/

class classofcreature_creature extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.classofcreature_creature';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'classofcreature', //from belongs to
			'creature', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'classofcreature_id' => 'int',
		'creature_id' => 'int',
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
*	get the single classofcreature for this classofcreature_creature
*/
	public function classofcreature(){
		return $this->belongsTo('App\classofcreature','classofcreature_id','id');
	}


/**
*	get the single creature for this classofcreature_creature
*/
	public function creature(){
		return $this->belongsTo('App\creature','creature_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`classofcreature_creature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classofcreature_id` int(11) NOT NULL,
  `creature_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `classofcreature_id` (`classofcreature_id`,`creature_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of classofcreature_creature