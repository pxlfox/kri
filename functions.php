<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */

	function get_dir_path($dir) {
	
		$path = "/kri/wp-content/themes/".get_template();
		
		if($dir == "")
		{
			return $path;
		}
		else
		{
			$path = $path ."/$dir";
	    	return $path;
		}
	}
	
	function js_list_pages_include_tree($args) {
		$defaults = array(
			'depth' => 1,
			'show_date' => '',
			'date_format' => get_option('date_format'),
			'child_of' => 0,
			'exclude' => '',
			'title_li' => __('Pages'),
			'echo' => 1,
			'authors' => '',
			'sort_column' => 'menu_order, post_title',
			'link_before' => '',
			'link_after' => '',
			'include_tree' => 0
		);
		
		$r = wp_parse_args( $args, $defaults );
		
		// Print the parent page
		$pages = get_pages('title_li=&include='.$r['include_tree'].'&depth=0');
		
		// Print the children
		foreach ($pages as $pagg) {
			echo '<li><a href="'.get_page_link($pagg->ID).'">'. $pagg->post_title.'</a>';
			echo '<div class="tooltip"></div>';
			echo '<ul class="column">';
			wp_list_pages('title_li=&child_of='.$r['include_tree'].'&depth='.($r['depth']-1));
			echo '<li class="column-right"><a href="#">Testimonials</a>';
			echo '<ul>';
			echo '<li><div id="navImage"></div></li>';
			echo '<li><div id="navTestimonial">Testimonial area</div></li>';
			echo '</ul></li>';
			echo '</ul>';
			echo '</li>';
		}
	}
	
	function filter_ptags_on_images($content){
	   return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
	}
	
	add_filter('the_content', 'filter_ptags_on_images');

	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}