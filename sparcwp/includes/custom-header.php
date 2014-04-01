<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php $header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	<?php } // if ( ! empty( $header_image ) ) ?>

 *
 * @package sparcwp
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses sparcwp_header_style()
 * @uses sparcwp_admin_header_style()
 * @uses sparcwp_admin_header_image()
 *
 * @package sparcwp
 */
function sparcwp_custom_header_setup() {
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'custom-header', apply_filters( 'sparcwp_custom_header_args', array(
			'default-image'          => 'http://placehold.it/200x75',
			'default-text-color'     => '000',
			'width'                  => 200,
			'height'                 => 75,
			'flex-height'            => true,
			'wp-head-callback'       => 'sparcwp_header_style',
			'admin-head-callback'    => 'sparcwp_admin_header_style',
			'admin-preview-callback' => 'sparcwp_admin_header_image',
		) ) );
	}
}
add_action( 'after_setup_theme', 'sparcwp_custom_header_setup' );

if ( ! function_exists( 'sparcwp_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sparcwp_custom_header_setup().
 */
function sparcwp_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_text_color )
		return;

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // sparcwp_header_style

if ( ! function_exists( 'sparcwp_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see sparcwp_custom_header_setup().
 */
function sparcwp_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; // sparcwp_admin_header_style

if ( ! function_exists( 'sparcwp_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see sparcwp_custom_header_setup().
 */
function sparcwp_admin_header_image() {
	$style        = sprintf( ' style="color:#%s;"', get_header_textcolor() );
	$header_image = get_header_image();
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // sparcwp_admin_header_image
