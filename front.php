<?php
/*
Template Name: Front Page
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="slides">
    <img src="<?php echo get_dir_path("img"); ?>/mgbuilding.png">
    <img src="<?php echo get_dir_path("img"); ?>/mgbuilding1.png">
    <img src="<?php echo get_dir_path("img"); ?>/mgbuilding2.jpg">
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer') ); ?>