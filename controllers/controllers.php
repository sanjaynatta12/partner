<?php

class controllers extends homeBestHotels{
	   function topHetelsHome(){
		   include("views/contents/topHotelContent.php");
		   }
	
	}
class packageHome extends packageHomeModel{
	function topPackageHome(){
		   include("views/contents/topPackageContent.php");
		   }
	
	}
class ComplpackageHome extends complpackageHomeModel{
	function completedPackages(){
		   include("views/contents/complPackageContent.php");
		   }
	
	}
class aboutUsController{
	function aboutContent(){
		   include("views/contents/aboutUsContent.php");
		   }
	
	}
class hotelContent{
	function hotelContents(){
		   include("views/contents/hotelcontent.php");
		   }
		   function contentSearchSmall(){ ?>
                <?php include("views/contents/contentSearchSmall.php"); ?>
           <?php
	}
	}
class contactUsController{
	function contactContent(){
		   include("views/contents/contactContent.php");
		   }
	
	}
class mainSearchPostController extends mainSrcPost{
	  function mainSearchHotelList(){
		  include("views/contents/srchResultContent.php");
		  }
	}
?>