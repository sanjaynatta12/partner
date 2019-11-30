<?php

class metaHeader{
	public function getMetaHome(){
		include("database/config.php");
		if(!isset($_REQUEST['page'])){
	      $page_id = "home";
		}
		if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
	switch ($page){
		case "index":
		$page_id = "home";
		break;
		case "$page":
		$page_id = "$page";
		/*
		break;
		case "hotels":
		$page_id = "hotels";
		break;
		case "hotel-details":
		$page_id = "hotel-details";
		break;
		case "hotelSearch":
		$page_id = "hotelSearch";
		break;
		case "packages":
		$page_id = "packages";
		break;
		*/
	}
		}
		$sql = $db->query("SELECT * FROM page_setup WHERE page_id='$page_id'");
	$rows = $sql->fetchArray(); 
		include("views/contents/metaContectHome.php");
		}
		
		public function layout(){
			include("views/contents/layout.php");
			}
	}
	
	class mainJs{
	function allJs(){
		include("views/contents/js.php");
		}
}

function mobileAd(){ ?>
	<section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="assets/images/mobile.png" alt="" /> </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h2>Have you tried our mobile app?</h2>
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews</li>
                        </ul>
                        <a href="#"><img src="assets/images/android.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php }
	function footer(){ ?>
    <section>
        <div class="rows">
            <div class="footer">
               <div>&nbsp;<br><br></div>
                <div class="container">
                    <div class="foot-sec2">
                        <div>
                            <div class="row">
                                <div class="col-sm-3 foot-spec foot-com">
                                    <img src="assets/images/logos/logo.png" class="img-responsive" alt="footer_logo"/>
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>SUPPORT</span> & HELP</h4>
                                    <ul class="two-columns">
                                        <li> <a href="#">About Us</a> </li>
                                        <li> <a href="#">FAQ</a> </li>
                                        <li> <a href="#">Feedbacks</a> </li>
                                        <li> <a href="#">Blog </a> </li>
                                        <li> <a href="#">Use Cases</a> </li>
                                        <li> <a href="#">Advertise us</a> </li>
                                        <li> <a href="#">Discount</a> </li>
                                        <li> <a href="#">Vacations</a> </li>
                                        <li> <a href="#">Branding Offers </a> </li>
                                        <li> <a href="#">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"><div class="col-md-12">&nbsp;<br><br></div></div>
                <div class="down_footer">
                   <p>Monpahari Holidays &copy; 2019 | Developed By <a href="http://wmsolutions.in/" target="_blank"> Web Marketing Solutions Network</a> </p>
                </div>
            </div>
        </div>
    </section>
    <?php }

?>