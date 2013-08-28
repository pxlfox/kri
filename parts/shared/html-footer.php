
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="<?php echo get_dir_path("js"); ?>/jquery.slides.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
				var root = "/kri/wp-content/themes/starker/";
				var emailLink = "mailto:info@katoroofing.com";
				var twitterLink = "https://twitter.com/KatoRoofingInc";
				var facebookLink = "http://facebook.com/katoroofing";
				var linkedinLink = "http://www.linkedin.com/company/kato-roofing-inc-kri-?";
				
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
					//var margin = '19%';
					var margin = '370px';
					
					if(align[0].toLowerCase() == 'right')
					{
						margin = '65%';
					}
					
					$('#' + id + '-post').css({
						'text-align': align[0],
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
				
				$( ".emp" ).after( "<hr />" );
				
				$("#menu>li li:last-child").last().after("<li class=\"social_links\"><a href=\"" + emailLink + "\"><img src=\"" + root + "img/eml.png\" alt=\"email\" /></a><a href=\"" + twitterLink + "\"><img src=\"" + root + "img/tw.png\" alt=\"twitter\" /></a><a href=\"" + facebookLink + "\"><img src=\"" + root + "img/fb.png\" alt=\"facebook\" /></a><a href=\"" + linkedinLink + "\"><img src=\"" + root + "img/Linkedin.png\" alt=\"googleplus\" /></a></li>");
								
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
				menu 		= $('#menu');
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