<?php
global $optionscheck;
$optionscheck = 0;

/*
==========================================================
SET THE DEFAULT GRID
==========================================================
*/

define('JBST_GRIDPREFIX','col-'.get_theme_mod( 'default_grid', 'md').'-');
if(!defined('JBST_RTL'))
{
	if((of_get_option('show_rtl', 0) == 1))define('JBST_RTL',1);
	else define('JBST_RTL',0);
}																								
/*
==========================================================
ADD WELCOME SCREEN TO THE THEME OPTIONS PANEL
==========================================================
*/

function jbst_options_add_before() {
	$options[] = array( "name" => "Welcome",
		"type" => "heading" );


		$welcometext = '';
		$welcometext .= '<h1>'.__('Welcome to','jamedo-bootstrap-start-theme').' '.__('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme').'</h1><p class="about-description">'.__('Congratulations','jamedo-bootstrap-start-theme').'! '.__('You\'ve just activated one of the most advanced theme frameworks on the planet! The Jamedo\'s Bootstrap Framework allows you to create robust sites without touching any code through the use of our Layout Engine, Shortcodes and Theme Customizer. For developers, this framework gives you all the tools you need to create amazing sites for your clients with built in support for theme options, metaboxes, and compatibility with BuddyPress and the leading eCommerce platforms (WP e-Commerce, WooCommerce and JigoShop).','jamedo-bootstrap-start-theme').'</p>
		<div class="of-divider"></div>
	    <div class="of-clear"></div>
		<div class="of-divider"></div>
		<div class="of-col-third"><h4>'.__('Getting Started','jamedo-bootstrap-start-theme').'</h4><p>'.__('While Jamedo\'s Bootstrap Start Theme  handles most things behind the scenes and activates some default settings, there are just a couple of things you\'ll want to do right away. First, click on the "Setup" tab above to view which Core Features are turned on by default and deactivate any that you don\'t want. Then make sure you save your options at the bottom of the screen once. That should be all you need to get going!','jamedo-bootstrap-start-theme').'</p></div>
		<div class="of-col-third"><h4>'.__('Theme Customizer','jamedo-bootstrap-start-theme').'</h4>';
		$welcometext .= '<p>';
		$welcometext .= __('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme');
		$welcometext .= ' ';
		
		
		
		$welcometext .= sprintf(__('makes extensive use of the %1$s to help you design a unique look for your site. Using this tool, you can upload a logo, change colors, modify buttons, adjust image sizes and even activate widgets all in real-time!','jamedo-bootstrap-start-theme'), sprintf('<strong><a href="%1$scustomize.php">%2$s</a></strong>',admin_url(),__('Theme Customizer','jamedo-bootstrap-start-theme')) );
		$welcometext .= ' ';
		$welcometext .=__('Wanna try it out?','jamedo-bootstrap-start-theme');
		
		 $welcometext .= sprintf(__('You\'ll probably at least want to save one of your custom menus to the navigation, so %1$s','jamedo-bootstrap-start-theme'),sprintf('<strong><a href="%1$scustomize.php">%2$s</a></strong>)',admin_url(),__('click here to see it in action','jamedo-bootstrap-start-theme')));
		 
		$welcometext .='</p></div>';
		
		$welcometext .='<div class="of-col-third last"><h4>'.__('Shortcodes','jamedo-bootstrap-start-theme').'</h4>';
		
		$welcometext .= '<p>';
		$welcometext .= __('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme');
		$welcometext .= ' ';  
		
		$welcometext .=__('Install <a href="http://gndev.info/shortcodes-ultimate/">Shortcodes Ultimate</a> and <a href="http://wordpress.org/plugins/twitters-bootstrap-shortcodes-ultimate/">Twitter\'s Bootstrap Shortcodes Ultimate Add-on</a> This plugin provide an extensive library of shortcodes for adding unique content elements like columns, buttons, tabs and carousels. Best of all, you don\'t have to remember any of them as we have included a special shortcode generator just above the editor.','jamedo-bootstrap-start-theme');
		
		 $welcometext .= sprintf(' <strong>%1$s... %2$s\'s %3$s</strong>.</p></div>',__('Plus','jamedo-bootstrap-start-theme'),__('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme'),__('shortcodes work in widgets too!','jamedo-bootstrap-start-theme'));
				
				$welcometext .= '<div class="of-clear"></div>';
				
				$welcometext .= sprintf('<div class="of-col-third"><h4>%1$s</h4><p>%2$s</p></div>',
				__('Layout Engine','jamedo-bootstrap-start-theme'),
				__('Rather than resorting to page templates, we\'ve created a layout engine that lets you choose between four different base layouts for use on both pages and posts. In addition, you can even use the layout tab in this Theme Options panel to designate default layouts for different cases like blog archives, search pages and even product layouts (if you\'re using eCommerce).','jamedo-bootstrap-start-theme')
				);
				
				$welcometext .= sprintf('<div class="of-col-third"><h4>%1$s</h4><p>%2$s',
				__('eCommerce Options','jamedo-bootstrap-start-theme'),
				sprintf(__('Need some selling capabilities? Perhaps raising funds for a cause, selling tickets for an event, or even running a full-blown eCommerce site? %1$s is the perfect solution for you as it has full support for the three leading eCommerce platforms on WordPress: %2$s, %3$s and %4$s.','jamedo-bootstrap-start-theme'),__('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme'),'<strong><a href="http://wordpress.org/extend/plugins/wp-e-commerce/">WP e-Commerce</a></strong>','<strong><a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a></strong>','<strong><a href="http://wordpress.org/extend/plugins/jigoshop/">JigoShop</a></strong>')
				);
				$welcometext .= ' ';
				
				$welcometext .= sprintf('Activate any one of these plugins for the backend of your store and %1$s will handle the frontend like a champ!',__('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme'));
				
				$welcometext .= '</p></div>';
			   
				
				$welcometext .= sprintf('<div class="of-col-third last"><h4>%1$s</h4><p>%2$s</p></div>',
				__('BuddyPress','jamedo-bootstrap-start-theme'),
				sprintf(__('Need some robust social features without the hassle? Setting up BuddyPress with %1$s is pretty easy. Simply install and activate both %2$s and the %3$s. Then, run the Template Pack to move over your BuddyPress files. That\'s it! %1$s includes some unique BuddyPress functions as well as special content wrappers to make sure that all BuddyPress content fits neatly inside.','jamedo-bootstrap-start-theme'),__('Jamedo\'s Bootstrap Start Theme','jamedo-bootstrap-start-theme'),'<strong><a href="http://wordpress.org/extend/plugins/buddypress/">BuddyPress</a></strong>','<strong><a href="http://wordpress.org/extend/plugins/bp-template-pack/">BuddyPress Template Pack</a></strong>')
				); 
				$welcometext .= '<div class="of-clear"></div>';
				$welcometext .= sprintf('<div class="of-col-third"><h4>%1$s</h4><p>%2$s</p></div>',
				__('LESS','jamedo-bootstrap-start-theme'),
				__('JBST has full LESS support. Theme Options has a custom LESS editor (also accepts common CSS). Customizer option are saved to LESS too.','jamedo-bootstrap-start-theme')
				);
				$welcometext .= sprintf('<div class="of-col-third"><h4>%1$s</h4><p>%2$s</p></div>',
				__('Support','jamedo-bootstrap-start-theme'),
				__('We are always happy to help you. If you have any question regarding 
this code. <a href="http://www.jamedowebsites.nl/contact/">Send us a message</a>
or contact us on twitter <a href="http://twitter.com/JamedoWebsites">@JamedoWebsites</a>.<h4>Contribute!</h4>If you have suggestions for a new feature or improvement, feel free to contact us. Alternatively, you can fork the theme from <a href="https://github.com/bassjobsen/jamedo-bootstrap-start-theme">Github</a>.
','jamedo-bootstrap-start-theme')
				);
				$welcometext .= sprintf('<div class="of-col-third last"><h4>%1$s</h4><p>%2$s</p></div>',
				__('Credits','jamedo-bootstrap-start-theme'),
				__('<ul><li><a href="http://rocketfarmer.net/">Matt Jones of Rocket Farmer</a></li><li><a href="http://wordpress.org/">WordPress</a></li> <li><a href="http://twitter.github.com/bootstrap/">Bootstrap</a></li> <li><a href="http://www.jquery.com/">jQuery</a></li> <li><a href="http://www.lesscss.org/">Less.js</a></li> <li><a href="http://lessphp.gpeasy.com/">less.php</a></li> <li><a href="http://wptheming.com/">Options Framework</a></li></ul>','jamedo-bootstrap-start-theme')
				);
				$welcometext .= '<div class="of-clear"></div>';

				
		$options[] = array(
		'desc' => $welcometext,
		'type' => 'info' );
    // Return new options
    return $options;
}

