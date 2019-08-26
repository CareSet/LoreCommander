<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

lore.cardface by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in cardface.php 

*/

class cardface extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.cardface';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'cardface_classofcreature_arttag', //from from many
			'classofcreature_cardface', //from from many
			'wincon_strategy', //from from many
			'card', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'card_id' => 'int',
		'cardface_index' => 'int',
		'illustration_id' => 'varchar',
		'artist' => 'varchar',
		'color' => 'varchar',
		'color_identity' => 'varchar',
		'flavor_text' => 'varchar',
		'image_uri' => 'varchar',
		'mana_cost' => 'varchar',
		'name' => 'varchar',
		'oracle_text' => 'varchar',
		'power' => 'varchar',
		'toughness' => 'varchar',
		'type_line' => 'varchar',
		'border_color' => 'varchar',
		'image_uri_small' => 'varchar',
		'image_hash_small' => 'varchar',
		'image_uri_normal' => 'varchar',
		'image_hash_normal' => 'varchar',
		'image_uri_large' => 'varchar',
		'image_hash_large' => 'varchar',
		'image_uri_png' => 'varchar',
		'image_hash_png' => 'varchar',
		'image_uri_art_crop' => 'varchar',
		'image_hash_art_crop' => 'varchar',
		'image_uri_border_crop' => 'varchar',
		'image_hash_border_crop' => 'varchar',
		'is_foil' => 'tinyint',
		'is_nonfoil' => 'tinyint',
		'is_oversized' => 'tinyint',
		'is_color_green' => 'tinyint',
		'is_color_red' => 'tinyint',
		'is_color_blue' => 'tinyint',
		'is_color_black' => 'tinyint',
		'is_color_white' => 'tinyint',
		'is_colorless' => 'tinyint',
		'color_count' => 'int',
		'is_snow' => 'tinyint',
		'has_phyrexian_mana' => 'tinyint',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map

		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

/**
*	get all the cardface_classofcreature_arttag for this cardface
*/
	public function cardface_classofcreature_arttag(){
		return $this->hasMany('App\cardface_classofcreature_arttag','cardface_id','id');
	}


/**
*	get all the classofcreature_cardface for this cardface
*/
	public function classofcreature_cardface(){
		return $this->hasMany('App\classofcreature_cardface','cardface_id','id');
	}


/**
*	get all the wincon_strategy for this cardface
*/
	public function wincon_strategy(){
		return $this->hasMany('App\strategy','wincon_cardface_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single card for this cardface
*/
	public function card(){
		return $this->belongsTo('App\card','card_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`cardface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) NOT NULL,
  `cardface_index` int(11) NOT NULL,
  `illustration_id` varchar(255) NOT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `color_identity` varchar(255) DEFAULT NULL,
  `flavor_text` varchar(1000) DEFAULT NULL,
  `image_uri` varchar(255) NOT NULL,
  `mana_cost` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `oracle_text` varchar(1000) NOT NULL,
  `power` varchar(255) DEFAULT NULL,
  `toughness` varchar(255) DEFAULT NULL,
  `type_line` varchar(255) NOT NULL,
  `border_color` varchar(255) NOT NULL,
  `image_uri_small` varchar(500) DEFAULT NULL,
  `image_hash_small` varchar(32) DEFAULT NULL,
  `image_uri_normal` varchar(500) DEFAULT NULL,
  `image_hash_normal` varchar(32) DEFAULT NULL,
  `image_uri_large` varchar(500) DEFAULT NULL,
  `image_hash_large` varchar(32) DEFAULT NULL,
  `image_uri_png` varchar(500) DEFAULT NULL,
  `image_hash_png` varchar(32) DEFAULT NULL,
  `image_uri_art_crop` varchar(500) DEFAULT NULL,
  `image_hash_art_crop` varchar(32) DEFAULT NULL,
  `image_uri_border_crop` varchar(500) DEFAULT NULL,
  `image_hash_border_crop` varchar(32) DEFAULT NULL,
  `is_foil` tinyint(1) NOT NULL,
  `is_nonfoil` tinyint(1) NOT NULL,
  `is_oversized` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_green` tinyint(1) NOT NULL,
  `is_color_red` tinyint(1) NOT NULL,
  `is_color_blue` tinyint(1) NOT NULL,
  `is_color_black` tinyint(1) NOT NULL,
  `is_color_white` tinyint(1) NOT NULL,
  `is_colorless` tinyint(1) NOT NULL,
  `color_count` int(11) NOT NULL DEFAULT 0,
  `is_snow` tinyint(1) NOT NULL,
  `has_phyrexian_mana` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`card_id`),
  KEY `is_color_green` (`is_color_green`),
  KEY `is_color_red` (`is_color_red`),
  KEY `is_color_blue` (`is_color_blue`),
  KEY `is_color_black` (`is_color_black`),
  KEY `is_color_white` (`is_color_white`),
  KEY `is_colorless` (`is_colorless`),
  FULLTEXT KEY `artist` (`artist`),
  FULLTEXT KEY `flavor_text` (`flavor_text`),
  FULLTEXT KEY `oracle_text` (`oracle_text`),
  FULLTEXT KEY `type_line` (`type_line`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of cardface