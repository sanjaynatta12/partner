<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	
	$("#search-boxs").keyup(function(){
		
		$.ajax({
		type: "POST",
		url: "models/hotelSearch.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-boxs").css("background","#FFF url(assets/images/loader.gif) no-repeat 15px");
			$("#search-boxs").css("background-size","120px");
			$("#search-boxs").css("background-position","right");
		},
		success: function(data){
			$("#srcRes").show();
			$("#srcRes").html(data);
			$("#search-boxs").css("background","#FFF");
		}
		
		});
		
	});
	$("#search-boxs").blur(function() {
        $("#srcRes").hide();
    });
	$("#RAC").click(function() {
       $("#rbox").css("display","block"); 
    });
	
	
});

function selectCountry(val) {
$("#search-boxs").val(val);
//$("#srcRes").hide();
}
</script>
<section>
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h2>Plan Your Travel Now!</h2>
                        <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        <form   action="hotelSearch" method="post" class="example">
                        <div align="center">
                        <div class="btnDiv">
                        <input type="text" style="width:100%" class="searchInput" id="search-boxs" placeholder="Search.." autocomplete="off" name="search">
                        <div  id="srcRes"></div>
                        </div>
                        <div class="dateInfo">
                        <div class="t-datepicker"><!--Theme/t-datepicker.css---->
                        <div id="inn" class="t-check-in"></div><!--Theme/t-datepicker.css---->
                        <div id="outt"  class="t-check-out"></div><!--Theme/t-datepicker.css---->
                    </div>
                    </div>
                     <div style="margin-top:55px;" class="btnDiv">
                        
                        <div class="racDiv">
                        <div id="RAC" class="row">
          <span id="rmm">1 <b>Room</b></span>
          <span id="adl">2 Guest</span>
          <span id="chl">0 Child</span>
          
                        </div>
                        </div>
                        <div id="rbox" class="racBox">
                           <div class="row">
                              <div class="rin">
                              <input type="number" name="room" id="rm" value="1"> Rooms
                              </div>
                              <div class="rin">
                              <input type="number" name="guest" id="adlt" value="2"> Guest
                              </div>
                              <div class="rin">
                              <input type="number" name="child" id="chld" value="0"> Child
                              </div>
                              <div class="rin">
                              <a href="javascript:void(0)" id="racDone" class="btn btn-primary">Done</a>
                              </div>
                           </div>
                        </div>
                        </div>
   <div class="btnDiv">                         
  <input type="submit" class="btn btn-primary top15" value="Search"></div>
  </div>
  <div id="suggesstion-box"></div>
                        </form>
                        <div class="tourz-hom-ser">
                            <ul>
                             <li>
                                    <a href="booking-hotel.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="2s"><img src="assets/images/icon/1.png" alt=""> Hotel</a>
                                </li>
                                <li>
                                    <a href="booking-tour-package.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img src="assets/images/icon/2.png" alt=""> Tour</a>
                                </li>
                                
                                <li>
                                    <a href="booking-car-rentals.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img src="assets/images/icon/30.png" alt=""> Car Rentals</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>