<?php
/*
Template Name: Awards Page
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article id="awards">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <div class="entrytext">
            <?php the_content('<p>Read more...</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</article>
<?php Starkers_Utilities::get_template_parts( array('parts/shared/footer', 'parts/shared/html-footer') ); ?>