<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=a166c05b6c1ef267f17c22d34c4059fe
*/
namespace App;
/*
	mtgset: controls lore.mtgset

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class mtgset extends \App\DURC\Models\mtgset
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
			'card', //from from many
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'id', //int
			//'scryfall_id', //varchar
			//'code', //varchar
			//'mtgo_code', //varchar
			//'arena_code', //varchar
			//'tcgplayer_id', //int
			//'name', //varchar
			//'set_type', //varchar
			//'released_at', //date
			//'block_code', //varchar
			//'block', //varchar
			//'parent_set_code', //varchar
			//'card_count', //int
			//'is_digital', //tinyint
			//'is_foil_only', //tinyint
			//'is_nonfoil_only', //tinyint
			//'scryfall_uri', //varchar
			//'mtgset_uri', //varchar
			//'icon_svg_uri', //varchar
			//'search_uri', //varchar
			//'printed_size', //int
			//'created_at', //datetime
			//'updated_at', //datetime
		]; //end hidden array


//DURC HAS_MANY SECTION

/**
*	DURC is handling the card for this mtgset in mtgset
*       but you can extend or override the defaults by editing this function...
*/
	public function card(){
		return parent::card();
	}


//DURC BELONGS_TO SECTION
			//DURC did not detect any belongs_to relationships

	//look in the parent class for the SQL used to generate the underlying table

	//add fields here to entirely hide them in the default DURC web interface.
        public static $UX_hidden_col = [
        ];

        public static function isFieldHiddenInGenericDurcEditor($field){
                if(in_array($field,self::$UX_hidden_col)){
                        return(true);
                }
        }

	//add fields here to make them view-only in the default DURC web interface
        public static $UX_view_only_col = [
        ];

        public static function isFieldViewOnlyInGenericDurcEditor($field){
                if(in_array($field,self::$UX_view_only_col)){
                        return(true);
                }
        }

	//your stuff goes here..
	

}//end mtgset