<!-- TESTAMONIALS 
============================================= -->
<section id="testimonials">
	<div class="container">
		<div class="row test-row">
		
		<?php $loop = new WP_Query( array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		
		<?php while( $loop -> have_posts () ) : $loop -> the_post(); ?>
		
			<div class="col-sm-4 test-col">
				<div class="row test-state">
					<div class="triangle-right">
						<p><?php the_content(); ?></p>
					</div>
					<div class="col-sm-4 test-image">
						<?php if (has_post_thumbnail()) {
							the_post_thumbnail ( array (100, 100) ) ;
							
						}
						?>
					</div>
					<div class="col-sm-8 test-info">
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			</div>
			
		<?php endwhile; ?>
		
		</div>
	</div>
</section>