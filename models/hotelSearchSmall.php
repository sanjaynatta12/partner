    <?php if(!empty($_POST["keyword"])) {
		include("../database/config.php");
		
		
		$query = $db->query("SELECT DISTINCT city FROM hotel_details WHERE city like '%" . $_POST["keyword"] . "%' ORDER BY city LIMIT 0,6");
		$num = $query->numRows();
		
		
		if($num==0){
			$query2 = $db->query("SELECT * FROM hotel_details WHERE hotel_name like '%" . $_POST["keyword"] . "%'  LIMIT 0,6");
			
			$num2 = $query2->numRows();
			if($num2==0){ 
				$query3 = $db->query("SELECT * FROM hotel_details WHERE address like '%" . $_POST["keyword"] . "%' LIMIT 0,6");
				$num3 = $query3->numRows();
				if($num3==0){ ?>
                <ul class="srcRes">
                  <li class="text-danger">We are Still finding the best hotel for you</li>
                </ul>
                <?php }else{ 
		    $res3 = $query3->fetchAll(); ?>
            <ul class="srcRes">
		<?php foreach ($res3 as $ress3) { ?>
	      <li  onMouseOver="selectCountry('<?php echo $ress3['address']; ?>');"><i class="fa fa-map-marker"></i> <?php echo $ress3['address']; ?></li>
<?php } ?>
		</ul>
        <?php } ?>
				<?php }else{ 
			
		$res2 = $query2->fetchAll(); ?>
        <ul class="srcRes">
		<?php foreach ($res2 as $ress2) { ?>
	      <li  onMouseOver="selectCountry('<?php echo $ress2['hotel_name']; ?>');"><i class="fa fa-bed"></i> <?php echo $ress2['hotel_name']; ?></li>
<?php } ?>
		</ul>
        <?php } ?>
			<?php }else{ 
            $res = $query->fetchAll(); ?>
        <ul class="srcRes">
		<?php foreach ($res as $ress) { ?>
	      <li  onMouseOver="selectCountry('<?php echo $ress['city']; ?>');"><i class="fa fa-map-marker"></i> <?php echo $ress['city']; ?></li>
<?php } ?>
		</ul>
            <?php } ?>
		
		
   <?php } ?>
   
