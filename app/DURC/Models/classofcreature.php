<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.classofcreature by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in classofcreature.php 

*/

class classofcreature extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.classofcreature';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'cardface_classofcreature_arttag', //from from many
			'classofcreature_cardface', //from from many
			'classofcreature_creature', //from from many
			'person_classofcreature_tag', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'classofcreature_name' => 'varchar',
		'is_mega_class' => 'tinyint',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map

		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

/**
*	get all the cardface_classofcreature_arttag for this classofcreature
*/
	public function cardface_classofcreature_arttag(){
		return $this->hasMany('App\cardface_classofcreature_arttag','classofcreature_id','id');
	}


/**
*	get all the classofcreature_cardface for this classofcreature
*/
	public function classofcreature_cardface(){
		return $this->hasMany('App\classofcreature_cardface','classofcreature_id','id');
	}


/**
*	get all the classofcreature_creature for this classofcreature
*/
	public function classofcreature_creature(){
		return $this->hasMany('App\classofcreature_creature','classofcreature_id','id');
	}


/**
*	get all the person_classofcreature_tag for this classofcreature
*/
	public function person_classofcreature_tag(){
		return $this->hasMany('App\person_classofcreature_tag','classofcreature_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`classofcreature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classofcreature_name` varchar(255) NOT NULL,
  `is_mega_class` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `creatureclass_name` (`classofcreature_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of classofcreature