<div class="col-lg-4 sidebar-area">

                        <div class="single_widget search_widget">
                            <div id="imaginary_container"> 
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control"  placeholder="Search" >
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>  
                                    </span>
                                </div>
                            </div> 
                        </div>

                        <div class="single_widget about_widget">
							 <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/s-img.jpg" alt="" height="300" width="300"><br />
                          
						  <h2> <?php the_author(); ?> <h2><br /><?php the_author_meta( 'description' ); ?>       
                           
                            <div class="social-link">
                                <a href="href="<?php echo get_option('facebook'); ?>"><button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i> Like</button></a>
                                <a href="<?php echo get_option('twitter'); ?>"><button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i> follow</button></a>
                            </div>
                        </div>
                        <div class="single_widget cat_widget">
                            
							<h2>les categories</h2>
 
<?php the_category(); ?>

                  
                        </div>

                        <div class="single_widget recent_widget">
                            
							   <h4 class="text-uppercase pb-20">Recent Posts</h4> 
                            <div class="active-recent-carusel">
                                <div class="item">
								 <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/30531.jpg" alt="" height="300" width="300">
                                    <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                    For Everyone</p>
                                   
<a href="<?php comments_link(); ?>"> <?php printf( _nx( '	 <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p>  ',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a> 
                                </div>  
                                <div class="item">
                                    <img src="img/asset/slider.jpg" alt="">
                                    <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                    For Everyone</p>
                                   
								 
									<a href="<?php comments_link(); ?>"> <?php printf( _nx( '	 <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p> ',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a>  
                                </div>  
                                <div class="item">
                                    <img src="img/asset/slider.jpg" alt="">
                                    <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                    For Everyone</p>
                                   									<a href="<?php comments_link(); ?>"> <?php printf( _nx( '	 <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p> ',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a>
                                </div>                                                                                            
                            </div>
                        </div>  


                        <div class="single_widget cat_widget">
                            <h4 class="text-uppercase pb-20">post archive</h4><p><?php wp_get_archives( 'type=monthly' ); ?> </p>
                           
                               <?php the_category(); ?>

                        </div> 
                        <div class="single_widget tag_widget">
                            <h4 class="text-uppercase pb-20">Tag Clouds</h4>   
                        <?php wp_tag_cloud(); ?>
                        </div>                                                 
                    </div>
				