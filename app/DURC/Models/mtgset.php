<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
use OwenIt\Auditing\Contracts\Auditable;
/*
	Note this class was auto-generated from 

lore.mtgset by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in mtgset.php 

*/

class mtgset extends DURCModel {

	 //not auditable, configured using is_auditable = 0 in config json

    

    
        // the datbase for this model
        protected $table = 'lore.mtgset';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'card', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'scryfall_id' => 'varchar',
		'code' => 'varchar',
		'mtgo_code' => 'varchar',
		'arena_code' => 'varchar',
		'tcgplayer_id' => 'int',
		'name' => 'varchar',
		'set_type' => 'varchar',
		'released_at' => 'date',
		'block_code' => 'varchar',
		'block' => 'varchar',
		'parent_set_code' => 'varchar',
		'card_count' => 'int',
		'is_digital' => 'tinyint',
		'is_foil_only' => 'tinyint',
		'is_nonfoil_only' => 'tinyint',
		'scryfall_uri' => 'varchar',
		'mtgset_uri' => 'varchar',
		'icon_svg_uri' => 'varchar',
		'search_uri' => 'varchar',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'scryfall_id',
		'code',
		'name',
		'set_type',
		'card_count',
		'is_digital',
		'is_foil_only',
		'scryfall_uri',
		'mtgset_uri',
		'icon_svg_uri',
		'search_uri',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'scryfall_id' => null,
		'code' => null,
		'mtgo_code' => 'NULL',
		'arena_code' => 'NULL',
		'tcgplayer_id' => 'NULL',
		'name' => null,
		'set_type' => null,
		'released_at' => 'NULL',
		'block_code' => 'NULL',
		'block' => 'NULL',
		'parent_set_code' => 'NULL',
		'card_count' => null,
		'is_digital' => null,
		'is_foil_only' => null,
		'is_nonfoil_only' => 'NULL',
		'scryfall_uri' => null,
		'mtgset_uri' => null,
		'icon_svg_uri' => null,
		'search_uri' => null,
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'scryfall_id' => 'required',
		'code' => 'required',
		'mtgo_code' => 'nullable',
		'arena_code' => 'nullable',
		'tcgplayer_id' => 'integer|nullable',
		'name' => 'required',
		'set_type' => 'required',
		'released_at' => 'nullable',
		'block_code' => 'nullable',
		'block' => 'nullable',
		'parent_set_code' => 'nullable',
		'card_count' => 'integer|required',
		'is_digital' => 'boolean|integer|required',
		'is_foil_only' => 'boolean|integer|required',
		'is_nonfoil_only' => 'boolean|integer|nullable',
		'scryfall_uri' => 'url|required',
		'mtgset_uri' => 'url|required',
		'icon_svg_uri' => 'url|required',
		'search_uri' => 'url|required',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the card for this mtgset
*/
	public function card(){
		return $this->hasMany('App\card','mtgset_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `lore`.`mtgset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scryfall_id` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `mtgo_code` varchar(255) DEFAULT NULL,
  `arena_code` varchar(255) DEFAULT NULL,
  `tcgplayer_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `set_type` varchar(255) NOT NULL,
  `released_at` date DEFAULT NULL,
  `block_code` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `parent_set_code` varchar(255) DEFAULT NULL,
  `card_count` int(11) NOT NULL,
  `is_digital` tinyint(1) NOT NULL,
  `is_foil_only` tinyint(1) NOT NULL,
  `is_nonfoil_only` tinyint(1) DEFAULT NULL,
  `scryfall_uri` varchar(255) NOT NULL,
  `mtgset_uri` varchar(255) NOT NULL,
  `icon_svg_uri` varchar(255) NOT NULL,
  `search_uri` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `scryfall_id` (`scryfall_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of mtgset