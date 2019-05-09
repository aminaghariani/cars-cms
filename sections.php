<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							<?php if ( have_posts() ) : while ( have_posts() ) :
the_post(); get_template_part( 'section_single', get_post_format() );
endwhile; endif; ?>
						</div>												
					</div>
				</div>
			</section>