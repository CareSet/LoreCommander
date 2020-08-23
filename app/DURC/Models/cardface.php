<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
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
			'cardface_classofc_atag', //from from many
			'cardface_person_atag', //from from many
			'classofc_cardface', //from from many
			'creature_cardface', //from from many
			'mverse', //from from many
			'person_classofc_cardface', //from from many
			'wincon_strategy', //from from many
			'emblematic_theme', //from from many
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
		'cmc' => 'decimal',
		'name' => 'varchar',
		'oracle_text' => 'varchar',
		'power' => 'varchar',
		'toughness' => 'varchar',
		'type_line' => 'varchar',
		'border_color' => 'varchar',
		'image_uri_art_crop' => 'varchar',
		'image_hash_art_crop' => 'varchar',
		'image_uri_small' => 'varchar',
		'image_hash_small' => 'varchar',
		'image_uri_normal' => 'varchar',
		'image_hash_normal' => 'varchar',
		'image_uri_large' => 'varchar',
		'image_hash_large' => 'varchar',
		'image_uri_png' => 'varchar',
		'image_hash_png' => 'varchar',
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
		'is_color_identity_green' => 'tinyint',
		'is_color_identity_red' => 'tinyint',
		'is_color_identity_blue' => 'tinyint',
		'is_color_identity_black' => 'tinyint',
		'is_color_identity_white' => 'tinyint',
		'color_identity_count' => 'int',
		'is_snow' => 'tinyint',
		'has_phyrexian_mana' => 'tinyint',
		'for_fulltext_search' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'card_id',
		'cardface_index',
		'illustration_id',
		'image_uri',
		'name',
		'type_line',
		'border_color',
		'is_foil',
		'is_nonfoil',
		'is_oversized',
		'is_color_green',
		'is_color_red',
		'is_color_blue',
		'is_color_black',
		'is_color_white',
		'is_colorless',
		'color_count',
		'is_color_identity_green',
		'is_color_identity_red',
		'is_color_identity_blue',
		'is_color_identity_black',
		'is_color_identity_white',
		'color_identity_count',
		'is_snow',
		'has_phyrexian_mana',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'card_id' => null,
		'cardface_index' => null,
		'illustration_id' => null,
		'artist' => 'NULL',
		'color' => 'NULL',
		'color_identity' => 'NULL',
		'flavor_text' => 'NULL',
		'image_uri' => null,
		'mana_cost' => 'NULL',
		'cmc' => 'NULL',
		'name' => null,
		'oracle_text' => 'NULL',
		'power' => 'NULL',
		'toughness' => 'NULL',
		'type_line' => null,
		'border_color' => null,
		'image_uri_art_crop' => '\'NULL\'',
		'image_hash_art_crop' => '\'NULL\'',
		'image_uri_small' => 'NULL',
		'image_hash_small' => 'NULL',
		'image_uri_normal' => 'NULL',
		'image_hash_normal' => 'NULL',
		'image_uri_large' => 'NULL',
		'image_hash_large' => 'NULL',
		'image_uri_png' => 'NULL',
		'image_hash_png' => 'NULL',
		'image_uri_border_crop' => 'NULL',
		'image_hash_border_crop' => 'NULL',
		'is_foil' => '0',
		'is_nonfoil' => '0',
		'is_oversized' => '0',
		'is_color_green' => '0',
		'is_color_red' => '0',
		'is_color_blue' => '0',
		'is_color_black' => '0',
		'is_color_white' => '0',
		'is_colorless' => '0',
		'color_count' => '0',
		'is_color_identity_green' => '0',
		'is_color_identity_red' => '0',
		'is_color_identity_blue' => '0',
		'is_color_identity_black' => '0',
		'is_color_identity_white' => '0',
		'color_identity_count' => '0',
		'is_snow' => '0',
		'has_phyrexian_mana' => '0',
		'for_fulltext_search' => '\'\'\'\'\'\'',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'card_id' => 'integer|required',
		'cardface_index' => 'integer|required',
		'illustration_id' => 'required',
		'artist' => 'nullable',
		'color' => 'nullable',
		'color_identity' => 'nullable',
		'flavor_text' => 'nullable',
		'image_uri' => 'url|required',
		'mana_cost' => 'nullable',
		'cmc' => 'numeric|nullable',
		'name' => 'required',
		'oracle_text' => 'nullable',
		'power' => 'nullable',
		'toughness' => 'nullable',
		'type_line' => 'required',
		'border_color' => 'required',
		'image_uri_art_crop' => 'nullable',
		'image_hash_art_crop' => 'nullable',
		'image_uri_small' => 'nullable',
		'image_hash_small' => 'nullable',
		'image_uri_normal' => 'nullable',
		'image_hash_normal' => 'nullable',
		'image_uri_large' => 'nullable',
		'image_hash_large' => 'nullable',
		'image_uri_png' => 'nullable',
		'image_hash_png' => 'nullable',
		'image_uri_border_crop' => 'nullable',
		'image_hash_border_crop' => 'nullable',
		'is_foil' => 'boolean|integer',
		'is_nonfoil' => 'boolean|integer',
		'is_oversized' => 'boolean|integer',
		'is_color_green' => 'boolean|integer',
		'is_color_red' => 'boolean|integer',
		'is_color_blue' => 'boolean|integer',
		'is_color_black' => 'boolean|integer',
		'is_color_white' => 'boolean|integer',
		'is_colorless' => 'boolean|integer',
		'color_count' => 'integer',
		'is_color_identity_green' => 'boolean|integer',
		'is_color_identity_red' => 'boolean|integer',
		'is_color_identity_blue' => 'boolean|integer',
		'is_color_identity_black' => 'boolean|integer',
		'is_color_identity_white' => 'boolean|integer',
		'color_identity_count' => 'integer',
		'is_snow' => 'boolean|integer',
		'has_phyrexian_mana' => 'boolean|integer',
		'for_fulltext_search' => 'nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the cardface_classofc_atag for this cardface
