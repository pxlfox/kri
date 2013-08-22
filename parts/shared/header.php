<nav>
	<div id="callBlock">
		<p>24/7 Service: (507) 388-4112</p>
	</div>
	<div class="clear"></div>
	<div id="logoBlockAngle"></div>
	<div id="menuBar">
		<ul id="menu" class="clearfix">
			<?php js_list_pages_include_tree('include_tree=8'); ?>
			<?php wp_list_pages('exclude=2,8&title_li=&sort_column=menu_order&depth=2'); ?>
		</ul>
		<header>
		<a href="<?php echo home_url(); ?>"><img class="kriLogo" src="<?php echo get_dir_path("img"); ?>/full_logo.png"></a>
		<a href="#" id="pull"><img id="pullImg" src="<?php echo get_dir_path("img"); ?>/menu.png"></a>
		</header>
	</div>
	<div class="clear"></div>
</nav>