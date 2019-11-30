<?php
include("db.php");


$db = new dbs();
?>
<!----
class PageFunctions() {

   //we don't want to accidentally change DB, so lets make it private;
   private $DB; 

   //this is the class constructor
   //the constructor is called when instantiating the class - new PageFunctions()
   public function __construct(DB $DB) {
     //now the DB object is available anywhere in this class!
     $this->DB = $DB;
   }
   //sample function
   public function myFunction() {
     $this->DB->connect();
   }
}
---------->