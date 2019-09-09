<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=52617a83e655ffdf4fc3bc3c9e140f4c
*/
namespace App;
/*
	card: controls lore.card

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class card extends \App\DURC\Models\card
{
	//this controls what is downloaded in the json for this object under card_body.. 
	//this function returns the html snippet that should be loaded for the summary of this object in a bootstrap card
	//read about the structure here: https://getbootstrap.com/docs/4.3/components/card/
	//this function should return an html snippet to go in the first 'card-body' div of an HTML interface...
	public function getCardBody() {
		return parent::getCardBody(); //just use the standard one unless a user over-rides this..
	}


	//You may need to change these for 'one to very very many' relationships.
/*
		protected $DURC_selfish_with = [ 
			'cardface', //from from many
			'cardprice', //from from many
			'mtgset', //from belongs to
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'scryfall_id', //varchar
			//'lang', //varchar
			//'oracle_id', //varchar
			//'rulings_uri', //varchar
			//'scryfall_web_uri', //varchar
			//'scryfall_api_uri', //varchar
			//'layout', //varchar
			//'rarity', //varchar
			//'released_at', //varchar
			//'set_name', //varchar
			//'set_type', //int
			//'mtgset_id', //int
			//'variation_of_scryfall_id', //varchar
			//'edhrec_rank', //int
			//'is_promo', //tinyint
			//'is_reserved', //tinyint
			//'is_story_spotlight', //tinyint
			//'is_reprint', //int
			//'is_variation', //tinyint
			//'is_game_paper', //tinyint
			//'is_game_mtgo', //tinyint
			//'is_game_arena', //tinyint
			//'legal_oldschool', //tinyint
			//'legal_duel', //tinyint
			//'legal_commander', //tinyint
			//'legal_brawl', //tinyint
			//'legal_penny', //tinyint
			//'legal_vintage', //tinyint
			//'legal_pauper', //tinyint
			//'legal_legacy', //tinyint
			//'legal_modern', //tinyint
			//'legal_frontier', //tinyint
			//'legal_future', //tinyint
			//'legal_standard', //tinyint
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION

/**
*	DURC is handling the cardface for this card in card
*       but you can extend or override the defaults by editing this function...
*/
	public function cardface(){
		return parent::cardface();
	}


/**
*	DURC is handling the cardprice for this card in card
*       but you can extend or override the defaults by editing this function...
*/
	public function cardprice(){
		return parent::cardprice();
	}


//DURC BELONGS_TO SECTION

/**
*	DURC is handling the mtgset for this card in card
*       but you can extend or override the defaults by editing this function...
*/
	public function mtgset(){
		return parent::mtgset();
	}




// Last generated SQL Schema
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

	//your stuff goes here..
	

}//end card