<?php
/*
Note: because this file was signed, everyting orignally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=25e11c94e47e2f4ff7ea2316c09f48f4
*/
namespace App;
/*
	cardface_person_atag: controls lore.cardface_person_atag

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class cardface_person_atag extends \App\DURC\Models\cardface_person_atag
{

	//You may need to change these for 'one to very very many' relationships.
/*
		protected $DURC_selfish_with = [ 
			'cardface', //from belongs to
			'person', //from belongs to
			'atag', //from belongs to
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'cardface_id', //int
			//'person_id', //int
			//'atag_id', //int
			//'is_bulk_linker', //tinyint
			//'link_note', //varchar
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION
			//DURC did not detect any has_many relationships
//DURC BELONGS_TO SECTION

/**
*	DURC is handling the cardface for this cardface_person_atag in cardface_person_atag
*       but you can extend or override the defaults by editing this function...
*/
	public function cardface(){
		return parent::cardface();
	}


/**
*	DURC is handling the person for this cardface_person_atag in cardface_person_atag
*       but you can extend or override the defaults by editing this function...
*/
	public function person(){
		return parent::person();
	}


/**
*	DURC is handling the atag for this cardface_person_atag in cardface_person_atag
*       but you can extend or override the defaults by editing this function...
*/
	public function atag(){
		return parent::atag();
	}




// Last generated SQL Schema
/*
CREATE TABLE `lore`.`cardface_person_atag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardface_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `atag_id` int(11) NOT NULL,
  `is_bulk_linker` tinyint(1) NOT NULL DEFAULT 0,
  `link_note` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cardface_id` (`cardface_id`,`person_id`,`atag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
*/

	//your stuff goes here..
	

}//end cardface_person_atag