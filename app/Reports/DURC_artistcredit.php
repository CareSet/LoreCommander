<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=e721ed51840089dffc9ba1f7bab660aa
*/
namespace App\Reports;
use CareSet\Zermelo\Reports\Tabular\AbstractTabularReport;

class DURC_artistcredit extends AbstractTabularReport
{

    //returns the name of the report
    public function GetReportName(): string {
        $report_name = "artistcredit Report";
        return($report_name);
    }

    //returns the description of the report. HTML is allowed here.
    public function GetReportDescription(): ?string {
        $desc = "View the artistcredit data
			<br>
			<a href='/DURC/artistcredit/create'>Add new artistcredit</a>
";
        return($desc);
    }

    //  returns the SQL for the report.  This is the workhorse of the report.
    public function GetSQL()
    {

        $is_debug = false; //lots of debugging echos will be show instead of the report

        $index = $this->getCode();


	//get the local image field for this report... null if not found..
	$img_field_name = \App\artistcredit::getImgField();
	if(isset($$img_field_name)){
		$img_field = $$img_field_name;
	}else{
		$img_field = null;
	}

	$joined_select_field_sql  = '';




        if(is_null($index)){

                $sql = "
SELECT
artistcredit.id
$joined_select_field_sql 
, artistcredit.artistcredit_name AS artistcredit_name
, artistcredit.is_plain_credit AS is_plain_credit
, artistcredit.created_at AS created_at
, artistcredit.updated_at AS updated_at

FROM lore.artistcredit

";

        }else{

                $sql = "
SELECT
artistcredit.id 
$joined_select_field_sql
, artistcredit.artistcredit_name AS artistcredit_name
, artistcredit.is_plain_credit AS is_plain_credit
, artistcredit.created_at AS created_at
, artistcredit.updated_at AS updated_at
 
FROM lore.artistcredit 

WHERE artistcredit.id = $index
";

        }

        if($is_debug){
                echo "<pre>$sql";
                exit();
        }

        return $sql;
    }

    //decorate the results of the query with useful results
    public function MapRow(array $row, int $row_number) :array
    {

	$is_debug = false;
	
	//we think it is safe to extract here because we are getting this from the DB and not a user directly..
        extract($row);


	//get the local image field for this report... null if not found..
	$img_field_name = \App\artistcredit::getImgField();
	if(isset($$img_field_name)){
		$img_field = $$img_field_name;
	}else{
		$img_field = null;
	}

	$joined_select_field_sql  = '';





        //link this row to its DURC editor
        $row['id'] = "<a href='/DURC/artistcredit/$id'>$id</a>";



	if(isset($$img_field_name)){  //is it set
		if(strlen($img_field) > 0){ //and it is it really a url..
			$row[$img_field_name] = "<img width='300' src='$img_field'>";
		}
	}





        return $row;
    }

    //see Zermelo documentation to understand following functions:
    //https://github.com/CareSet/Zermelo

    public $NUMBER     = ['ROWS','AVG','LENGTH','DATA_FREE'];
    public $CURRENCY = [];
    public $SUGGEST_NO_SUMMARY = ['ID'];
    public $REPORT_VIEW = null;

    public function OverrideHeader(array &$format, array &$tags): void
    {
    }

    public function GetIndexSQL(): ?array {
                return(null);
    }

        //turns on the cache, should be off for development and small databases or simple queries
   public function isCacheEnabled(){
        return(false);
   }

        //only matters if the cache is on
   public function howLongToCacheInSeconds(){
        return(1200); //twenty minutes by default
   }

}

/*

//fields:
array (
  0 => 
  array (
    'column_name' => 'id',
    'data_type' => 'int',
    'is_primary_key' => true,
    'is_foreign_key' => false,
    'is_linked_key' => false,
    'foreign_db' => NULL,
    'foreign_table' => NULL,
    'is_nullable' => false,
    'default_value' => NULL,
    'is_auto_increment' => true,
  ),
  1 => 
  array (
    'column_name' => 'artistcredit_name',
    'data_type' => 'varchar',
    'is_primary_key' => false,
    'is_foreign_key' => true,
    'is_linked_key' => true,
    'foreign_db' => NULL,
    'foreign_table' => NULL,
    'is_nullable' => false,
    'default_value' => NULL,
    'is_auto_increment' => false,
  ),
  2 => 
  array (
    'column_name' => 'is_plain_credit',
    'data_type' => 'tinyint',
    'is_primary_key' => false,
    'is_foreign_key' => false,
    'is_linked_key' => false,
    'foreign_db' => NULL,
    'foreign_table' => NULL,
    'is_nullable' => false,
    'default_value' => '1',
    'is_auto_increment' => false,
  ),
  3 => 
  array (
    'column_name' => 'created_at',
    'data_type' => 'datetime',
    'is_primary_key' => false,
    'is_foreign_key' => false,
    'is_linked_key' => false,
    'foreign_db' => NULL,
    'foreign_table' => NULL,
    'is_nullable' => false,
    'default_value' => 'current_timestamp()',
    'is_auto_increment' => false,
  ),
  4 => 
  array (
    'column_name' => 'updated_at',
    'data_type' => 'datetime',
    'is_primary_key' => false,
    'is_foreign_key' => false,
    'is_linked_key' => false,
    'foreign_db' => NULL,
    'foreign_table' => NULL,
    'is_nullable' => false,
    'default_value' => 'current_timestamp()',
    'is_auto_increment' => false,
  ),
)
//has_many
NULL
//has_one
NULL
//belongs_to
NULL
//many_many
NULL
//many_through
NULL*/


?>