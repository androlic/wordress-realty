<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
            </div><!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<nav role="navigation" class="col-md-6">
					<?php unite_footer_links(); ?>
				</nav>

				<div class="copyright col-md-6">
					<?php do_action( 'unite_credits' ); ?>
					<?php echo of_get_option( 'custom_footer_text', 'unite' ); ?>
					<?php do_action( 'unite_footer' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('body').on('click', '.realtors li a', function(){
		if(!$(this).parent().hasClass('current-cat')){		
			$('.fadebody').fadeIn(300);
			$.ajax({
		        type: "POST",
		        url: $(this).attr('href'),
		        success: function (response) {
		        	$('body').html(response); 
		        }
	    	});			
		}
		return false;		
	});
</script>
<div class="fadebody"></div>
</body>
</html>