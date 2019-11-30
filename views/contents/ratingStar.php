<?php include("ratingFunction.php"); ?>
<ul class="ratingStar">
                                <li>
                               <?php if($rates==0.0){
						       zeroStar();
						        }
								if($rates==1.0){
						        oneStar();
						        }
								if($rates==1.5){
						        oneHalfStar();
						        }
								if($rates==2.0){
						        twoStar();
						        }
								if($rates==2.5){
						        twoHalfStar();
						        }
								if($rates==3.0){
						        threeStar();
						        }
								if($rates==3.5){
						        threeHalfStar();
						        }
								if($rates==4.0){
						       fourStar();
						        }
								if($rates==4.5){
						        fourHalfStar();
						        }
								if($rates==5.0){
						        fiveStar();
						        }
								?>
                               </li>
                               
                            </ul>