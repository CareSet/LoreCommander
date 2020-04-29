<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.person_strategy_tag by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in person_strategy_tag.php 

*/

class person_strategy_tag extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.person_strategy_tag';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'person', //from belongs to
			'strategy', //from belongs to
			'tag', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'person_id' => 'int',
		'strategy_id' => 'int',
		'tag_id' => 'int',
		'is_bulk_linker' => 'tinyint',
		'link_note' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'id',
		'person_id',
		'strategy_id',
		'tag_id',
		'is_bulk_linker',
		'created_at',
		'updated_at',
			]; // End of nullable fields

    // Use Eloquent attributes array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $attributes = [
		'id' => null,
		'person_id' => null,
		'strategy_id' => null,
		'tag_id' => null,
		'is_bulk_linker' => '0',
		'link_note' => 'NULL',
		'created_at' => null,
		'updated_at' => null,
			]; // End of attributes
        
		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single person for this person_strategy_tag
*/
	public function person(){
		return $this->belongsTo('App\person','person_id','id');
	}


/**
*	get the single strategy for this person_strategy_tag
*/
	public function strategy(){
		return $this->belongsTo('App\strategy','strategy_id','id');
	}


/**
*	get the single tag for this person_strategy_tag
*/
	public function tag(){
		return $this->belongsTo('App\tag','tag_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`person_strategy_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `strategy_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `is_bulk_linker` tinyint(1) NOT NULL DEFAULT 0,
  `link_note` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id` (`person_id`,`strategy_id`,`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
*/


}//end of person_strategy_tag