<?php
/*
Template Name: Front Page
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="slides">
    <img src="<?php echo get_dir_path("img"); ?>/building.jpg">
    <img src="<?php echo get_dir_path("img"); ?>/building-1.jpg">
    <img src="<?php echo get_dir_path("img"); ?>/building-2.jpg">
    <img src="<?php echo get_dir_path("img"); ?>/building-3.jpg">
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer') ); ?>