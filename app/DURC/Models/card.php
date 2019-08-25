<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
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
		'set_type' => 'int',
		'mtgset_id' => 'int',
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
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
			]; //end field_type_map

		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

/**
*	get all the cardface for this card
*/
	public function cardface(){
		return $this->hasMany('App\cardface','card_id','id');
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
  `released_at` varchar(50) NOT NULL,
  `set_name` varchar(255) NOT NULL,
  `set_type` int(255) NOT NULL,
  `mtgset_id` int(11) NOT NULL,
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
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