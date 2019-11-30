<?php
//set Default Page
if(!isset($_REQUEST['page'])){include("views/home.php");}
if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
	switch ($page){
		case "index":
		include("views/home.php");
		break;
		case "$page":
		@include("views/$page.php");
		break;
		
		/*
		case "hotels":
		include("views/hotels.php");
		break;
		case "hotel-details":
		include("views/hotel-details.php");
		break;
		case "hotelSearch":
		include("views/hotelSearch.php");
		break;
		case "packages":
		include("views/packages.php");
		break;
		case "contact-us":
		include("views/packages.php");
		break;
		
		*/
		
	}
	
	}
class menuSection{
	public function deskTopMenu(){
		include("views/contents/desktop_menu.php");
		}
	public function mobileMenu(){
		include("views/contents/mobile_menu.php");
		}
	}

?>