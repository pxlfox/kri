<?php
/*
Template Name: Team Page
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article id="defaultPage" class="emp_team">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
    	<div id="bannerImg"></div>
        <div class="entrytext">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</article>
<?php Starkers_Utilities::get_template_parts( array('parts/shared/footer', 'parts/shared/html-footer') ); ?>