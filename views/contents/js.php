
<script src="assets/js/jquery-latest.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/custom.js"></script>    
    <script src="assets/theme/js/t-datepicker.min.js"></script>
   
    <script>

 $(document).ready(function(){
    // Call global the function
    $('.t-datepicker').tDatePicker({
    });
	
	
	 
  });
  
</script>
<script>
    $(document).ready(function(){
		//alert("he")
        $("#myModal").css("display","block");
		$("#cl").click(function() {
            $("#myModal").css("display","none");
        });
		$("#subSm").submit(function() {
            $("#myModal").css("display","none");
        });
    });
</script>
<script>
    $(document).ready(function(){
		
		$("#RAC").click(function() {
       $("#rbox").css("display","block"); 
	   
    });
		
		$("#racDone").click(function(){
			var rm = $("#rm").val();
		var adlt = $("#adlt").val();
		var chld = $("#chld").val();
			$("#rmm").html(rm+ " <b>Room</b>")
			$("#adl").html(adlt+ " <b>Guest</b>")
			$("#chl").html(chld+ " <b>Child</b>")
			$("#rbox").css("display","none");
			
			});
		$("#ds").click(function(){
			$("#dvDs").css("display","block")
			});
	});
</script>