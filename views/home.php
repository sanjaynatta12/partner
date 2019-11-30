<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$mainSearchController = new mainSearchController();
$controllers = new controllers();
$packageHome = new packageHome();
$ComplpackageHome = new ComplpackageHome();
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
   $mainSearchController->mainSearch();
   $controllers->topHetelsHome();
   $packageHome->topPackageHome();
   $ComplpackageHome->completedPackages();
   mobileAd();
   footer();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>