/*
==========================================================
Loads the Metaboxes Framework and Theme Metaboxes
==========================================================
*/
// Initialize the metabox class
add_action( 'init', 'jbst_initialize_cmb_meta_boxes', 9999 );
function jbst_initialize_cmb_meta_boxes() {
require_once( get_template_directory() . '/functions/template-metaboxes.php' );
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once dirname( __FILE__ ) . '/metaboxes/init.php';
	}
}
	
/*
==========================================================
Stylesheets
==========================================================
*/

function jbst_bootstrap_css() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/library/assets/css/bootstrap.min.css', array(), '20130727', 'all' );
    

wp_enqueue_style( 'bootstrap' );
}

function jbst_bootstrap_responsive_css() {

	$menu_depth = get_theme_mod( 'menu_depth', 0);
	if($menu_depth>0) {wp_register_style( 'dropdown-submenu', get_template_directory_uri() . '/library/assets/css/dropdown-submenu.css', array(), '20131013', 'all' );}
	wp_enqueue_style( 'dropdown-submenu' );	
}


function jbst_prettify_css() {
	wp_register_style( 'jbst-prettify', get_template_directory_uri() . '/library/assets/js/google-code-prettify/prettify.css', array(), '20120822', 'all' );
    wp_enqueue_style( 'jbst-prettify' );
}


