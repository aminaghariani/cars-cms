<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
					<h1>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>								
							</h1>
							<a href="<?php bloginfo( 'template_directory' );?>"><!-- site title --></a>
						<div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                            <?php the_date(); ?>
							
							<div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
                                 <?php the_author(); ?>
								
								<img class="img-fluid user-img" src="img/user.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>
			</section>