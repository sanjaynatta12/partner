<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$contactUsController = new contactUsController();
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
   $contactUsController->contactContent();
   footer();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>