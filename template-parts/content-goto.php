<?php
//GOTO Action PHP
$goto_action_header		= get_field('goto_action_header');
$goto_action_text 		= get_field('goto_action_text');
$goto_action_button		= get_field('goto_action_button');
?>

<!-- GOTO ACTION BUTTON
=================================================================== -->
<section id="goto_action">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<hr>
				<h2 align="center"><?php echo $goto_action_header; ?></h2>
				<button class="btn btn-info btn-lg center-block"><a href="<?php echo $goto_action_button; ?>"><?php echo $goto_action_text; ?></a></button>
				<hr>
			</div> <!-- col -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section goto_action-->