/*
==========================================================
Scripts
==========================================================
*/

function jbst_jquery_js(){
	wp_enqueue_script('jquery');
}

function jbst_bootstrap_js() {	
	wp_register_script('bootstrap', get_template_directory_uri() . '/library/assets/js/bootstrap.min.js', array( 'jquery' ), '20120703', true );
	wp_enqueue_script( 'bootstrap' );
}

function jbst_custom_js() {	
	wp_register_script('custom_js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery','bootstrap' ), '20132210', true );
	wp_enqueue_script( 'custom_js' );
}



function jbst_js() {	
	wp_register_script('jbst_js', get_template_directory_uri() . '/library/assets/js/jbst.js', array( 'jquery' ), '20120703', true );
	wp_enqueue_script( 'jbst_js' );
	if(get_theme_mod('open_with_click',0)==1)
	{
		wp_register_script('open_with_click_js', get_template_directory_uri() . '/library/assets/js/open_with_click.js', array( 'jquery' ), '20131310', true );
	    wp_enqueue_script( 'open_with_click_js' );
    }	
}

function jbst_prettify_js() {
	wp_register_script( 'prettify', get_template_directory_uri() . '/library/assets/js/google-code-prettify/prettify.js', array( 'jquery' ), '20120703', true );
	wp_enqueue_script( 'prettify' );
}

function jbst_editarea_js() {
	wp_register_script( 'editarea', get_template_directory_uri() . '/library/edit_area/edit_area_full.js', array( 'jquery' ), '20120921', true );
	wp_enqueue_script( 'editarea' );
}

function jbst_comments_js() {
	global $post;	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function jbst_keyboard_nav_js() {
global $post;
	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/library/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120703' );
	}
}


/*
==========================================================
GOOGLE FONTS
==========================================================
*/
add_action('jbst_head', 'jbst_add_google_fonts', 5);
function jbst_add_google_fonts() {
	$googlefonts = false;
	$webfonts = array('Helvetica Neue','Georgia','Lucida Bright','Arial','Times New Roman');
	
	$logofont = get_theme_mod('logo_font_family', 'Helvetica Neue');
	$bodyfont = get_theme_mod('body_font_family', 'Helvetica Neue');
	$headingfont = get_theme_mod('heading_font_family', 'Helvetica Neue');
	$navbarfont = get_theme_mod('navbar_font_family', 'Helvetica Neue');
	
	if (!in_array($logofont, $webfonts)) {$googlefonts .= $logofont.'|';}
	if (!in_array($bodyfont, $webfonts)) {$googlefonts .= $bodyfont.'|';}
	if (!in_array($headingfont, $webfonts)) {$googlefonts .= $headingfont.'|';}
	if (!in_array($navbarfont, $webfonts)) {$googlefonts .= $navbarfont.'|';}
	
	if(!$googlefonts == false) {
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$googlefonts.'" media="screen">';
	}
}

/*
==========================================================
CUSTOM TYPOGRAPHY
==========================================================
*/
add_action( 'jbst_add_to_custom_style', 'jbst_typography', 5);
function jbst_typography() {
	echo 'a.navbar-brand {font-family:"'.str_replace("+", " ", get_theme_mod('logo_font_family', 'Helvetica Neue')).'","Helvetica Neue",sans-serif;}';
	echo 'body {font-family:"'.str_replace("+", " ", get_theme_mod('body_font_family', 'Helvetica Neue')).'","Helvetica Neue",sans-serif;}';
	echo 'h1,h2,h3 {font-family:"'.str_replace("+", " ", get_theme_mod('heading_font_family', 'Helvetica Neue')).'","Helvetica Neue",sans-serif;}';
	echo '.navbar-inner {font-family:"'.str_replace("+", " ", get_theme_mod('navbar_font_family', 'Helvetica Neue')).'","Helvetica Neue",sans-serif;}';

}

/*
==========================================================
CUSTOM LOGO
==========================================================
*/

function jbst_logo() { 
	$custom_logo = get_theme_mod( 'logo_image', '');
	if ($custom_logo) 
	{
	return "<a id='logo-link-container' href='".home_url()."' title='".esc_attr( get_bloginfo( 'name', 'display' ) )."'><img class='site-logo' src='$custom_logo' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )."' /></a>"; 
	} 
	return '<a class="navbar-brand" href="'. home_url() . '">' . get_bloginfo('name') . '</a>';
}




