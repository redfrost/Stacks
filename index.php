    <?php include("config.php"); ?>
    <?php include("section/head.php"); ?>


    <!-- Body starts -->
    <body id="home" class="<?=$Layoutstyle?>" data-spy="scroll">

	<div id="master-wrap">
	
		<!-- Header -->
       		<?php include("section/section-menu.php"); ?>


		<!-- Content -->
		
		<!-- Main hero unit for a primary marketing message or call to action -->
        <?php include("section/section-featured.php"); ?>	


        <div id="main-content" class="<?=$containerClass?>">

            <?php include("section/section-about.php"); ?>			
			
            <hr>

            <?php include("section/section-services.php"); ?>
            
            <hr> 
                       
            <?php include("section/section-pricing.php"); ?>
            
            <hr> 

            <?php include("section/section-team.php"); ?>

            <hr> 
                     
            <?php include("section/section-location.php"); ?>

        </div> <!-- /#main-content-->   
        
        
        <!-- Footer -->
        <?php include("section/footer.php"); ?>
        
