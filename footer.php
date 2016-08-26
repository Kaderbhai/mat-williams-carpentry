<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carpentry
 */
?>


<?php wp_footer(); ?>

	<!-- FOOTER
	============================================= -->
	<footer id="footer">
		<div class="container">
			<div class="row logo-footer">
	
				
				<?php $phone_contact = new WP_Query(array ('post_type' => 'phone_contact')); ?>
				<?php while ($phone_contact -> have_posts()) : $phone_contact->the_post(); ?>
					<div class="col-sm-4" id="contact-no">	
						<p><?php the_title(); ?></p>
						 <a href="tel:<?php the_content(); ?>"><?php the_content(); ?></a>
					</div> <!-- col contact number -->
				<?php wp_reset_postdata(); ?>
				<?php endwhile ?>
				
				<div class="col-sm-4" align="center">
					<a href=""><img class="img-responsive logo-image" src="<?php bloginfo('stylesheet_directory');?>/assets/img/base_MW_logo_transparent.svg" alt="Mat Williams Carpentry" align="middle"></a>
				</div> <!-- col -->
				
				<?php $social_media = new WP_Query(array ('post_type' => 'social_media')); ?>
				<?php while($social_media->have_posts()) : $social_media->the_post(); ?>
				<?php 
				//Header Links
				$s_m_link           = get_field('s_m_link');
				$class_type 		= get_field('class_type');
				$s_m_icon 			= get_field('s_m_icon');
				?>
					<div class="col-sm-4">
						<a href="<?php echo $s_m_link; ?>" target="_blank" class="badge social <?php echo $class_type; ?>">
						<i class="fa <?php echo $s_m_icon; ?>"></i></a>
					</div> <!-- col social links -->
				<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>
			</div> <!-- row -->
			
			<div class="row row-2">
				<div class="col-sm-8 col-sm-offset-2" align="middle" 	>
					&copy; SeyKad 2016 Freelance Web Development/Design.
				</div>			
			</div> <!-- row -->
		</div> <!-- container -->
	</footer> <!-- footer -->
	
<!-- BOOTSTRAP CORE JAVASCRIPT 
=================================================================== -->	
<script src=""></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
