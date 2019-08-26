<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.cardface_person_atag by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in cardface_person_atag.php 

*/

class cardface_person_atag extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.cardface_person_atag';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'cardface', //from belongs to
			'person', //from belongs to
			'atag', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'cardface_id' => 'int',
		'person_id' => 'int',
		'atag_id' => 'int',
		'is_bulk_linker' => 'tinyint',
		'link_note' => 'varchar',
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
*	get the single cardface for this cardface_person_atag
*/
	public function cardface(){
		return $this->belongsTo('App\cardface','cardface_id','id');
	}


/**
*	get the single person for this cardface_person_atag
*/
	public function person(){
		return $this->belongsTo('App\person','person_id','id');
	}


/**
*	get the single atag for this cardface_person_atag
*/
	public function atag(){
		return $this->belongsTo('App\atag','atag_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`cardface_person_atag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardface_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `atag_id` int(11) NOT NULL,
  `is_bulk_linker` tinyint(1) NOT NULL DEFAULT 0,
  `link_note` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cardface_id` (`cardface_id`,`person_id`,`atag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
*/


}//end of cardface_person_atag