
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.slides.min.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/ccv.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/face.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.facedetection.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
				$('#staff .post div').each(function() {
					var src = $(this).attr('name').replace('http://' + document.domain, '');
					var id = $(this).attr('id');
					
					$('#' + id).css({
						'background': 'url('+ src +') 50% 0 no-repeat fixed',
						'background-size': 'cover',
						'height': '900px',
						'margin': '0 auto',
						'position': 'relative'

					});
					
					var align = $(this).attr('align').split(' ');
					var margin = '10%';
					
					if(align[0].toLowerCase() == 'right')
					{
						margin = '65%';
					}
					
					$('#' + id + '-post').css({
						'text-align': align,
						'margin-left': margin
					});
					
					if(align[1] != 'none')
					{
						$('#' + id + '-button').css({
							'display': 'block'
						});
					}
					
					$(this).removeAttr("align");
					$(this).removeAttr("name");
					$('#' + id).parallax("50%", 0.7);
				});

				$('<div class="tooltip"></div>').insertBefore('#menuBar>ul>li>.children');
				$("#slides").slidesjs({
					navigation: { active: false, },
					pagination: { active: false, },
					play: {
					      active: false,
					      effect: "fade",
					      interval: 5000,
					      auto: true,
					      swap: true,
					      pauseOnHover: false,
					      restartDelay: 2500
					    }
				});
			});
	</script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('#menuBar ul.clearfix');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 640 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	</body>
</html>