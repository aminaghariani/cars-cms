<div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span><?php the_date('d'); ?></span><br><?php the_date('m'); ?>
                                    </div>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="row">
<div class="col-md-4"> <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                                <div class="detail">
                                    <a href="<?php the_permalink(); ?>"><h4 class="pb-20"><?php
the_title(); ?></h4></a>
                                    <p>
                             <?php the_author(); ?>
                                    </p>
                                    <p class="footer pt-20">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <a href="#">00 Likes</a>     <i class="ml-20 fa fa-comment-o" aria-hidden="true"></i> <a href="#"><?php echo ''.get_comments_number(); ?> Comments</a>
                                    </p>
                                </div>
                            </div> 
              
       

            


