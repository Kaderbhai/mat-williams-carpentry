<?php
/*Template Name: Home Page*/

get_header(); ?>

	<!-- INTRODUCTION 
	============================================= -->
	<section id="intro">
		<div class="container" id="intro-pic">
			<div class="row">
				
				<div class="col-sm-8 col-md-6">
									
				</div><!--col--></!--col-->
							<div class="col-md-6" id="intro_text" align="center">
								<h2>A Can-Do Carpentry</h2>
								<hr class="horizontal3">
								
								<div class="row group-option">
								<div class="col-sm-4 options glyph1">
									<i class="fa fa-home"></i>
								</div>
								<div class="col-sm-8 option-text">
									<h4>Locum</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
								</div>
								</div>
								
								<div class="row group-option">
								<div class="col-sm-4 options glyph1">
									<i class="fa fa-wrench"></i>
								</div>
								<div class="col-sm-8 option-text">
									<h4>Locum</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
								</div>
								</div>
								
								<div class="row group-option">
								<div class="col-sm-4 options glyph1">
									<i class="fa fa-truck"></i>
								</div>
								<div class="col-sm-8 option-text">
									<h4>Locum</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
								</div>
								</div>
							</div>
						
			</div>
		</div>
	</section>
	
	<!-- GOTO ACTION BUTTON
	=================================================================== -->
	<section id="goto_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<hr>
					<h2 align="center">Contact Us</h2>
					<button class="btn btn-info btn-lg center-block"><a href="contact.html">Get in Touch</a></button>
					<hr>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- section goto_action-->
	
	<!-- TESTAMONIALS 
	============================================= -->
	<section id="testimonials">
		<div class="container">
			<div class="row test-row">
				<div class="col-sm-4 test-col">
					<div class="row test-state">
						<div class="triangle-right">
							<p>Nec cu ferri veniam, vix id pertinax maiestatis, mel cu labores petentium rationibus. Sanctus quaestio ad ius, utinam scripta definitiones ad 
							per, in sed blandit maiestatis.	Quis minimum deterruisset duo ne, ex malis appareat concludaturque usu, sit ne virtute debitis definitiones. 
							Duo perfecto intellegebat ei, per albucius delectus an. Sanctus meliore ad pro,.</p>
						</div>
						<div class="col-sm-4 test-image"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/person3.png" alt="Mat Williams Carpentry" align="middle"></div>
						<div class="col-sm-8 test-info">
							<h4>Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 test-col">
					<div class="row test-state">
						<div class="triangle-right">
							<p>Nec cu ferri veniam, vix id pertinax maiestatis, mel cu labores petentium rationibus. Sanctus quaestio ad ius, utinam scripta definitiones ad 
							per, in sed blandit maiestatis.	Quis minimum deterruisset duo ne, ex malis appareat concludaturque usu, sit ne virtute debitis definitiones. 
							Duo perfecto intellegebat ei, per albucius delectus an. Sanctus meliore ad pro, ut sea dicit facete appareat. Sit latine habemus no, 
							quidam nostro possim no nam.</p>
						</div>
						<div class="col-sm-4 test-image"><img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/person1.png" alt="Person 1" align="middle"></div>
						<div class="col-sm-8 test-info">
							<h4>Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 test-col">
					<div class="row test-state">
						<div class="triangle-right">
							<p>Nec cu ferri veniam, vix id pertinax maiestatis, mel cu labores petentium rationibus. Sanctus quaestio ad ius, utinam scripta definitiones ad 
							per, in sed blandit maiestatis.	Quis minimum deterruisset duo ne, ex malis appareat concludaturque usu, sit ne virtute debitis definitiones. 
							Duo perfecto intellegebat ei, per albucius delectus an. Sanctus meliore ad pro, ut sea dicit facete appareat. Sit latine habemus no, 
							quidam nostro possim no nam.</p>
						</div>
						<div class="col-sm-4 test-image"><img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/	assets/img/person2.png" alt="Person 2" align="middle"></div>
						<div class="col-sm-8 test-info">
							<h4>Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php

get_footer();
