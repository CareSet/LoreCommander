<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=bb0c93f9bc97358aea6d2314d8382368
*/
namespace App;
/*
	person_classofc_tag: controls lore.person_classofc_tag

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class person_classofc_tag extends \App\DURC\Models\person_classofc_tag
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
			'person', //from belongs to
			'classofc', //from belongs to
			'tag', //from belongs to
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'person_id', //int
			//'classofc_id', //int
			//'tag_id', //int
			//'is_bulk_linker', //tinyint
			//'link_note', //varchar
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION
			//DURC did not detect any has_many relationships
//DURC BELONGS_TO SECTION

/**
*	DURC is handling the person for this person_classofc_tag in person_classofc_tag
*       but you can extend or override the defaults by editing this function...
*/
	public function person(){
		return parent::person();
	}


/**
*	DURC is handling the classofc for this person_classofc_tag in person_classofc_tag
*       but you can extend or override the defaults by editing this function...
*/
	public function classofc(){
		return parent::classofc();
	}


/**
*	DURC is handling the tag for this person_classofc_tag in person_classofc_tag
*       but you can extend or override the defaults by editing this function...
*/
	public function tag(){
		return parent::tag();
	}




// Last generated SQL Schema
/*
CREATE TABLE `lore`.`person_classofc_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `classofc_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `is_bulk_linker` tinyint(1) NOT NULL DEFAULT 0,
  `link_note` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id` (`person_id`,`classofc_id`,`tag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8
*/

	//your stuff goes here..
	

}//end person_classofc_tag