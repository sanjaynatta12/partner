<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$mainSearchPostController = new mainSearchPostController();
$mainJs = new mainJs();
?>
<!doctype html>
<html>
<head>
<?php $metaHeader->getMetaHome();
$metaHeader->layout();
 ?>

</head>

<body>
   <?php 
   $menuSection->mobileMenu();
   $menuSection->deskTopMenu(); 
   $mainSearchPostController->mainSearchHotelList();
   footer();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>