<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=966b95efe5f1de3551cb937691b47a2c
*/
namespace App\Reports;
use CareSet\Zermelo\Reports\Tabular\AbstractTabularReport;

class DURC_cardface_classofcreature_atag extends AbstractTabularReport
{

    //returns the name of the report
    public function GetReportName(): string {
        $report_name = "cardface_classofcreature_atag Report";
        return($report_name);
    }

    //returns the description of the report. HTML is allowed here.
    public function GetReportDescription(): ?string {
        $desc = "View the cardface_classofcreature_atag data
			<br>
			<a href='/DURC/cardface_classofcreature_atag/create'>Add new cardface_classofcreature_atag</a>
";
        return($desc);
    }

    //  returns the SQL for the report.  This is the workhorse of the report.
    public function GetSQL()
    {

        $index = $this->getCode();

        if(is_null($index)){

                $sql = "
SELECT * FROM lore.cardface_classofcreature_atag
";

        }else{

                $sql = "
SELECT * FROM lore.cardface_classofcreature_atag WHERE id = $index
";

        }

        $is_debug = false;
        if($is_debug){
                echo "<pre>$sql";
                exit();
        }

        return $sql;
    }

    //decorate the results of the query with useful results
    public function MapRow(array $row, int $row_number) :array
    {

        extract($row);

        //link this row to its DURC editor
        $row['id'] = "<a href='/DURC/cardface_classofcreature_atag/$id'>$id</a>";

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
?>