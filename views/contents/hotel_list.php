<div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
							<!--LISTINGS-->
							<div class="row">
                            
                            <?php
				$chkhotel = $db->query("SELECT * FROM hotel_details")->fetchAll();
				foreach($chkhotel as $rowHotel){
					$rooms = $rowHotel['rooms'];
					if($rooms=="0"){
						$rm = "Room Not Abailable";
						}else{
							$rm = "Available Rooms: $rooms";
							}
		$test = $db->query("SELECT MIN(price) as prc FROM rooms WHERE hotel_id='".$rowHotel['hotel_id']."'")->fetchArray();
		
			$testR = $test;
			$prices = $testR['prc'];
			if($prices==""){
				$price = $rowHotel['price'];
				}else{
					$price = $prices;
					}
		
					 ?>
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="assets/images/hotels/<?php echo $rowHotel['main_img']; ?>" alt="" style="width:225px; height:190px"> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> <?php echo $rm; ?> </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details?id=<?php echo $rowHotel['hotel_id']; ?>"><h3><?php echo $rowHotel['hotel_name']; ?></h3></a>
											<ul>
												<li><?php echo $rowHotel['address']; ?>, <?php echo $rowHotel['city']; ?>, <?php echo $rowHotel['state']; ?></li>
                                </ul>
                               
                               <ul> 
                               <li class="text-warnings"> <i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i></li>
</ul>
</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Room</span> <span class="hot-list-p3-2">&#8377; <?php echo $price; ?></span><span class="hot-list-p3-4">
												<a href="hotel-details?id=<?php echo $rowHotel['hotel_id']; ?>" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
                                
                                <?php } ?>
								<div id="myModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="cl" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Search By Hotel or City</h4>
            </div>
            <div class="modal-body">
                <?php contentSearch(); ?>
            </div>
        </div>
    </div>
</div>

														
							</div>
						</div>
					</div>
                    
                    
                    

