<?php 
//Gallery PHP
$gallery_title 			= get_field('gallery_title');
$gallery_text 			= get_field('gallery_text');
?>

<!-- GALLERY
=================================================================== -->
<section id="gallery">
	<div class="container">
		<h2 align="center"><?php echo $gallery_title; ?></h2>
			<hr>
			<p class="lead"><?php echo $gallery_text; ?></p>
			<hr>		
		<div class="row">
				<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'mat-williams-carpentry-gallery', 'slug' ); } ?>
		</div>
		<hr>
	</div>
</section>