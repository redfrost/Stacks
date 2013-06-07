## Setup

1. Configure your site information by editing `config.php`

```html+php
<?php

//Header Information
$SiteTitle= "Stacks"; // Website title
$Description= "Simple and intuitive website boilerplate"; // Website description 
$Author= "Redfrost"; // Site owner
$Publisher= "Massivesound"; // Site developer or publisher
$Keywords= ""; //Search keywords


//Layout Setting
$Layoutstyle= "static"; // "responsive" or "static"
$ResponsiveWidth= "960"; // Set maximum content width in Responsive layout mode


//Options
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y
define('TYPEKIT_ID', 'user ID'); // ADOBE TYPEKIT ID
define('WUFOO_LINK', 'https://simonalex.wufoo.com/forms/z7x3x5/#public'); // WUFOO FORM ID
define('WUFOO_STAMP', 'form ID'); // WUFOO FORM ID
define('FEATURE_VIDEO_URL', 'http://player.vimeo.com/video/56860648'); // Feature Video URL


//User Information
$USER_NAME= ""; // USER NAME
$USER_ADDRESS= "Bennelong Point. Sydney NSW 2000, Australia"; // USER ADDRESS
$USER_POBOX= "R239, Royal Exchange Sydney"; // USER PO BOX
$USER_PHONE= "123-456-7890"; // USER PHONE
$USER_FAX= "123-456-7890";   // USER FAX
```



2. Open up `index.php` file, Add / Remove sections in content area.

```html+php
		<!-- Content -->
		
		<!-- Main hero unit for a primary marketing message or call to action -->
        <?php include("section/hero.php"); ?>	


        <div id="main-content" class="container">

            <?php include("section/about.php"); ?>			
			
            <hr>

            <?php include("section/services.php"); ?>
            
            <hr> 
                       
            <?php include("section/pricing.php"); ?>
            
            <hr> 

            <?php include("section/team.php"); ?>

            <hr>  
                                
            <?php include("section/partners.php"); ?>

            <hr> 
                     
            <?php include("section/location.php"); ?>

        </div> <!-- /#main-content-->   
```
