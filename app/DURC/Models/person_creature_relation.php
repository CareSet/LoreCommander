<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.person_creature_relation by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in person_creature_relation.php 

*/

class person_creature_relation extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.person_creature_relation';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'person', //from belongs to
			'relation', //from belongs to
			'creature', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'person_id' => 'int',
		'relation_id' => 'int',
		'creature_id' => 'int',
		'justification_note' => 'varchar',
		'justification_url' => 'varchar',
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
*	get the single person for this person_creature_relation
*/
	public function person(){
		return $this->belongsTo('App\person','person_id','id');
	}


/**
*	get the single relation for this person_creature_relation
*/
	public function relation(){
		return $this->belongsTo('App\relation','relation_id','id');
	}


/**
*	get the single creature for this person_creature_relation
*/
	public function creature(){
		return $this->belongsTo('App\creature','creature_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`person_creature_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `relation_id` int(11) NOT NULL,
  `creature_id` int(11) NOT NULL,
  `justification_note` varchar(1000) NOT NULL,
  `justification_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id` (`person_id`,`relation_id`,`creature_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1
*/


}//end of person_creature_relation