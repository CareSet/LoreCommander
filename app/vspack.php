<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=20fbacbe4da045b1c04de51f7b9b7625
*/
namespace App;
/*
	vspack: controls lore.vspack

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class vspack extends \App\DURC\Models\vspack
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
			'classofc_classofc_vspack', //from from many
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'vspack_name', //varchar
			//'vspack_wizards_url', //varchar
			//'vspack_wiki_url', //varchar
			//'vspack_img_url', //varchar
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION

/**
*	DURC is handling the classofc_classofc_vspack for this vspack in vspack
*       but you can extend or override the defaults by editing this function...
*/
	public function classofc_classofc_vspack(){
		return parent::classofc_classofc_vspack();
	}


//DURC BELONGS_TO SECTION
			//DURC did not detect any belongs_to relationships


// Last generated SQL Schema
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

	//your stuff goes here..
	

}//end vspack