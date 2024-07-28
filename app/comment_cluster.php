<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=d2bdb535775c462141fa5095c9c40d91
*/
namespace App;
/*
	comment_cluster: controls mirrulation.comment_cluster

This class started life as a DURC model, but itwill no longer be overwritten by the generator
this is safe to edit.


*/
class comment_cluster extends \App\DURC\Models\comment_cluster
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
			'unique_comment', //from belongs to
			'other_unique_comment', //from belongs to
		];

*/
	//you can uncomment fields to prevent them from being serialized into the API!
	protected  $hidden = [
			//'unique_comment_id', //int
			//'other_unique_comment_id', //int
			//'score', //decimal
			//'diff_text', //text
		]; //end hidden array


//DURC HAS_MANY SECTION
			//DURC did not detect any has_many relationships
//DURC BELONGS_TO SECTION

/**
*	DURC is handling the unique_comment for this comment_cluster in comment_cluster
*       but you can extend or override the defaults by editing this function...
*/
	public function unique_comment(){
		return parent::unique_comment();
	}


/**
*	DURC is handling the other_unique_comment for this comment_cluster in comment_cluster
*       but you can extend or override the defaults by editing this function...
*/
	public function other_unique_comment(){
		return parent::other_unique_comment();
	}



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
	

}//end comment_cluster