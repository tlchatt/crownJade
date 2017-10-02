<?php
/**
 * Template Name: Service Page Vertical Image
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header(); ?> 
<?php 
$x= 1 ;
if ( $post ) {
    $categories = get_the_category( $post->ID );
     $gallery = get_post_gallery( get_the_ID(), false );
        $catname = $categories[0]->name;
}
$args = array(
	'category_name'    =>  $catname,
	'orderby'          => 'date',
	'post_type'        => 'post',
);

$related_posts = get_posts( $args );
foreach ( $related_posts as $post ) : setup_postdata( $post ); 
    if ( has_post_thumbnail() ) {
                              $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full, false);
                              $backgroundimage[$x]=$src[0] ;
                              $title[$x] = get_the_title(); 
                              $excerpt[$x] = get_the_excerpt() ;
                                              $x++;
    }

endforeach; 
wp_reset_postdata();
?>
<div class="mid">  
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="containermid">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 platform first">
            <h1 class="page-title"><?php the_title(); ?></h1>
                 <?php
                if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full', array( 'class' => 'featured-image-vert' ));
                }
                ?>
            <?php the_content(); ?>
            </div>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
    </div>       
</div> 
</div>     
<?php get_footer(); ?>