/*
==========================================================
ACCOUNT NAV DROPDOWN BUTTON
==========================================================
*/
function jbst_account_dropdown() {
	global $current_user;
	global $jbstecommerce;
	get_currentuserinfo();
	if (is_user_logged_in()) {
	?>
				<div class="btn-group navbar-right" id="nav-profile-dropdown">
				  <button type="button" class="btn <?php jbst_nav_account_button_class();?> navbar-btn  dropdown-toggle" data-toggle="dropdown">
					<i class="glyphicon glyphicon-user"></i> <?php echo $current_user->display_name; ?>
		     		<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
						<?php do_action( 'jbst_nav_profile_dropdown');?>
				  </ul>
				</div>
	<?php
	} else {
	?>
			<div class="btn-group navbar-right" id="nav-profile-dropdown">
				  <button type="button" class="btn <?php jbst_nav_account_button_class();?> navbar-btn dropdown-toggle" data-toggle="dropdown">
					<i class="glyphicon glyphicon-user"></i> 
					<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
						<?php do_action( 'jbst_nav_login_dropdown');?>
				  </ul>
			</div>
	

	<?php
	}
}

/* Account Profile Button
----------------------------------------------- */
function jbst_account_profile_link() {   
	echo '<li><a href="';
	echo home_url().'/wp-admin/profile.php';
	echo '">';
	echo _e( 'My Profile', 'jamedo-bootstrap-start-theme' );
	echo '</a></li>';
}
add_action( 'jbst_nav_profile_dropdown', 'jbst_account_profile_link', 10);

/* Account Signout Button
----------------------------------------------- */
function jbst_account_signout_link() {    
	echo '<li class="divider"></li><li><a href="';
	echo wp_logout_url(home_url());
	echo '">';
	echo _e( 'Sign Out', 'jamedo-bootstrap-start-theme' );
	echo '</a></li>';
}
add_action( 'jbst_nav_profile_dropdown', 'jbst_account_signout_link', 20);

/* Login Form for Profile Dropdown
----------------------------------------------- */
function jbst_nav_login_form() {
	global $current_user;
	global $jbstecommerce;
	get_currentuserinfo();
?>
	      <li>
	        <form name="loginform" id="navloginform" action="<?php echo home_url(); ?>/wp-login.php" method="post">
					<label><?php _e( 'Username', 'jamedo-bootstrap-start-theme' ); ?><br />
					<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>

					<label><?php _e( 'Password', 'jamedo-bootstrap-start-theme' ); ?><br />
					<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
				<label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember Me', 'jamedo-bootstrap-start-theme' ); ?></label> 
					<input type="submit" name="wp-submit" id="wp-submit" class="btn <?php jbst_button_class();?>" value="<?php _e( 'Log in', 'jamedo-bootstrap-start-theme' ); ?>"  />
					<input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>/wp-admin/" />
			
					<input type="hidden" name="testcookie" value="1" />
					 <a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword" class="lost-password" title="<?php _e( 'Password Lost and Found') ?>"><?php _e( 'Lost Password?', 'jamedo-bootstrap-start-theme' ); ?></a>
			</form>	      
	      	
	      </li>
	      <?php wp_register('<li class="divider"></li><li>', '</li>'); ?>
<?php }
add_action( 'jbst_nav_login_dropdown', 'jbst_nav_login_form', 10);



/*
==========================================================
REDIRECT AFTER LOGIN (only if nav account btn is active)
==========================================================
*/
if(get_theme_mod( 'navbar_account', 1 ) == 1) {
	function jbst_redirect_after_login() {
	wp_redirect( home_url() ); exit;
	}
	if (of_get_option('login_redirect_switch', 0) == 1 && get_theme_mod( 'navbar_account', 1 ) == 1) {
		add_action('login_redirect','jbst_redirect_after_login');
	}
}	
/*
==========================================================
BUTTON CLASSES
==========================================================
*/
function jbst_button_class() {
$buttonclass = get_theme_mod( 'default_button_style', 'btn-primary' );
echo $buttonclass;
}

function jbst_nav_account_button_class() {
$buttonclass = get_theme_mod( 'nav_account_button_style', 'btn-warning' );
echo $buttonclass;
}

function jbst_nav_shop_button_class() {
$buttonclass = get_theme_mod( 'nav_shop_button_style', 'btn-success' );
echo $buttonclass;
}

/*
==========================================================
NAVIGATION SEARCH
==========================================================
*/
function jbst_nav_search() {?>
		
	<form class="navbar-form navbar-search navbar-left" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	  <div class="form-group">
        <input type="text" class="form-control" name="s" id="s" type="text" autocomplete="off" placeholder="<?php _e( 'Search', 'jamedo-bootstrap-start-theme' ); ?>">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php
}

/*
==========================================================
CUSTOM NAVIGATION
==========================================================
*/
register_nav_menus(                      // wp3+ menus
	array( 
		'main_nav' => 'Main Navigation'
	)
);