*/
	public function cardface_classofc_atag(){
		return $this->hasMany('App\cardface_classofc_atag','cardface_id','id');
	}


/**
*	get all the cardface_person_atag for this cardface
*/
	public function cardface_person_atag(){
		return $this->hasMany('App\cardface_person_atag','cardface_id','id');
	}


/**
*	get all the classofc_cardface for this cardface
*/
	public function classofc_cardface(){
		return $this->hasMany('App\classofc_cardface','cardface_id','id');
	}


/**
*	get all the creature_cardface for this cardface
*/
	public function creature_cardface(){
		return $this->hasMany('App\creature_cardface','cardface_id','id');
	}


/**
*	get all the mverse for this cardface
*/
	public function mverse(){
		return $this->hasMany('App\mverse','cardface_id','id');
	}


/**
*	get all the person_classofc_cardface for this cardface
*/
	public function person_classofc_cardface(){
		return $this->hasMany('App\person_classofc_cardface','cardface_id','id');
	}


/**
*	get all the wincon_strategy for this cardface
*/
	public function wincon_strategy(){
		return $this->hasMany('App\strategy','wincon_cardface_id','id');
	}


/**
*	get all the emblematic_theme for this cardface
*/
	public function emblematic_theme(){
		return $this->hasMany('App\theme','emblematic_cardface_id','id');
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
  `mana_cost` varchar(255) DEFAULT NULL,
  `cmc` decimal(10,2) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `oracle_text` varchar(1000) DEFAULT NULL,
  `power` varchar(255) DEFAULT NULL,
  `toughness` varchar(255) DEFAULT NULL,
  `type_line` varchar(255) NOT NULL,
  `border_color` varchar(255) NOT NULL,
  `image_uri_art_crop` varchar(500) DEFAULT 'NULL',
  `image_hash_art_crop` varchar(32) DEFAULT 'NULL',
  `image_uri_small` varchar(500) DEFAULT NULL,
  `image_hash_small` varchar(32) DEFAULT NULL,
  `image_uri_normal` varchar(500) DEFAULT NULL,
  `image_hash_normal` varchar(32) DEFAULT NULL,
  `image_uri_large` varchar(500) DEFAULT NULL,
  `image_hash_large` varchar(32) DEFAULT NULL,
  `image_uri_png` varchar(500) DEFAULT NULL,
  `image_hash_png` varchar(32) DEFAULT NULL,
  `image_uri_border_crop` varchar(500) DEFAULT NULL,
  `image_hash_border_crop` varchar(32) DEFAULT NULL,
  `is_foil` tinyint(1) NOT NULL DEFAULT 0,
  `is_nonfoil` tinyint(1) NOT NULL DEFAULT 0,
  `is_oversized` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_green` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_red` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_blue` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_black` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_white` tinyint(1) NOT NULL DEFAULT 0,
  `is_colorless` tinyint(1) NOT NULL DEFAULT 0,
  `color_count` int(11) NOT NULL DEFAULT 0,
  `is_color_identity_green` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_identity_red` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_identity_blue` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_identity_black` tinyint(1) NOT NULL DEFAULT 0,
  `is_color_identity_white` tinyint(1) NOT NULL DEFAULT 0,
  `color_identity_count` int(11) NOT NULL DEFAULT 0,
  `is_snow` tinyint(1) NOT NULL DEFAULT 0,
  `has_phyrexian_mana` tinyint(1) NOT NULL DEFAULT 0,
  `for_fulltext_search` varchar(2000) DEFAULT '''''',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
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
  FULLTEXT KEY `type_line` (`type_line`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `for_fulltext_search` (`for_fulltext_search`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of cardface