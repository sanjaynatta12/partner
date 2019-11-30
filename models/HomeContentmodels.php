<?php
class homeBestHotels{
	   public function TopHotels(){
        $db = new dbs();
		   $chkhotel = $db->query("SELECT * FROM hotel_details ORDER BY id DESC LIMIT 6");
				$rowTopHotel = $chkhotel->fetchAll(); 
				foreach($rowTopHotel as $topHotel){ ?>
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="assets/images/band.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="assets/images/hotels/<?php echo $topHotel['main_img']; ?>" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="hotel-details?id=<?php echo $topHotel['hotel_id']; ?>"><?php echo $rowHotel['hotel_name']; ?><span class="v_pl_name">(<?php echo $topHotel['city']; ?>)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
					<?php }
		   }
	}

?>