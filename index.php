<?php get_header(); ?> 
<div class="mid">    


<?php $x= 1 ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    
                if ( in_category( "Alternative Materials Construction Design" ) ) :
                    if ( has_post_thumbnail() ) {
                    
                              $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full, false);
                              $backgroundimage[$x]=$src[0] ;
                              $title[$x] = get_the_title(); 
                              $excerpt[$x] = get_the_excerpt() ;
                              $link[$x] = get_the_permalink();    
                                              $x++;
                         
                    }
    
            
                endif; ?>
    
    
    
     <?php endwhile; else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif; ?>    
    
                    <div class="bxslider-home">
                    <div class="slide">
                    <div class="slide-left"><a href="<?php echo $link[1];?>">
                    <div class="slide-background-left" style="background-image:url('<?php echo $backgroundimage[1] ?>')"></div>
                    <div class="slide-overlay-left">
                        <h2 class="slide-header"><?php echo $title[1]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[1]; ?></p>
                        </a>
                        </div>
                    </div> 
                    <div class="slide-right"><a href="<?php echo $link[2];?>">
                    <div class="slide-background-right" style="background-image:url('<?php echo $backgroundimage[2] ?>')"></div>
                    <div class="slide-overlay-right">
                        <h2 class="slide-header"><?php echo $title[2]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[2]; ?></p>
                        </a>
                        </div>   
                    </div>    
                    </div>    
                    <div class="slide">
                    <div class="slide-left"><a href="<?php echo $link[3];?>">
                    <div class="slide-background-left" style="background-image:url('<?php echo $backgroundimage[3] ?>')"></div>
                    <div class="slide-overlay-left">
                        <h2 class="slide-header"><?php echo $title[3]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[3]; ?></p>
                        </a>
                        </div>
                    </div> 
                    <div class="slide-right"><a href="<?php echo $link[4];?>">
                    <div class="slide-background-right" style="background-image:url('<?php echo $backgroundimage[4] ?>')"></div>
                    <div class="slide-overlay-right">
                        <h2 class="slide-header"><?php echo $title[4]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[4]; ?></p>
                        </a>
                        </div>   
                    </div>    
                    </div>    
                    <div class="slide">
                    <div class="slide-left"><a href="<?php echo $link[5];?>">
                    <div class="slide-background-left" style="background-image:url('<?php echo $backgroundimage[5] ?>')"></div>
                    <div class="slide-overlay-left">
                        <h2 class="slide-header"><?php echo $title[5]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[5]; ?></p>
                        </a>
                        </div>
                    </div> 
                    <div class="slide-right"><a href="<?php echo $link[6];?>">
                    <div class="slide-background-right" style="background-image:url('<?php echo $backgroundimage[6] ?>')"></div>
                    <div class="slide-overlay-right">
                        <h2 class="slide-header"><?php echo $title[6]; ?></h2>
                        <p class="slide-excerpt"><?php echo $excerpt[6]; ?></p>
                        </a>
                        </div>   
                    </div>    
                    </div>                        
                    </div>
        <?php $box1img = wp_get_attachment_image_src(get_post_thumbnail_id(62), full, false); ?>
        <?php $box2img = wp_get_attachment_image_src(get_post_thumbnail_id(58), full, false); ?>
        <?php $box3img = wp_get_attachment_image_src(get_post_thumbnail_id(68), full, false); ?>
        <?php $box4img = wp_get_attachment_image_src(get_post_thumbnail_id(66), full, false); ?>
        <?php $box5img = wp_get_attachment_image_src(get_post_thumbnail_id(38), full, false); ?>
        <?php $box6img = wp_get_attachment_image_src(get_post_thumbnail_id(68), full, false); ?>
  
<div class="containermid">
    <div class="col-xs-12 main-header dropshadowfilter"><h2 class="main-header-top">Engineered for the way you build . . .</h2></br><h2 class="main-header-bottom">. . . Designed for the way you live</h2>
    </div>
<div class="platform col-xs-12">
    <div class="col-xs-12 col-sm-4">
    <div class="box">
        <a href="http://crownjade.tlchatt.com/architectural-drafting/">
        <div class="box-inner-top"><h2 class="box-heading">Architectural Drafting</h2></div>    
        <div class="box-inner" id="box-inner-1" style="background-image:url('<?php echo $box1img[0];?>')">
        </div>
        </a>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-4">
    <div class="box">
        <a href="http://crownjade.tlchatt.com/engineering/">
        <div class="box-inner-top"><h2 class="box-heading">Engineering</h2></div>  
        <div class="box-inner" id="box-inner-2" style="background-image:url('<?php echo $box2img[0];?>')">
        </div>
        </a>    
        </div>        
    </div>  
    <div class="col-xs-12 col-sm-4">
    <div class="box">
        <a href="http://crownjade.tlchatt.com/inspection/">
        <div class="box-inner-top"><h2 class="box-heading">Inspection</h2></div>      
        <div class="box-inner" id="box-inner-3" style="background-image:url('<?php echo $box3img[0];?>')">
        </div>
        </a>
        </div>        
    </div>      
       <div class="col-xs-12 col-sm-4">
    <div class="box">
        <a href="http://crownjade.tlchatt.com/strucural-evaluations/">
        <div class="box-inner-top"><h2 class="box-heading">Strucural Evaluations</h2></div>     
        <div class="box-inner" id="box-inner-4" style="background-image:url('<?php echo $box4img[0];?>')">   
        </div>
        </a>    
        </div>    
    </div>
    <div class="col-xs-12 col-sm-4">
    <div class="box" >
        <a href="http://crownjade.tlchatt.com/alternative-material-construction-design/">
        <div class="box-inner-top"><h2 class="box-heading">Alternative Construction</h2>            </div>    
        <div class="box-inner" id="box-inner-5" style="background-image:url('<?php echo $box5img[0];?>')">  
        </div>
        </a>
        </div>        
    </div>  
    <div class="col-xs-12 col-sm-4">
    <div class="box">
            <a href="http://crownjade.tlchatt.com/special-services/">
            <div class="box-inner-top"><h2 class="box-heading">Special Services</h2></div> 
            <div class="box-inner" id="box-inner-6" style="background-image:url('<?php echo $box6img[0];?>')">       
            </div>
            </a>     
        </div>        
    </div>  
    </div>    

        <div class="col-xs-12 platform">
    <p>Crown Jade design focuses on personalized design for new and remodel projects in residential and commercial fields which includes code compliant design, architectural drafting and full structural analysis.</p><p>Crown Jade specializes in Alternative Construction Materials Design. We have experience in Passive House, Tiny Home, Container structures, Timber frame, Log home, Straw bale, Tire bale, Rammed earth, Rammed earth tire, Hempcrete.</p><p>Crown Jade has a strong interest in green sustainable housing design with emphasis on energy efficient integrated design. Integrated design means to crown jade thinking through the entire project from the foundation to mechanical installation paying attention to how every detail of the project relates to each other. The founding members of Crown Jade have an extensive background in construction with experience from residential to commercial building allowing them to create a unified vison for all projects designed.</p>
            <a class="button-std" href="/contact.php/">Learn More</a>
    </div>
</div>
</div>    
<?php get_footer(); ?>
