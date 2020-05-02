<?php

namespace App\DURC\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use CareSet\DURC\DURCModel;
use CareSet\DURC\DURC;
/*
	Note this class was auto-generated from 

DURC_northwind_model.customer by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in customer.php 

*/

class customer extends DURCModel{

    

    use SoftDeletes;

        // the datbase for this model
        protected $table = 'DURC_northwind_model.customer';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'order', //from from many
		];


	//DURC did not detect any date fields

	public $timestamps = true;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	
	protected $dates = ['deleted_at'];


	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'id' => 'int',
		'companyName' => 'varchar',
		'lastName' => 'varchar',
		'firstName' => 'varchar',
		'emailAddress' => 'varchar',
		'jobTitle' => 'varchar',
		'businessPhone' => 'varchar',
		'homePhone' => 'varchar',
		'mobilePhone' => 'varchar',
		'faxNumber' => 'varchar',
		'address' => 'longtext',
		'city' => 'varchar',
		'stateProvince' => 'varchar',
		'zipPostalCode' => 'varchar',
		'countryRegion' => 'varchar',
		'webPage' => 'longtext',
		'notes' => 'longtext',
		'attachments' => 'longblob',
		'random_date' => 'datetime',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'deleted_at' => 'datetime',
	]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'id',
		'random_date',
		'created_at',
		'updated_at',
		'deleted_at',
	]; // End of nullable fields

    // Use default_values array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $default_values = [
		'id' => null,
		'companyName' => 'NULL',
		'lastName' => 'NULL',
		'firstName' => 'NULL',
		'emailAddress' => 'NULL',
		'jobTitle' => 'NULL',
		'businessPhone' => 'NULL',
		'homePhone' => 'NULL',
		'mobilePhone' => 'NULL',
		'faxNumber' => 'NULL',
		'address' => 'NULL',
		'city' => 'NULL',
		'stateProvince' => 'NULL',
		'zipPostalCode' => 'NULL',
		'countryRegion' => 'NULL',
		'webPage' => 'NULL',
		'notes' => 'NULL',
		'attachments' => 'NULL',
		'random_date' => null,
		'created_at' => null,
		'updated_at' => null,
		'deleted_at' => null,
	];  // End of attributes
        
    //everything is fillable by default
    protected $guarded = [];
		
    // These are validation rules used by the DURCModel parent to validate data before storage
    protected static $rules = [
		'id' => 'integer',
		'companyName' => 'nullable',
		'lastName' => 'nullable',
		'firstName' => 'nullable',
		'emailAddress' => 'nullable',
		'jobTitle' => 'nullable',
		'businessPhone' => 'nullable',
		'homePhone' => 'nullable',
		'mobilePhone' => 'nullable',
		'faxNumber' => 'nullable',
		'address' => 'nullable',
		'city' => 'nullable',
		'stateProvince' => 'nullable',
		'zipPostalCode' => 'nullable',
		'countryRegion' => 'nullable',
		'webPage' => 'nullable',
		'notes' => 'nullable',
		'attachments' => 'nullable',
		'random_date' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required',
		'deleted_at' => 'required',
	]; // End of validation rules
		
        
	// These are mutators generated for all model attributes.
	// Mutators are called implicitly when getting and setting the attribute
	public function getIdAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setIdAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('id', 'int', $value, $this);
		$this->attributes['id'] = $formatted_value;
	}

	public function getCompanyNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCompanyNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('companyName', 'varchar', $value, $this);
		$this->attributes['companyName'] = $formatted_value;
	}

	public function getLastNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setLastNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('lastName', 'varchar', $value, $this);
		$this->attributes['lastName'] = $formatted_value;
	}

	public function getFirstNameAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setFirstNameAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('firstName', 'varchar', $value, $this);
		$this->attributes['firstName'] = $formatted_value;
	}

	public function getEmailAddressAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setEmailAddressAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('emailAddress', 'varchar', $value, $this);
		$this->attributes['emailAddress'] = $formatted_value;
	}

	public function getJobTitleAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setJobTitleAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('jobTitle', 'varchar', $value, $this);
		$this->attributes['jobTitle'] = $formatted_value;
	}

	public function getBusinessPhoneAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setBusinessPhoneAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('businessPhone', 'varchar', $value, $this);
		$this->attributes['businessPhone'] = $formatted_value;
	}

	public function getHomePhoneAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setHomePhoneAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('homePhone', 'varchar', $value, $this);
		$this->attributes['homePhone'] = $formatted_value;
	}

	public function getMobilePhoneAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setMobilePhoneAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('mobilePhone', 'varchar', $value, $this);
		$this->attributes['mobilePhone'] = $formatted_value;
	}

	public function getFaxNumberAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setFaxNumberAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('faxNumber', 'varchar', $value, $this);
		$this->attributes['faxNumber'] = $formatted_value;
	}

	public function getAddressAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setAddressAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('address', 'longtext', $value, $this);
		$this->attributes['address'] = $formatted_value;
	}

	public function getCityAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCityAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('city', 'varchar', $value, $this);
		$this->attributes['city'] = $formatted_value;
	}

	public function getStateProvinceAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setStateProvinceAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('stateProvince', 'varchar', $value, $this);
		$this->attributes['stateProvince'] = $formatted_value;
	}

	public function getZipPostalCodeAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setZipPostalCodeAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('zipPostalCode', 'varchar', $value, $this);
		$this->attributes['zipPostalCode'] = $formatted_value;
	}

	public function getCountryRegionAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCountryRegionAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('countryRegion', 'varchar', $value, $this);
		$this->attributes['countryRegion'] = $formatted_value;
	}

	public function getWebPageAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setWebPageAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('webPage', 'longtext', $value, $this);
		$this->attributes['webPage'] = $formatted_value;
	}

	public function getNotesAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setNotesAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('notes', 'longtext', $value, $this);
		$this->attributes['notes'] = $formatted_value;
	}

	public function getAttachmentsAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setAttachmentsAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('attachments', 'longblob', $value, $this);
		$this->attributes['attachments'] = $formatted_value;
	}

	public function getRandomDateAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setRandomDateAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('random_date', 'datetime', $value, $this);
		$this->attributes['random_date'] = $formatted_value;
	}

	public function getCreatedAtAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setCreatedAtAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('created_at', 'datetime', $value, $this);
		$this->attributes['created_at'] = $formatted_value;
	}

	public function getUpdatedAtAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setUpdatedAtAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('updated_at', 'datetime', $value, $this);
		$this->attributes['updated_at'] = $formatted_value;
	}

	public function getDeletedAtAttribute($value)
	{
		$formatted_value = $value;
		return $formatted_value;
	}

	public function setDeletedAtAttribute($value)
	{
		$formatted_value = DURC::formatForStorage('deleted_at', 'datetime', $value, $this);
		$this->attributes['deleted_at'] = $formatted_value;
	}

 
        
		
//DURC HAS_MANY SECTION

/**
*	get all the order for this customer
*/
	public function order(){
		return $this->hasMany('App\order','customer_id','id');
	}


		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

			//DURC did not detect any belongs_to relationships

//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_model`.`customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `emailAddress` varchar(50) DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL,
  `businessPhone` varchar(25) DEFAULT NULL,
  `homePhone` varchar(25) DEFAULT NULL,
  `mobilePhone` varchar(25) DEFAULT NULL,
  `faxNumber` varchar(25) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stateProvince` varchar(50) DEFAULT NULL,
  `zipPostalCode` varchar(15) DEFAULT NULL,
  `countryRegion` varchar(50) DEFAULT NULL,
  `webPage` longtext DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `attachments` longblob DEFAULT NULL,
  `random_date` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`city`),
  KEY `company` (`companyName`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `zipPostalCode` (`zipPostalCode`),
  KEY `stateProvince` (`stateProvince`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8
*/


}//end of customer