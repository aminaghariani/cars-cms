
   <?php get_header();?> 
<div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8">                    
                        <div class="post-lists">
     
                             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   <!-- contents of the loop --> 
                                  <?php get_template_part( 'content', get_post_format() ); ?> 

                                  <?php endwhile;?> 
                             <?php endif;?>
                                                                                                                              
                    </div>
                              
                                              
                    </div>
            
                      <div class="col-lg-4 sidebar-area"><?php get_sidebar(); ?> </div>
                                              
                    </div>
            

  </section>
	 
	   </div> <!-- /.blog-main -->   

     </div>
   <?php get_footer();?>
  
 