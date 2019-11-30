<?php
class mainSrcPost{
	   function srcPost(){
		   if(isset($_REQUEST['search'])){
			   $db = new dbs();
			    $keyword = $_REQUEST['search'];
				$strt = $_REQUEST['t-start'];
				$end = $_REQUEST['t-end'];
				$room = $_REQUEST['room'];
				$guest = $_REQUEST['guest'];
				$child = $_REQUEST['child'];
				
				$chkhotel =$db->query("SELECT * FROM hotel_details WHERE city LIKE '%$keyword%' OR hotel_name LIKE '%$keyword%' OR address LIKE '%$keyword%'");
				 $chkRow = $chkhotel->numRows();
				if($chkRow==0){
					  echo "Hotel Couldn't found. We are Still Search the best Hotel For you.";
					}else{
						$rowHotels = $chkhotel->fetchAll();
						
						 ?>
                         <div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
                        <?php foreach($rowHotels as $rowHotel){
							$rooms = $rowHotel['rooms'];
					$fkpr = $rowHotel['fake_price'];
					$rt = $rowHotel['rates'];
					 $rates = number_format($rt,1);
					 $rat = "";
					if($rooms=="0"){
						$rm = "Room Not Abailable";
						}else{
							$rm = "Available Rooms: $rooms";
							}
				$price = $rowHotel['price'];
					if($fkpr==0.00){
						$fakeprice = "";
						$percnt = "";
					}else{
						 $fakeprice = "&#8377;".$fkpr;
						//calculate discount Percent//
		 $discprice = $fkpr-$price;
		$x = $discprice*100;
		$percntss = round($x/$fkpr);
		$percnt = $percntss."%Off";
						}
						
						
							 ?>
                            <div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score"><?php echo $rt; ?></div>
											    <div class="hot-page2-hli-1">
                                                   <img src="assets/images/hotels/<?php echo $rowHotel['main_img']; ?>" alt="image" style="width:225px; height:190px">
                                                 </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> <?php echo $rm; ?> </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details?id=<?php echo $rowHotel['hotel_id']; ?>"><h3><?php echo $rowHotel['hotel_name']; ?></h3></a>
											<ul>
												<li><?php echo $rowHotel['address']; ?>, <?php echo $rowHotel['city']; ?>, <?php echo $rowHotel['state']; ?></li>
                                </ul>
                                <?php include("views/contents/ratingFunction.php"); ?>
                                <ul class="ratingStar">
                                <li>
                               <?php if($rates==0.0){
						          echo $zeroStar;
						        }
								if($rates==1.0){
						        echo $oneStar;
						        }
								if($rates==1.5){
						        echo $oneHalfStar;
						        }
								if($rates==2.0){
						        echo $twoStar;
						        }
								if($rates==2.5){
						        echo $twoHalfStar;
						        }
								if($rates==3.0){
						        echo $threeStar;
						        }
								if($rates==3.5){
						        echo $threeHalfStar;
						        }
								if($rates==4.0){
						       echo $fourStar;
						        }
								if($rates==4.5){
						        echo $fourHalfStar;
						        }
								if($rates==5.0){
						        echo $fiveStar;
						        }
								?>
                               </li>
                               
                            </ul>
                                
                                </div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat"><?php echo $percnt; ?></div>
                                             <span class="hot-list-p3-1">Price Per Room</span> 
                             <del> <?php echo $fakeprice; ?></del>
                                             <span class="hot-list-p3-2 ">&#8377; <?php echo $price; ?></span>
                                             <span class="hot-list-p3-4">
                                             <form action="hotel-details" method="get">
                                   
                                   
                                   <input type="hidden" name="id" value="<?php echo $rowHotel['hotel_id']; ?>" />
                                   <input type="hidden" name="strt" value="<?php echo $_POST['t-start']; ?>" />
                                   <input type="hidden" name="end" value="<?php echo $_POST['t-end']; ?>" />
                                   <input type="hidden" name="room" value="<?php echo $_POST['room']; ?>" />
                                   <input type="hidden" name="guest" value="<?php echo $_POST['guest']; ?>" />
                                   <input type="hidden" name="child" value="<?php echo $_POST['child']; ?>" />
                                   <button class="hot-page2-alp-quot-btn">Book Now</button>
	
    </form>
											</span> 
                                         </div>
									</div>
								</div>
								<!--END LISTINGS-->
                        <?php } ?>
                        </div>
						</div>
					
				  <?php }
			   }
		   }
		   
		   function similarHotels(){
			   $db = new dbs();
				$chkhotel8 = $db->query("SELECT * FROM hotel_details LIMIT 8");
				$rowHotel8s =$chkhotel8->fetchAll();
				foreach($rowHotel8s as $rowHotel8){
					$rooms = $rowHotel8['rooms'];
					$rt = $rowHotel8['rates'];
					$rates = number_format($rt,1);
		
					 ?>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/hotels/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5><?php echo $rowHotel8['hotel_name']; ?></h5> <span><?php echo $rowHotel8['address']; ?>, <?php echo $rowHotel8['city']; ?></span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span><?php echo $rates; ?></span> </div>
									</a>
								</li>
								<?php }  ?>
			  <?php }
	}

?>