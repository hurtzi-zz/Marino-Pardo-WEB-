<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_footer_before(); ?>
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="site-info container">
						<div><span style="float:right">BUILT BY <a href="http://www.marinopardo.com/urtzidiaz" target="_blank">URTZI DIAZ</a></span>© 2015 MARINO PARDO<p class="foot-central"><a href="http://marinopardo.com/aviso-legal" target="_blank">Aviso Legal</a> / <a href="http://marinopardo.com/politica-de-privacidad" target="_blank"> Política de privacidad</a> / <a href="http://marinopardo.com/politica-de-cookies" target="_blank">Política de cookies</a></p></div>
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
