<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.tag by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in tag.php 

*/

class tag extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.tag';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'person_classofc_tag', //from from many
			'person_creature_tag', //from from many
			'person_strategy_tag', //from from many
			'excludes_tag', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'tag_name' => 'varchar',
		'is_directed' => 'tinyint',
		'excludes_tag_id' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
			]; // End of nullable fields

    // Use Eloquent attributes array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $attributes = [
			]; // End of attributes
        
		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

/**
*	get all the person_classofc_tag for this tag
*/
	public function person_classofc_tag(){
		return $this->hasMany('App\person_classofc_tag','tag_id','id');
	}


/**
*	get all the person_creature_tag for this tag
*/
	public function person_creature_tag(){
		return $this->hasMany('App\person_creature_tag','tag_id','id');
	}


/**
*	get all the person_strategy_tag for this tag
*/
	public function person_strategy_tag(){
		return $this->hasMany('App\person_strategy_tag','tag_id','id');
	}


/**
*	get all the excludes_tag for this tag
*/
	public function excludes_tag(){
		return $this->hasMany('App\tag','excludes_tag_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

		//DURC would have added excludes_tag but it was already used in has_many. 
		//You will have to resolve these recursive relationships in your code.

//Originating SQL Schema
/*
CREATE TABLE `lore`.`tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL,
  `is_directed` tinyint(1) NOT NULL DEFAULT 0,
  `excludes_tag_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_name` (`tag_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of tag