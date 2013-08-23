<?php
/*
Template Name: Services List
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article id="defaultPage" class="dropdown_list">
    <div class="post">
    	<div id="bannerImg"></div>
        <div class="entrytext">
            <ul class="page_list">
			<?php js_list_pages_include_tree_page('include_tree=8'); ?>
			</ul>
        </div>
    </div>
</article>
<?php Starkers_Utilities::get_template_parts( array('parts/shared/footer', 'parts/shared/html-footer') ); ?>