<meta charset="utf-8">
        <!-- Mobile Stuff -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <meta name="HandheldFriendly" content="<?php echo $rows['HandheldFriendly']; ?>">
        <meta name="msapplication-tap-highlight" content="no">

        <!-- Chrome on Android -->
        <meta name="mobile-web-app-capable" content="<?php echo $rows['mobile_capable']; ?>">
        

        <!-- Safari on iOS -->
       

        <!-- Windows 8 -->
        <meta name="msapplication-TileImage" content="http://www.goibooking.com/images/icon_logo.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <title><?php echo $rows['og_title']; ?></title>
        <meta name="description" content="<?php echo $rows['description']; ?>" />
        <meta name="keywords" content="<?php echo $rows['keywords']; ?>" />
        <meta name="robots" content="index">
        <meta name="language" content="EN">
        <meta name="og:title" content="<?php echo $rows['og_title']; ?>">
        <meta name="og:url" content="<?php echo $rows['og_url']; ?>">