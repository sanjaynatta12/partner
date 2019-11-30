<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$aboutUsController = new aboutUsController();
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
   $aboutUsController->aboutContent();
   footer();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>