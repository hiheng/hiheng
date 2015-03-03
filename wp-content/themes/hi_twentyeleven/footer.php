<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				Powered by <a href="http://www.hiheng.com">hiheng.com</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div style="display:none"> 
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=15814099" charset="UTF-8"></script>
</div>

<?php wp_footer(); ?>

</body>
</html>