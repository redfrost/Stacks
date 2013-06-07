<section id="contact">
       <h2><i class="icon-comments-alt"></i> Got Questions?</h2>
			<p class="byline">Help and support</p>
					
			<p>The Very Best Way To Get in Touch With Us.</p>

            <div class="<?=$rowClass?>">       
               
				<div class="span7">

					
					<div class="well">
					<h3><strong>Address:</strong></h3>

					<address>
					<?=$USER_ADDRESS?>
					</address>

                    <p>P.O.BOX: <?=$USER_POBOX?></p>
					<p>PH: <?=$USER_PHONE?><br />
					FAX: <?=$USER_FAX?>
					</p>		
					
					<p>Please feel free to contact me for more information.<br>
					Send us an e-mail by filling out the form below.</p>
					
					<h6><em>*Working hours: 9:00AM - 5:00PM (Monday to Friday)</em></h6>		
                    
					</div>
											
							
				</div>						
				
				<div class="span5 map">			
                <span class="mapaddress"><?=$USER_ADDRESS?></span>
				</div>				
		  </div>

           
           	<!-- Contact Form -->
			<div class="<?=$rowClass?>">
				    <div class="span12 contact_box">
				    
				    <!-- Popup trigger -->   	
    				<div class="text-center">
        				<button type="button" class="btn btn-danger btn-large" data-toggle="collapse" data-target="#contact_form">
        				<i class="icon-arrow-right"></i> <strong>SEND US AN ENQUIRY</strong>
        				</button>	
    				</div>		
				    
				    <div id="contact_form" class="collapse">    
                        <?php include("section/contact-form.php"); ?>
					</div><!-- /#contact_form -->
						
				    </div>
			</div>
           
           
</section>