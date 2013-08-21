<?php
/*
Template Name: Staff Page
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article id="staff">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
		<?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
</article>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer') ); ?>