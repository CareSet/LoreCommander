<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=4852ca819d0599b2488421f9e13f1e98
*/
namespace App;
/*
	creature: controls lore.creature

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class creature extends \App\DURC\Models\creature
{
	//this controls what is downloaded in the json for this object under card_body.. 
	//this function returns the html snippet that should be loaded for the summary of this object in a bootstrap card
	//read about the structure here: https://getbootstrap.com/docs/4.3/components/card/
	//this function should return an html snippet to go in the first 'card-body' div of an HTML interface...
	public function getCardFace() {
		return parent::getCardFace(); //just use the standard one unless a user over-rides this..
	}


	//You may need to change these for 'one to very very many' relationships.
/*
		protected $DURC_selfish_with = [ 
			'classofcreature_creature', //from from many
			'creature_cardface', //from from many
			'person_creature_tag', //from from many
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'creature_name', //varchar
			//'creature_image_uri', //varchar
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION

/**
*	DURC is handling the classofcreature_creature for this creature in creature
*       but you can extend or override the defaults by editing this function...
*/
	public function classofcreature_creature(){
		return parent::classofcreature_creature();
	}


/**
*	DURC is handling the creature_cardface for this creature in creature
*       but you can extend or override the defaults by editing this function...
*/
	public function creature_cardface(){
		return parent::creature_cardface();
	}


/**
*	DURC is handling the person_creature_tag for this creature in creature
*       but you can extend or override the defaults by editing this function...
*/
	public function person_creature_tag(){
		return parent::person_creature_tag();
	}


//DURC BELONGS_TO SECTION
			//DURC did not detect any belongs_to relationships


// Last generated SQL Schema
/*
CREATE TABLE `lore`.`creature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creature_name` varchar(255) NOT NULL,
  `creature_image_uri` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `creature_name` (`creature_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/

	//your stuff goes here..
	

}//end creature