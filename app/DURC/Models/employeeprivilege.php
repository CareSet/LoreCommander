<?php

namespace App\DURC\Models;

use CareSet\DURC\DURCModel;
/*
	Note this class was auto-generated from 

DURC_northwind_model.employeePrivilege by DURC.

	This class will be overwritten during future auto-generation runs..
	Itjust reflects whatever is in the database..
	DO NOT EDIT THIS FILE BY HAND!!
	Your changes go in employeeprivilege.php 

*/

class employeeprivilege extends DURCModel{

    protected $primaryKey = 'privilege_id';

    
        // the datbase for this model
        protected $table = 'DURC_northwind_model.employeePrivilege';

	//DURC will dymanically copy these into the $with variable... which prevents recursion problem: https://laracasts.com/discuss/channels/eloquent/eager-load-deep-recursion-problem?page=1
		protected $DURC_selfish_with = [ 
			'employee', //from belongs to
			'privilege', //from belongs to
		];


	//DURC did not detect any date fields

	public $timestamps = false;
	//DURC NOTE: did not find updated_at and created_at fields for this model

	
	
	

	//for many functions to work, we need to be able to do a lookup on the field_type and get back the MariaDB/MySQL column type.
	static $field_type_map = [
		'employee_id' => 'int',
		'privilege_id' => 'int',
			]; //end field_type_map
		
    // Indicate which fields are nullable for the UI to be able to validate required form elements
    protected $non_nullable_fields = [
		'employee_id',
		'privilege_id',
			]; // End of nullable fields

    // Use Eloquent attributes array to specify the default values for each field (if any) indicated by the DB schema, to be used as placeholder on form elements
    protected $attributes = [
		'employee_id' => null,
		'privilege_id' => null,
			]; // End of attributes
        
		//everything is fillable by default
		protected $guarded = [];


		
//DURC HAS_MANY SECTION

			//DURC did not detect any has_many relationships
		
		
//DURC HAS_ONE SECTION

			//DURC did not detect any has_one relationships

		
//DURC BELONGS_TO SECTION

/**
*	get the single employee for this employeeprivilege
*/
	public function employee(){
		return $this->belongsTo('App\employee','employee_id','id');
	}


/**
*	get the single privilege for this employeeprivilege
*/
	public function privilege(){
		return $this->belongsTo('App\privilege','privilege_id','id');
	}



//Originating SQL Schema
/*
CREATE TABLE `DURC_northwind_model`.`employeePrivilege` (
  `employee_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`,`privilege_id`),
  KEY `employee_id` (`employee_id`),
  KEY `privilege_id` (`privilege_id`),
  CONSTRAINT `fkEmployeePrivilegeEmployees1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkEmployeePrivilegePrivilege1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8
*/


}//end of employeeprivilege