<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
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
        <meta property="og:title" content="<?=$SiteTitle?>" />
        <meta property="og:site_name" content="<?=$SiteTitle?>" />
        <meta property="og:description" name="description" content="<?=$Description?>" />
        <meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
        <?php if (fbAppID) : ?>
        <meta property="fb:app_id" content="<?php echo fbAppID; ?>" />
        <?php endif; ?>

        <meta name="author" content="<?=$Author?>">
        <meta name="designer" content="<?=$Designer?>">
        <meta name="dcterms.rightsHolder" content="<?=$Copyright?>">
    <meta name="keywords" content="<?=$Keywords?>">


    <!-- Icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon.png">
        <meta property="og:image" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>assets/img/thumbnail.png" />


    <!-- Main Scripts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script><!-- Old Browser Support -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/custom.js"></script>


    <!-- Style -->
    <link rel="stylesheet" href="assets/css/base.css">
        <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css">


        <!-- Typekit -->
        <?php if (TYPEKIT_ID) : ?>
        <script type="text/javascript" src="//use.typekit.net/<?php echo TYPEKIT_ID; ?>.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <?php endif; ?>


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


    <!-- Search Engine Indexing -->
    <?php if ($siteIndexing == "yes") { ?>
        <meta name="robots" content="index, follow">
        <?php } else { ?>
        <meta name="robots" content="noindex, nofollow">
    <?php } ?>

    </head>
