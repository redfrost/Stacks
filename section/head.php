<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--
|~)[~|~\|~|~)/~\(~~|~
|~\[_|_/|~|~\\_/_) | 
When you look into an abyss, the abyss also looks into you. 
-->   
     
    	<!-- Site info -->      
        <title><?=$SiteTitle?></title>
        <meta name="description" content="<?=$Description?>">
        <meta name="author" content="<?=$Description?>">
		<meta name="publisher" content="<?=$Publisher?>"/>
		<meta name="keywords" content="<?=$Keywords?>">       

		<!-- Icons -->
		<link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon.png"> <!-- Remove precomposed for Glossy effect -->
		
		<!-- Scripts -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script><!-- Old Browser Support -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/custom.js"></script>
		
		<!-- Style -->
		<link rel="stylesheet" href="assets/css/base.css">
        <link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css">

		<!-- Mobile View -->     
    <?php if ($Layoutstyle == "responsive") { ?>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/responsive-addon.css">
        <style type="text/css">
        .container-fluid { max-width:<?=$ResponsiveWidth?>px; margin: auto; }
        </style>
        
        <?php } else { ?>
        <meta name="viewport" content="width=1025">
    <?php } ?>


        
    </head>
