<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carpentry
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- BOOTSTRAP CORE CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">	
		
		<!-- FONT AWESOME ICONS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
			
		<!--RALEWAYS GFONT -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'> 
		
<?php wp_head(); ?>

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'carpentry' ); ?></a>

<?php if ( is_front_page() ) {?>

<!-- HEADER 
============================================= -->
<header class="site-header" role="banner">
	
	<!-- LOGO SOCIAL MEDIA LINKS 
	============================================= -->
	<section id="logo-header-con">
		<div class="container">
			<div class="row logo-header">
			
				<div class="col-sm-4">	
				<a href="#"><img class="img-responsive logo-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/base_MW_logo_transparent.svg" alt="Mat Williams Carpentry" align="middle"></a>
				</div> <!-- col logo -->
				
				<?php $phone_contact = new WP_Query(array ('post_type' => 'phone_contact')); ?>
				<?php while ($phone_contact -> have_posts()) : $phone_contact->the_post(); ?>
					<div class="col-sm-4" id="contact-no">	
						<p><?php the_title(); ?></p>
						 <a href="tel:<?php the_content(); ?>"><?php the_content(); ?></a>
					</div> <!-- col contact number -->
				<?php wp_reset_postdata(); ?>
				<?php endwhile ?>
	
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
		</div> <!-- container -->
	</section>
	<hr class="horizontal">
	<hr class="horizontal2"> 		
	
	<!-- HEADER-CAROSEL 
	============================================= -->
	<div class="container-fluid" id="header-img">
		<div class="container">
				<div class="row">
							
					<div class="col-sm-4 col-sm-offset-7 textBackground" align="center">
					
						<h1><?php echo bloginfo('title'); ?></h1>
						<hr class="horizontal5"> 
						<h3><?php bloginfo('description'); ?></h3> 	
						
					</div> 

				</div> <!-- row -->
			</div> <!-- container -->
	</div> <!-- container-fluid -->
	
				<!-- NAVBAR 
	============================================= -->
	<div class="container">
		<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> <!-- button -->	 
				</div> <!-- navbar-header -->
				
				
					<?php 
						wp_nav_menu( array(
						
							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav'
						)	);
					?>
					
			</div> <!-- navbar type -->
		</div> <!-- navbar-wrapper -->
	</div> <!-- navbar container -->
	<hr class="horizontal5">
</header> <!-- header -->

<?php }	else {?>

<!-- HEADER 
============================================= -->
<header class="site-header" role="banner">
	
	<!-- LOGO SOCIAL MEDIA LINKS 
	============================================= -->
	<section id="logo-header-con">
		<div class="container">
			<div class="row logo-header">
			
				<div class="col-sm-4">	
				<a href=""><img class="logo-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/base_MW_logo_transparent.svg" alt="Mat Williams Carpentry" align="middle"></a>
				</div> <!-- col logo -->
				
				<?php $phone_contact = new WP_Query(array ('post_type' => 'phone_contact')); ?>
				<?php while ($phone_contact -> have_posts()) : $phone_contact->the_post(); ?>
					<div class="col-sm-4" id="contact-no">	
						<p><?php the_title(); ?></p>
						 <a href="tel:<?php the_content(); ?>"><?php the_content(); ?></a>
					</div> <!-- col contact number -->
				<?php wp_reset_postdata(); ?>
				<?php endwhile ?>
	
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
		</div> <!-- container -->
	</section>
	<hr class="horizontal">
	<hr class="horizontal2"> 		

	<!-- NAVBAR 
	============================================= -->
	<div class="container">
		<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> <!-- button -->	 
				</div> <!-- navbar-header -->
				
				
					<?php 
						wp_nav_menu( array(
						
							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav'
						)	);
					?>
					
			</div> <!-- navbar type -->
		</div> <!-- navbar-wrapper -->
	</div> <!-- navbar container -->
</header> <!-- header -->
<hr class="horizontal5">
	
<?php } ?>