function jbst_main_nav($menu_class='') {
	// display the wp3 menu if available
 //   wp_nav_menu( 
 //   	array( 
 //   		'menu' => 'main_nav', /* menu name */
 //   		'menu_class' => empty($menu_class)?'nav navbar-nav':$menu_class,// nav navbar-nav
 //   		'theme_location' => 'main_nav', /* where in the theme it's assigned */
 //   		'container' => 'false', /* container class */
 //   		'fallback_cb' => 'jbst_main_nav_fallback', /* menu fallback */
 //   		'depth' => '2', /* suppress lower levels for now */
 //   		'walker' => new description_walker()
 //   	)
 //   );

    wp_nav_menu( array(
        'menu'              => 'main_nav',
        'theme_location'    => 'main_nav',
        'depth'             => get_theme_mod( 'menu_depth', 0)+1,
        'container'         => 'false',
        'container_class'   => 'collapse navbar-collapse navbar-jbst-collapse',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );


do_action( 'jbst_after_main_nav' );
}


/**
 * Class Name: wp_bootstrap_navwalker
 * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
 * Version: 2.0.4
 * Author: Edward McIntyre - @twittem
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

class wp_bootstrap_navwalker extends Walker_Nav_Menu {

	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		/**
		 * Dividers, Headers or Disabled
		 * =============================
		 * Determine whether the item is a Divider, Header, Disabled or regular
		 * menu item. To prevent errors we use the strcasecmp() function to so a
		 * comparison that is not case sensitive. The strcasecmp() function returns
		 * a 0 if the strings are equal.
		 */
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

			if ( $args->has_children && $depth<(get_theme_mod( 'menu_depth', 0)))
				//$class_names .= ' dropdown';
				//add by bass
			{
				if($depth === 0) $class_names .= ' dropdown';
				else $class_names .= ' dropdown-submenu';
		    }		
				
			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';

			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

			// If item has_children add atts to a.
			if ( $args->has_children ) {//&& $depth === 0 ) {
				if(get_theme_mod('parent_clickable',0)==1)
				{
					$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			    }	
			    else
			    {
					$atts['href']   		= '#';
			    }
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
			} 
			//add by bass
			/*elseif( $args->has_children && $depth >0 )
			{
				$atts['href']   		= '#';
		    }*/	
			else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			/*
			 * Glyphicons
			 * ===========
			 * Since the the menu item is NOT a Divider or Header we check the see
			 * if there is a value in the attr_title property. If the attr_title
			 * property is NOT null we apply it as the class name for the glyphicon.
			 */
			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';

			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 *
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;


				/*$fb_output = '<div';

				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';

				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';

				$fb_output .= '>';*/
		

			$fb_output .= '<ul';

			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';

			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';


				//$fb_output .= '</div>';

			echo $fb_output;
		}
	}
}

/*
==========================================================
COMMENTS (From the geniuses at 320Press and WPBootstrap)
==========================================================
*/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<div class="comment-author vcard row">
				<div class="avatar <?php echo JBST_GRIDPREFIX;?>2">
					<?php echo get_avatar($comment,$size='75',$default='' ); ?>
				</div>
				<div class="<?php echo JBST_GRIDPREFIX;?>10  comment-text">
					<?php printf(__('<h4>%s</h4>','jamedo-bootstrap-start-theme'), get_comment_author_link()) ?>
					
                    
                    <?php if ($comment->comment_approved == '0') : ?>
       					<div class="alert-message success">
          				<p><?php _e('Your comment is awaiting moderation.','jamedo-bootstrap-start-theme') ?></p>
          				</div>
					<?php endif; ?>
                    
                    <?php comment_text() ?>
                    
                    <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
                    <?php edit_comment_link(__('Edit','jamedo-bootstrap-start-theme'),'<span class="edit-comment btn btn-mini '.get_theme_mod( 'default_button_style', 'btn-primary' ).'"><i class="glyphicon glyphicon-pencil"></i>','</span>') ?>
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
			</div>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

	function jbst_comment_button_classes() {?>

	<?php
	}



