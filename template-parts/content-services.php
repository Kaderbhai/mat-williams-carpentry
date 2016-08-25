<?php
$services_title 			= get_field('services_title');
$services_lead_text 		= get_field('services_lead_text');
$service_head_1 			= get_field('service_head_1');
$service_text_1 			= get_field('service_text_1');
$service_head_2 			= get_field('service_head_2');
$service_text_2 			= get_field('service_text_2');
$service_head_3 			= get_field('service_head_3');
$service_text_3 			= get_field('service_text_3');
?>

<!-- SERVICES INTRO
=================================================================== -->
<div class="section" id="services">
	<div class="container" align="center">
		<div class="row" id="services_title">
		
		<div class="col-sm-8 col-sm-offset-2">
			<h1><?php echo $services_title; ?></h1>
			<hr class="horizontal4">
			<p class="lead"><?php echo $services_lead_text; ?></p>
			</div>
		</div>
		
		<div class="row" id="services_content">

			<div class="col-sm-4 services">
				<div class="options2"><img class="icon-svg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tools/svg/drill_white.svg" alt="A screw icon"></div>
				<h3><?php echo $service_head_1; ?></h3>
				<p><?php echo $service_text_1; ?></p>
			</div>

			<div class="col-sm-4 services">
				<div class="options2"><img class="icon-svg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tools/svg/saw_white.svg" alt="A screw icon"></div>
				<h3><?php echo $service_head_2; ?></h3>
				<p><?php echo $service_text_2; ?></p>
			</div>
			
			<div class="col-sm-4 services">
				<div class="options2"><img class="icon-svg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tools/svg/glue_white.svg" alt="A screw icon"></div>
				<h3><?php echo $service_head_3; ?></h3>
				<p><?php echo $service_text_3; ?></p>
			</div>	
		</div>
	</div>
</div>