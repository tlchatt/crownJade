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
                              $href[$x] = get_the_permalink(); 
                                              $x++;
    }

endforeach; 
wp_reset_postdata();
?>
<div class="mid">  
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="containermid">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 first platform">
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
<div class="containermid">    
<div class="col-xs-12 col-sm-10 col-sm-offset-1 platform">
    <h2 class="featured-projects">Recent <?php echo $catname;?> Projects</h2>
   
                    <div class="bxslider-post">      
                    <div class="slide-post">
                        <a href="<?php echo $href[1];?>">
                    <div class="slide-post-left">
                    <div class="slide-post-background-left" style="background-image:url('<?php echo $backgroundimage[1]; ?>')">                          </div>
                    <div class="slide-post-overlay-left">
                        <h2 class="slide-post-header"><?php echo $title[1]; ?></h2>
                        <p class="slide-post-excerpt"><?php echo $excerpt[1]; ?></p>
                        </div>
                            </div></a>
                        <a href="<?php echo $href[2];?>">
                    <div class="slide-post-center">
                    <div class="slide-post-background-center" style="background-image:url('<?php echo $backgroundimage[2]; ?>')">                        </div>
                        <div class="slide-post-overlay-center">
                        <h2 class="slide-post-header"><?php echo $title[2]; ?></h2>
                        <p class="slide-post-excerpt"><?php echo $excerpt[2]; ?></p>
                        </div>
                            </div></a>
                        <a href="<?php echo $href[3];?>">
                    <div class="slide-post-right">
                    <div class="slide-post-background-right" style="background-image:url('<?php echo $backgroundimage[3]; ?>')">                         </div>
                    <div class="slide-post-overlay-right">
                        <h2 class="slide-post-header"><?php echo $title[3]; ?></h2>
                        <p class="slide-post-excerpt"><?php echo $excerpt[3]; ?></p>
                        </div>
                            </div> </a>   
                    </div>    
                    </div>
    </div>
</div>       
</div> 
</div>     
     
<?php get_footer(); ?>