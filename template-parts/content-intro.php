<?php
//Introduction PHP
$intro_title 			= get_field('intro_title');
$intro_title_1			= get_field('intro_title_1');
$intro_text_1			= get_field('intro_text_1');
$intro_link_1 			= get_field('intro_link_1');
$intro_title_2			= get_field('intro_title_2');
$intro_text_2			= get_field('intro_text_2');
$intro_link_2 			= get_field('intro_link_2');
$intro_title_3			= get_field('intro_title_3');
$intro_text_3			= get_field('intro_text_3');
$intro_link_3 			= get_field('intro_link_3');
?>

<!-- INTRODUCTION 
============================================= -->
<section id="intro">
	<div class="container" id="intro-pic">
		<div class="row">
			
			<div class="col-sm-8 col-md-6">
								
			</div><!--col--></!--col-->
						<div class="col-md-6" id="intro_text" align="center">
							<h2><?php echo $intro_title; ?></h2>
							<hr class="horizontal3">
							
							<div class="row group-option">
								<a href="<?php echo $intro_link_1; ?>">
									<div class="col-sm-4 options glyph1">
										<i class="fa fa-home"></i>
									</div>
								</a>
							<div class="col-sm-8 option-text">
								<h4><?php echo $intro_title_1; ?></h4>
								<p><?php echo $intro_text_1; ?></p>
							</div>
							</div>
							
							<div class="row group-option">
								<a href="<?php echo $intro_link_2; ?>">
									<div class="col-sm-4 options glyph1">
										<i class="fa fa-wrench"></i>
									</div>
								</a>
							<div class="col-sm-8 option-text">
								<h4><?php echo $intro_title_2; ?></h4>
								<p><?php echo $intro_text_2; ?></p>
							</div>
							</div>
							
							<div class="row group-option">
								<a href="<?php echo $intro_link_3; ?>">
									<div class="col-sm-4 options glyph1">
										<i class="fa fa-truck"></i>
									</div>
								</a>
							<div class="col-sm-8 option-text">
								<h4><?php echo $intro_title_3; ?></h4>
								<p><?php echo $intro_text_3; ?></p>
							</div>
							</div>
						</div>
					
		</div>
	</div>
</section>