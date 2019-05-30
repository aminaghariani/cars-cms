<?php get_header(); ?>
<div class="row">
    <div class="col-sm-12">
        <?php
$args=array(
'post_type'=>'voiture',
);
$voiture_loop=new WP_Query($args);
if($voiture_loop->have_posts()) : while($voiture_loop->have_posts()) : $voiture_loop->the_post();
$meta=get_post_meta($post->ID , 'voiture_fields' , true);?>
<!-- contents of voiture Post -->
        <div class="blog-post">
        <h2 class="blog-post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        
        </h2>
        <?php the_excerpt();?>
        </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    </div>
<
    </div> <!-- /.col -->
</div>


<?php get_footer(); ?>
