<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article id="defaultPage">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
    	<div id="bannerImg"></div>
        <div class="entrytext">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</article>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>