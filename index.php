		<!-- End Header Area -->
<?php get_header();?>
			<!-- start banner Area -->
<?php get_template_part( 'sections', get_post_format() ); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
			<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							
						</div>	
						<div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
							
							<div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
								
								<img class="img-fluid user-img" src="img/user.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>
			</section>
			
				<div >
<div >
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'content', get_post_format() );
endwhile; endif; ?>
</div> 

</div> 
			
			
			<!-- End team Area -->
			
			<!-- start footer Area -->		
			<?php get_footer(); ?> 