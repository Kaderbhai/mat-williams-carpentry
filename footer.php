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
			
				<div class="col-sm-4" id="contact-no">	
					<p>Contact us:</p>
					 <a href="tel:07792919873">07792919873</a>
				</div> <!-- col contact number -->
				
				<div class="col-sm-4">
					<a href=""><img class="logo-image" src="<?php bloginfo('stylesheet_directory');?>/assets/img/base_MW_logo_transparent.svg" alt="Mat Williams Carpentry" align="middle"></a>
				</div> <!-- col -->
				
				<div class="col-sm-4">
					<a href="https://www.facebook.com/MatWilliamsCarpentry/?pnref=lhc" target="_blank" class="badge social facebook">
					<i class="fa fa-facebook"></i></a>
				</div> <!-- col -->	
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
<script src=""></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
