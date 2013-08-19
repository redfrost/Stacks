<?php

//Header Information
$SiteTitle= "Stacks"; // Website title
$Description= "Simple and intuitive website boilerplate"; // Website description 
$Author= "Redfrost"; // Site owner
$Designer= "Massivesound"; // Site designer or developer
$Copyright= "Redfrost"; //Search keywords
$Keywords= ""; //Search keywords
$fbAppID= ""; //Facebook App ID


//Layout Setting
$Layoutstyle= "responsive"; // "responsive" or "static"
$ResponsiveWidth= "1100"; // Set maximum content width in Responsive layout mode


// CUSTOM LOGO
$LOGO_TYPE= "image";  // image or text
$LOGO_PATH= "assets/img/logo.png";  // Set image URL



//Options
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y
define('TYPEKIT_ID', ''); // ADOBE TYPEKIT ID
define('WUFOO_LINK', ''); // WUFOO FORM LINK
define('WUFOO_STAMP', ''); // WUFOO FORM ID
define('FEATURE_VIDEO_URL', 'http://player.vimeo.com/video/56860648'); // Feature Video URL


//User Information
$USER_NAME= ""; // USER NAME
$USER_ADDRESS= "Bennelong Point. Sydney NSW 2000, Australia"; // USER ADDRESS
$USER_POBOX= "R239, Royal Exchange Sydney"; // USER PO BOX
$USER_PHONE= "123-456-7890"; // USER PHONE
$USER_FAX= "123-456-7890";   // USER FAX


// Responsive class
if ($Layoutstyle == "responsive") { 
    $containerClass = 'container-fluid';
    $rowClass = 'row-fluid';
    } else {
    $containerClass = 'container';
    $rowClass = 'row';
};