/*
==========================================================
ADMIN STYLES
==========================================================
*/
function jbst_admin_styles() {
   echo '<style type="text/css">

           .of-col-third {width:32%;margin-right:2%;float:left;text-align:justify;}
           .of-col-third.last {margin-right:0;}
           .of-col-half {width:49%;margin-right:2%;float:left;text-align:justify;}
           .of-col-half.last {margin-right:0;}
           .of-divider {border-top:1px solid #ccc;margin:30px 0px 20px;}
           .of-clear {clear:both;}


         </style>';
}

add_action('admin_head', 'jbst_admin_styles');

/*
==========================================================
CONTENT NAV
==========================================================
*/
if ( ! function_exists( 'jbst_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since jbst 1.0
 */
function jbst_content_nav( $nav_id ) {
	global $wp_query;

	$nav_class = 'site-navigation paging-navigation';
	if ( is_single() )
		$nav_class = 'site-navigation post-navigation';

	?>
	<nav role="navigation" id="<?php echo $nav_id; ?>" class="<?php echo $nav_class; ?>">
		<h3 class="sr-only"><?php _e( 'Post navigation', 'jamedo-bootstrap-start-theme' ); ?></h3>
<ul class="pager">

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<li class="previous">%link</li>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'jamedo-bootstrap-start-theme' ) . '</span> Previous' ); ?>
		<?php next_post_link( '<li class="next">%link</li>', 'Next <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'jamedo-bootstrap-start-theme' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<li class="previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'jamedo-bootstrap-start-theme' ) ); ?></li>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<li class="next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'jamedo-bootstrap-start-theme' ) ); ?></li>
		<?php endif; ?>

	<?php endif; ?>

</ul>
</nav><!-- #<?php echo $nav_id; ?> -->
	<?php
}
endif; // jbst_content_nav


/*
==========================================================
CONTENT NAV
==========================================================
*/
function jbst_content_nav_top() {
	if (get_theme_mod('blog_navigation_buttons', 'bottom') == 'top') {
		jbst_content_nav( 'nav-above' );
	} elseif (get_theme_mod('blog_navigation_buttons', 'bottom') == 'both') {
		jbst_content_nav( 'nav-above' );
	}
}

function jbst_content_nav_bottom() {
	if (get_theme_mod('blog_navigation_buttons', 'bottom') == 'bottom') {
		jbst_content_nav( 'nav-below' );
	} elseif (get_theme_mod('blog_navigation_buttons', 'bottom') == 'both') {
		jbst_content_nav( 'nav-below' );
	}
}

function jbst_content_nav_top_single() {
	if (get_theme_mod('post_navigation_buttons', 'bottom') == 'top') {
		jbst_content_nav( 'nav-above' );
	} elseif (get_theme_mod('post_navigation_buttons', 'bottom') == 'both') {
		jbst_content_nav( 'nav-above' );
	}
}

function jbst_content_nav_bottom_single() {
	if (get_theme_mod('post_navigation_buttons', 'bottom') == 'bottom') {
		jbst_content_nav( 'nav-below' );
	} elseif (get_theme_mod('post_navigation_buttons', 'bottom') == 'both') {
		jbst_content_nav( 'nav-below' );
	}
}



/*
==========================================================
PAGE TITLE
==========================================================
*/
function jbst_page_title() {
	global $post;
	if (of_get_option('display_page_title', 1) == 1) {
	echo '<div class="page-header"><h1 class="entry-title">';
	the_title();
	echo '</h1></div>';
	}
}



/*
==========================================================
COMMENTS & PINGBACKS
==========================================================
*/
if ( ! function_exists( 'jbst_comment' ) ) :
/**
 * Used as a callback by wp_list_comments() for displaying the comments.
 * @since jbst 1.0
 */
function jbst_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'jamedo-bootstrap-start-theme' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'jamedo-bootstrap-start-theme' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'jamedo-bootstrap-start-theme' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'jamedo-bootstrap-start-theme' ); ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'jamedo-bootstrap-start-theme' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( '(Edit)', 'jamedo-bootstrap-start-theme' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for jbst_comment()

/*
==========================================================
POSTED ON
==========================================================
*/
if ( ! function_exists( 'jbst_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since jbst 1.0
 */
function jbst_posted_on() {
	printf( __( 'Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> by <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'jamedo-bootstrap-start-theme' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'jamedo-bootstrap-start-theme' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);
}
endif;


function jbst_search_label() {
global $post;
$posttype = get_post_type();
if ($posttype == 'wpsc-product') {$posttype = 'product';}
$label = 'label-inverse';
if ($posttype == 'product') {$label = 'label-inverse';$icon = 'glyphicon glyphicon-tags';$type = 'Product';}
if ($posttype == 'post') {$label = 'label-inverse';$icon = 'glyphicon glyphicon-pencil';$type = 'Article';}
if ($posttype == 'page') {$label = 'label-inverse';$icon = 'glyphicon glyphicon-file';$type = 'Page';}

echo '<div class="search-label"><a data-title="'.$type.'" rel="tooltip"><i class="icon '.$icon.'"></i></a></div>';
}

/*
==========================================================
CATEGORIZED BLOG
==========================================================
*/
/**
 * Returns true if a blog has more than 1 category
 *
 * @since jbst 1.0
 */
function jbst_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so jbst_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so jbst_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in jbst_categorized_blog
 *
 * @since jbst 1.0
 */
function jbst_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'jbst_category_transient_flusher' );
add_action( 'save_post', 'jbst_category_transient_flusher' );


/*
==========================================================
RETINA DETECT
==========================================================
*/
function jbst_retina_detect() {
	$retina = false;
	if (of_get_option('retina_display_switch', 0) == 1) {  
		if ( isset( $_COOKIE['retina'] ) ) {
		global $retina;
		$ratio = $_COOKIE['retina']; if( $ratio >= 1 ) { $retina = true; }
		} else { ?>
		<script type="text/javascript">
			var retina = 'retina='+ window.devicePixelRatio +';'+ retina;
			document.cookie = retina;
			if ( document.cookie.length !== 0 ) { document.location.reload(true); }
		</script>
		<?php }
	}
}
add_action( 'jbst_before_header', 'jbst_retina_detect', 1);

function jbst_retina_display() {   
global $retina;
if($retina) {echo "I am Retina!";}
}
add_action( 'jbst_before_content_single', 'jbst_retina_display', 1);

/*
==========================================================
jbst POST THUMBNAILS
==========================================================
*/
function jbst_post_thumbnail() {
	echo '<div class="post-thumbnail">';	
	jbst_image(get_theme_mod('post_thumbnail_width', 200),get_theme_mod('post_thumbnail_height', 200));
	echo '</div>';
}

function jbst_single_thumbnail() {
	echo '<div class="single-post-thumbnail">';
	jbst_image(get_theme_mod( 'featured_image_width', 900 ),get_theme_mod( 'featured_image_height', 350 ));
	echo '</div>';
}

/*
==========================================================
jbst IMAGE
==========================================================
*/

function jbst_image($width,$height) {
		global $post;
		global $retina;
		if($width) {$w = $width;} else {$w = get_theme_mod('post_thumbnail_width', 200);}
		if($height) {$h = $height;} else {$h = get_theme_mod('post_thumbnail_width', 200);}
		if (of_get_option('full_size_height', 1000) <> "") {
			$fh = of_get_option('full_size_height', 1000);
		} else {$fh = 50000;}
		if (of_get_option('full_size_width', 1000) <> "") {
			$fw = of_get_option('full_size_width', 1000);
		} else {$fw = 50000;}
	if(has_post_thumbnail()) {
		$thumb = get_post_thumbnail_id();
		if($retina) {$image = jbst_resize( $thumb,'' , $w * 2, $h * 2, true);}
		else {$image = jbst_resize( $thumb,'' , $w, $h, true);}
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
		?>
				<a href="<?php echo $large_image_url[0];?>" title="<?php the_title();?>" class="thumbnail" rel="lightbox">
					<img src="<?php echo $image['url']; ?>" width="<?php echo $w; ?>" />
				</a>
		<?php
	} 
	
	else {
		if (of_get_option('automatic_thumbnails', 0) == 1) {
			$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image','number posts' => 1) );
			
			if ($attachments) {
			     foreach ( $attachments as $attachment ){
			        if($retina) {$image = jbst_resize( $attachment->ID, '', $w * 2, $h * 2, true );}
			        else {$image = jbst_resize( $attachment->ID, '', $w, $h, true );}
					$large_image_url = wp_get_attachment_image_src($attachment->ID, 'large');
				 }?>
				 	<a href="<?php echo $large_image_url[0];?>" data-lightbox="lightbox" title="<?php the_title();?>" class="thumbnail" rel="<?php the_title(); ?>">
						<img src="<?php echo $image['url']; ?>" class="img-responsive" />
					</a>
		
			<?php } 
		}
	}
}

function jbst_image_only($width,$height) {
		global $post;
		global $retina;
		if($width) {$w = $width;} else {$w = get_theme_mod('post_thumbnail_width', 200);}
		if($height) {$h = $height;} else {$h = get_theme_mod('post_thumbnail_width', 200);}

	if(has_post_thumbnail()) {
		$thumb = get_post_thumbnail_id();
		if($retina) {$image = jbst_resize( $thumb,'' , $w * 2, $h * 2, true);}
		else {$image = jbst_resize( $thumb,'' , $w, $h, true);}
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
		?>
					<img src="<?php echo $image['url']; ?>" width="<?php echo $w; ?>" />
		<?php
	} 
	
	else {
		if (of_get_option('automatic_thumbnails', 1) == 1) {
			$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image','number posts' => 1) );
			
			if ($attachments) {
			     foreach ( $attachments as $attachment ){
			        if($retina) {$image = jbst_resize( $attachment->ID, '', $w * 2, $h * 2, true );}
			        else {$image = jbst_resize( $attachment->ID, '', $w, $h, true );}
					$large_image_url = wp_get_attachment_image_src($attachment->ID, 'large');
				 }?>
						<img src="<?php echo $image['url']; ?>" width="<?php echo $w; ?>" />
		
			<?php } /*else {?>
			<a href="<?php echo the_permalink(); ?>" class="thumbnail" rel="<?php the_title(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/library/assets/img/default.jpg" width="<?php echo $w;?>px" />
				</a>
			<?php
			}*/
		}
	}
}

/*
==========================================================
jbst RESIZE
==========================================================
*/
/* Used by jbst_image() to resize images */
function jbst_resize( $attach_id = null, $img_url = null, $width, $height, $crop = false ) {

	// this is an attachment, so we have the ID
	if ( $attach_id ) {
	
		$image_src = wp_get_attachment_image_src( $attach_id, 'full' );
		$file_path = get_attached_file( $attach_id );
	
	// this is not an attachment, let's use the image url
	} else if ( $img_url ) {
	
		 if ( is_multisite() ) /* CHECK IF MULTISITE IS ENABLED */ {
	
	
			
			$file_path = parse_url( $img_url );
			global $blog_id;
			$file_path = $_SERVER['DOCUMENT_ROOT'] .'/wp-content/blogs.dir/' . $blog_id . $file_path['path'];
			
			//$file_path = ltrim( $file_path['path'], '/' );
			//$file_path = rtrim( ABSPATH, '/' ).$file_path['path'];
			
			$orig_size = getimagesize( $file_path );
			
			$image_src[0] = $img_url;
			$image_src[1] = $orig_size[0];
			$image_src[2] = $orig_size[1];
		} /* IF MULTISITE IS NOT ENABLED */
		
		else {
		$file_path = parse_url( $img_url );
			$file_path = $_SERVER['DOCUMENT_ROOT'] . $file_path['path'];
			
			//$file_path = ltrim( $file_path['path'], '/' );
			//$file_path = rtrim( ABSPATH, '/' ).$file_path['path'];
			
			$orig_size = getimagesize( $file_path );
			
			$image_src[0] = $img_url;
			$image_src[1] = $orig_size[0];
			$image_src[2] = $orig_size[1];
		} //END OF MULITSITE CHECK
	}
	
	$file_info = pathinfo( $file_path );
	$extension = '.'. $file_info['extension'];

	// the image path without the extension
	$no_ext_path = $file_info['dirname'].'/'.$file_info['filename'];

	$cropped_img_path = $no_ext_path.'-'.$width.'x'.$height.$extension;

	// checking if the file size is larger than the target size
	// if it is smaller or the same size, stop right here and return
	if ( $image_src[1] > $width || $image_src[2] > $height ) {

		// the file is larger, check if the resized version already exists (for $crop = true but will also work for $crop = false if the sizes match)
		if ( file_exists( $cropped_img_path ) ) {

			$cropped_img_url = str_replace( basename( $image_src[0] ), basename( $cropped_img_path ), $image_src[0] );
			
			$jbst_image = array (
				'url' => $cropped_img_url,
				'width' => $width,
				'height' => $height
			);
			
			return $jbst_image;
		}

		// $crop = false
		if ( $crop == false ) {
		
			// calculate the size proportionaly
			$proportional_size = wp_constrain_dimensions( $image_src[1], $image_src[2], $width, $height );
			$resized_img_path = $no_ext_path.'-'.$proportional_size[0].'x'.$proportional_size[1].$extension;			

			// checking if the file already exists
			if ( file_exists( $resized_img_path ) ) {
			
				$resized_img_url = str_replace( basename( $image_src[0] ), basename( $resized_img_path ), $image_src[0] );

				$jbst_image = array (
					'url' => $resized_img_url,
					'width' => $proportional_size[0],
					'height' => $proportional_size[1]
				);
				
				return $jbst_image;
			}
		}

		// no cache files - let's finally resize it
		
  
        $new_img_path = dirname ($file_path).'/'.$width.'-'.$height.'-'.basename( $file_path );
        
		$image = wp_get_image_editor( $file_path  ); // Return an implementation that extends <tt>WP_Image_Editor</tt>

		if ( ! is_wp_error( $image ) ) {
			
			$image->resize($width, $height, $crop );
			$image->save( $new_img_path );
		}
		
		$new_img_size = getimagesize( $new_img_path );
		$new_img = str_replace( basename( $image_src[0] ), basename( $new_img_path ), $image_src[0] );
		


		// resized output
		$jbst_image = array (
			'url' => $new_img,
			'width' => $new_img_size[0],
			'height' => $new_img_size[1]
		);
		
		return $jbst_image;
	}

	// default output - without resizing
	$jbst_image = array (
		'url' => $image_src[0],
		'width' => $image_src[1],
		'height' => $image_src[2]
	);
	
	return $jbst_image;
}

/*
==========================================================
Add Shortcodes to wp_trim_words
==========================================================
*/
add_filter('wp_trim_words', 'do_shortcode');

/*
==========================================================
Conditionally load WooCommerce styles on WooCommerce Pages
==========================================================
*/
//add_action( 'wp_enqueue_scripts', 'jbst_deactivate_ecommerce_scripts', 99 );
/**
 * Remove WooCommerce styles and scripts unless inside the store.
 *
 * @author Greg Rickaby
 * @since 1.0.0
 */
function jbst_deactivate_ecommerce_scripts() {
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if ( 'product' !== get_post_type() && !is_cart() && !is_checkout() ) {
			wp_dequeue_style( 'woocommerce_frontend_styles' );
			wp_dequeue_style( 'woocommerce_fancybox_styles' );
			wp_dequeue_style( 'woocommerce_chosen_styles' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'wc_price_slider' );
			// wp_dequeue_script( 'fancybox' ); Not using fancybox? Then uncomment this line!
			// wp_dequeue_script( 'jqueryui' ); Not using jquery-ui? Then uncomment this line!
		}
	}
/*
	if ( in_array( 'jigoshop/jigoshop.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if ( 'product' !== get_post_type() && !is_cart() && !is_checkout() ) {
			wp_dequeue_style( 'jigoshop_frontend_styles' );
			wp_dequeue_style( 'jigoshop_fancybox_styles' );
			wp_dequeue_style( 'jigoshop_chosen_styles' );
			wp_dequeue_script( 'jigoshop' );
			// wp_dequeue_script( 'fancybox' ); Not using fancybox? Then uncomment this line!
			// wp_dequeue_script( 'jqueryui' ); Not using jquery-ui? Then uncomment this line!
		}
	}
*/
}
