<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.classofc_creature by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in classofc_creature.php 

*/

class classofc_creature extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.classofc_creature';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'classofc', //from belongs to
			'creature', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'classofc_id' => 'int',
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
*	get the single classofc for this classofc_creature
*/
	public function classofc(){
		return $this->belongsTo('App\classofc','classofc_id','id');
	}


/**
*	get the single creature for this classofc_creature
*/
	public function creature(){
		return $this->belongsTo('App\creature','creature_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`classofc_creature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classofc_id` int(11) NOT NULL,
  `creature_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `classofcreature_id` (`classofc_id`,`creature_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of classofc_creature