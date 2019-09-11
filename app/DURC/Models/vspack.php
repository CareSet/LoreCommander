<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.vspack by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in vspack.php 

*/

class vspack extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.vspack';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'classofc_classofc_vspack', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'vspack_name' => 'varchar',
		'vspack_wizards_url' => 'varchar',
		'vspack_wiki_url' => 'varchar',
		'vspack_img_url' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map

		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

/**
*	get all the classofc_classofc_vspack for this vspack
*/
	public function classofc_classofc_vspack(){
		return $this->hasMany('App\classofc_classofc_vspack','vspack_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`vspack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vspack_name` varchar(255) NOT NULL,
  `vspack_wizards_url` varchar(2000) NOT NULL,
  `vspack_wiki_url` varchar(2000) NOT NULL,
  `vspack_img_url` varchar(2000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of vspack