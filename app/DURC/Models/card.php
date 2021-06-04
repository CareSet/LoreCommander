<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

lore.card by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in card.php 

*/

class card extends DURCModel{

    

    
        // the datbase for this model
        protected $table = 'lore.card';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'cardface', //from from many
			'cardprice', //from from many
			'mtgset', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'scryfall_id' => 'varchar',
		'lang' => 'varchar',
		'oracle_id' => 'varchar',
		'rulings_uri' => 'varchar',
		'scryfall_web_uri' => 'varchar',
		'scryfall_api_uri' => 'varchar',
		'layout' => 'varchar',
		'rarity' => 'varchar',
		'released_at' => 'varchar',
		'set_name' => 'varchar',
		'set_type' => 'varchar',
		'mtgset_id' => 'int',
		'collector_number' => 'varchar',
		'sortable_collector_number' => 'decimal',
		'variation_of_scryfall_id' => 'varchar',
		'edhrec_rank' => 'int',
		'is_promo' => 'tinyint',
		'is_reserved' => 'tinyint',
		'is_story_spotlight' => 'tinyint',
		'is_reprint' => 'int',
		'is_variation' => 'tinyint',
		'is_game_paper' => 'tinyint',
		'is_game_mtgo' => 'tinyint',
		'is_game_arena' => 'tinyint',
		'legal_oldschool' => 'tinyint',
		'legal_duel' => 'tinyint',
		'legal_commander' => 'tinyint',
		'legal_brawl' => 'tinyint',
		'legal_penny' => 'tinyint',
		'legal_vintage' => 'tinyint',
		'legal_pauper' => 'tinyint',
		'legal_legacy' => 'tinyint',
		'legal_modern' => 'tinyint',
		'legal_frontier' => 'tinyint',
		'legal_future' => 'tinyint',
		'legal_standard' => 'tinyint',
		'legal_historic' => 'tinyint',
		'legal_pioneer' => 'tinyint',
		'legal_gladiator' => 'tinyint',
		'legal_premodern' => 'tinyint',
		'binder_group_number' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required/present form elements
    protected $non_nullable_fields = [
		'id',
		'scryfall_id',
		'lang',
		'oracle_id',
		'rulings_uri',
		'scryfall_web_uri',
		'scryfall_api_uri',
		'layout',
		'rarity',
		'set_name',
		'set_type',
		'mtgset_id',
		'collector_number',
		'is_promo',
		'is_story_spotlight',
		'is_reprint',
		'is_variation',
		'is_game_paper',
		'is_game_mtgo',
		'is_game_arena',
		'legal_oldschool',
		'legal_duel',
		'legal_commander',
		'legal_brawl',
		'legal_penny',
		'legal_vintage',
		'legal_pauper',
		'legal_legacy',
		'legal_modern',
		'legal_frontier',
		'legal_future',
		'legal_standard',
		'legal_historic',
		'legal_pioneer',
		'legal_gladiator',
		'legal_premodern',
		'created_at',
		'updated_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'scryfall_id' => null,
		'lang' => null,
		'oracle_id' => null,
		'rulings_uri' => null,
		'scryfall_web_uri' => null,
		'scryfall_api_uri' => null,
		'layout' => null,
		'rarity' => null,
		'released_at' => 'NULL',
		'set_name' => null,
		'set_type' => null,
		'mtgset_id' => null,
		'collector_number' => '\'\'',
		'sortable_collector_number' => 'NULL',
		'variation_of_scryfall_id' => '\'NULL\'',
		'edhrec_rank' => '0',
		'is_promo' => null,
		'is_reserved' => 'NULL',
		'is_story_spotlight' => '0',
		'is_reprint' => '0',
		'is_variation' => '0',
		'is_game_paper' => '0',
		'is_game_mtgo' => '0',
		'is_game_arena' => '0',
		'legal_oldschool' => '0',
		'legal_duel' => '0',
		'legal_commander' => '0',
		'legal_brawl' => '0',
		'legal_penny' => '0',
		'legal_vintage' => '0',
		'legal_pauper' => '0',
		'legal_legacy' => '0',
		'legal_modern' => '0',
		'legal_frontier' => '0',
		'legal_future' => '0',
		'legal_standard' => '0',
		'legal_historic' => '0',
		'legal_pioneer' => '0',
		'legal_gladiator' => '0',
		'legal_premodern' => '0',
		'binder_group_number' => '0',
		'created_at' => 'current_timestamp()',
		'updated_at' => 'current_timestamp()',
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'scryfall_id' => 'required',
		'lang' => 'required',
		'oracle_id' => 'required',
		'rulings_uri' => 'url|required',
		'scryfall_web_uri' => 'url|required',
		'scryfall_api_uri' => 'url|required',
		'layout' => 'required',
		'rarity' => 'required',
		'released_at' => 'nullable',
		'set_name' => 'required',
		'set_type' => 'required',
		'mtgset_id' => 'integer|required',
		'sortable_collector_number' => 'numeric|nullable',
		'variation_of_scryfall_id' => 'nullable',
		'edhrec_rank' => 'integer|nullable',
		'is_promo' => 'boolean|integer|required',
		'is_reserved' => 'boolean|integer|nullable',
		'is_story_spotlight' => 'boolean|integer',
		'is_reprint' => 'boolean|integer',
		'is_variation' => 'boolean|integer',
		'is_game_paper' => 'boolean|integer',
		'is_game_mtgo' => 'boolean|integer',
		'is_game_arena' => 'boolean|integer',
		'legal_oldschool' => 'integer',
		'legal_duel' => 'integer',
		'legal_commander' => 'integer',
		'legal_brawl' => 'integer',
		'legal_penny' => 'integer',
		'legal_vintage' => 'integer',
		'legal_pauper' => 'integer',
		'legal_legacy' => 'integer',
		'legal_modern' => 'integer',
		'legal_frontier' => 'integer',
		'legal_future' => 'integer',
		'legal_standard' => 'integer',
		'legal_historic' => 'integer',
		'legal_pioneer' => 'integer',
		'legal_gladiator' => 'integer',
		'legal_premodern' => 'integer',
		'binder_group_number' => 'integer|nullable',
	]; // End of validation rules
		        
		
//DURC HAS_MANY SECTION

/**
*	get all the cardface for this card
*/
	public function cardface(){
		return $this->hasMany('App\cardface','card_id','id');
	}


/**
*	get all the cardprice for this card
*/
	public function cardprice(){
		return $this->hasMany('App\cardprice','card_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single mtgset for this card
*/
	public function mtgset(){
		return $this->belongsTo('App\mtgset','mtgset_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `lore`.`card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scryfall_id` varchar(255) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `oracle_id` varchar(255) NOT NULL,
  `rulings_uri` varchar(255) NOT NULL,
  `scryfall_web_uri` varchar(255) NOT NULL,
  `scryfall_api_uri` varchar(255) NOT NULL,
  `layout` varchar(50) NOT NULL,
  `rarity` varchar(50) NOT NULL,
  `released_at` varchar(50) DEFAULT NULL,
  `set_name` varchar(255) NOT NULL,
  `set_type` varchar(255) NOT NULL,
  `mtgset_id` int(11) NOT NULL,
  `collector_number` varchar(20) NOT NULL DEFAULT '',
  `sortable_collector_number` decimal(15,3) DEFAULT NULL,
  `variation_of_scryfall_id` varchar(255) DEFAULT 'NULL',
  `edhrec_rank` int(11) DEFAULT 0,
  `is_promo` tinyint(1) NOT NULL,
  `is_reserved` tinyint(1) DEFAULT NULL,
  `is_story_spotlight` tinyint(1) NOT NULL DEFAULT 0,
  `is_reprint` int(11) NOT NULL DEFAULT 0,
  `is_variation` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_paper` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_mtgo` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_arena` tinyint(1) NOT NULL DEFAULT 0,
  `legal_oldschool` tinyint(1) NOT NULL DEFAULT 0,
  `legal_duel` tinyint(1) NOT NULL DEFAULT 0,
  `legal_commander` tinyint(1) NOT NULL DEFAULT 0,
  `legal_brawl` tinyint(1) NOT NULL DEFAULT 0,
  `legal_penny` tinyint(1) NOT NULL DEFAULT 0,
  `legal_vintage` tinyint(1) NOT NULL DEFAULT 0,
  `legal_pauper` tinyint(1) NOT NULL DEFAULT 0,
  `legal_legacy` tinyint(1) NOT NULL DEFAULT 0,
  `legal_modern` tinyint(1) NOT NULL DEFAULT 0,
  `legal_frontier` tinyint(1) NOT NULL DEFAULT 0,
  `legal_future` tinyint(1) NOT NULL DEFAULT 0,
  `legal_standard` tinyint(1) NOT NULL DEFAULT 0,
  `legal_historic` tinyint(1) NOT NULL DEFAULT 0,
  `legal_pioneer` tinyint(1) NOT NULL DEFAULT 0,
  `legal_gladiator` tinyint(1) NOT NULL DEFAULT 0,
  `legal_premodern` tinyint(1) NOT NULL DEFAULT 0,
  `binder_group_number` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `scryfall_id` (`scryfall_id`,`mtgset_id`),
  KEY `set_name` (`set_name`),
  KEY `is_story_spotlight` (`is_story_spotlight`),
  KEY `is_game_paper` (`is_game_paper`),
  KEY `is_game_mtgo` (`is_game_mtgo`),
  KEY `is_game_arena` (`is_game_arena`),
  KEY `legal_commander` (`legal_commander`),
  KEY `legal_penny` (`legal_penny`),
  KEY `legal_modern` (`legal_modern`),
  KEY `legal_standard` (`legal_standard`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/


}//end of card