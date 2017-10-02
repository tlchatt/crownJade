<?php 
update_option( 'siteurl', 'http://tlchatt.com/crownJade');
update_option( 'home', 'http://tlchatt.com/crownJade');
function Technologic_Theme_scripts()
{
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), '1.0.0', false );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/vendor/jquery.bxslider.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'Technologic_Theme_scripts' );

require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
register_nav_menus( array(
    'secondary' => __( 'Secondary Menu', 'THEMENAME' ),
) );

function Technologic_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
     $wp_customize->add_section( 'logo_image', array(
  'title' => __( 'Logo Image' ),
  'description' => __( 'Upload your company logo' ),
  'priority' => 160,
  'capability' => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
) );
    $wp_customize->add_setting( 'theme_logo' );;
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(
    'label'    => __( 'Logo'),
    'section'  => 'logo_image',
    'settings' => 'theme_logo',
) ) );
}  

function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );
add_action( 'customize_register', 'Technologic_customize_register' );
add_filter( 'show_admin_bar', '__return_false' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'gallery' ) );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');





remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'gallery_shortcode_new');
/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @staticvar int $instance
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 *     @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 *     @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 *     @type int          $id         Post ID.
 *     @type string       $itemtag    HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 *     @type string       $icontag    HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 *     @type string       $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 *     @type int          $columns    Number of columns of images to display. Default 3.
 *     @type string|array $size       Size of the images to display. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 *     @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 *     @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 *     @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 *     @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
function gallery_shortcode_new( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	/**
	 * Filter the default gallery shortcode output.
	 *
	 * If the filtered output isn't empty, it will be used instead of generating
	 * the default gallery template.
	 *
	 * @since 2.5.0
	 * @since 4.2.0 The `$instance` parameter was added.
	 *
	 * @see gallery_shortcode()
	 *
	 * @param string $output   The gallery output. Default empty.
	 * @param array  $attr     Attributes of the gallery shortcode.
	 * @param int    $instance Unique numeric ID of this gallery shortcode instance.
	 */
	$output = apply_filters( 'post_gallery', '', $attr, $instance );
	if ( $output != '' ) {
		return $output;
	}

	$html5 = current_theme_supports( 'html5', 'gallery' );
	$atts = shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'itemtag'    => $html5 ? 'figure'     : 'div',
		'icontag'    => $html5 ? 'div'        : 'div',
		'captiontag' => $html5 ? 'figcaption' : 'div',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'gallery' );

	$id = intval( $atts['id'] );

	if ( ! empty( $atts['include'] ) ) {
		$_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( ! empty( $atts['exclude'] ) ) {
		$attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	} else {
		$attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
		}
		return $output;
	}
//thes items are not doing anything due to not declaring support for html5
	$itemtag = tag_escape( $atts['itemtag'] );
	$captiontag = tag_escape( $atts['captiontag'] );
	$icontag = tag_escape( $atts['icontag'] );
	$valid_tags = wp_kses_allowed_html( 'post' );
    //these items are not doing anything due to not declaring support for html5
	if ( ! isset( $valid_tags[ $itemtag ] ) ) {
		$itemtag = 'dl';
	}
	if ( ! isset( $valid_tags[ $captiontag ] ) ) {
		$captiontag = 'dd';
	}
	if ( ! isset( $valid_tags[ $icontag ] ) ) {
		$icontag = 'dt';
	}

	$columns = intval( $atts['columns'] );
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = '';

	/**
	 * Filter whether to print default gallery styles.
	 *
	 * @since 3.1.0
	 *
	 * @param bool $print Whether to print default gallery styles.
	 *                    Defaults to false if the theme supports HTML5 galleries.
	 *                    Otherwise, defaults to true.
	 */
	if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
		$gallery_style = "
		<style type='text/css'>
			#{$selector} .gallery-item {
				text-align: center;
                    padding: 3px;
                
			}
			#{$selector} img {
                    -moz-box-shadow: 0 0 5px #000000;
                    -webkit-box-shadow: 0 0 5px #000000;
                    box-shadow: 0 0 5px #000000;
				    max-width: 100%;
                    height: auto;
			}
            #{$selector} img:hover {
                    transition: all 0.3s linear;
                    -webkit-transition: all 0.3s linear;
                    -moz-transition: all 0.3s linear;
                    -moz-box-shadow: 0 0 13px #000000;
                    -webkit-box-shadow: 0 0 13px #000000;
                    box-shadow: 0 0 13px #000000;
			}
			#{$selector} .gallery-caption {
				    position: absolute;
                    height:33%;
                    bottom: 0%;
                    left:3px;
                    right:3px;
                     background-color:rgba(0,0,0,.40);
                    transition: all 0.3s linear;
                    padding-top:5%;
			}
            #{$selector} .gallery-caption >p {
                font-size: .75rem;
                }
            #{$selector} .gallery-caption:hover {
				    position: absolute;
                    height:33%;
                    bottom: 0;
                    background-color:rgba(0,0,0,.60);
                    transition: all 0.3s linear;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>\n\t\t";
	}

	$size_class = sanitize_html_class( $atts['size'] );
	$gallery_div = "</div><div class='containermid'><div class='col-xs-12 col-sm-10 col-sm-offset-1 platform'><h2 class='page-title'>Gallery</h1><div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";

	/**
	 * Filter the default gallery shortcode CSS styles.
	 *
	 * @since 2.5.0
	 *
	 * @param string $gallery_style Default CSS styles and opening HTML div container
	 *                              for the gallery shortcode output.
	 */
	$output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
		if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
			$image_output = wp_get_attachment_link( $id, $atts['size'], false, false, false, $attr );
		} elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
			$image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
		} else {
			$image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
		}
		$image_meta  = wp_get_attachment_metadata( $id );

		$orientation = '';
		if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
			$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
		}
		$output .= "<{$itemtag} class='col-xs-12 col-sm-6 col-md-4 gallery-item'>";
		$output .= "
			<{$icontag} class='gallery-icon {$orientation}'>
				$image_output
			</{$icontag}>";
		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "
				<{$captiontag} class='wp-caption-text gallery-caption' id='$selector-$id'>
				<p>" . wptexturize($attachment->post_excerpt) . "</p>
				</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
		if ( ! $html5 && $columns > 0 && ++$i % $columns == 0 ) {
			$output .= '<br style="clear: both" />';
		}
	}

	if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
		$output .= "
			<br style='clear: both' />";
	}

	$output .= "
		</div></div></div>\n";

	return $output;
}
?>
