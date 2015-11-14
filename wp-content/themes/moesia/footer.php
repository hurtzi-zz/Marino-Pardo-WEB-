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
	   <div id="sidebar-footer" class="footer-widget-area clearfix" role="complementary" >
    		<div class="container">
    			<?php do_action( 'before_sidebar' ); ?>
    			<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
    				<div class="sidebar-column col-md-4 col-sm-4"> <?php
    					dynamic_sidebar( 'sidebar-3'); 
    				?> </div> <?php	
    			}
    			if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
    				<div class="sidebar-column col-md-4 col-sm-4"> <?php
    					dynamic_sidebar( 'sidebar-4'); 
    				?> </div> <?php	
    			}
    			if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
    				<div class="sidebar-column col-md-4 col-sm-4"> <?php
    					dynamic_sidebar( 'sidebar-5'); 
    				?> </div> <?php	
    			}		
    			?>
    		</div>	
	</div>
	
	
	
	<div id="sidebar-footer" class="footer-widget-area2">
		<div class="fott2">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<div class="sidebar-column col-md-4 col-sm-4">
					<aside id="text-3" class="widget widget_text">			
        				<div class="textwidget1">
						    <p>© 2015 MARINO PARDO</p>
        				</div>
        			</aside> 
				</div> <?php	
			}
			if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
				<div class="sidebar-column col-md-4 col-sm-4"> 
					<aside id="text-3" class="widget widget_text">			
        				<div class="textwidget2">
        				    <a href="http://marinopardo.com/aviso-legal" target="_blank">Aviso Legal</a> / <a href="http://marinopardo.com/politica-de-privacidad" target="_blank"> Política de privacidad</a> / <a href="http://marinopardo.com/politica-de-cookies" target="_blank">Política de cookies</a>
         				</div>
        			</aside> 
				</div> <?php	
			}
			if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
				<div class="sidebar-column col-md-4 col-sm-4"> 
        			<aside id="text-3" class="widget widget_text">			
        				<div class="textwidget3">
        					<span>BUILT BY  <a href="http://www.marinopardo.com/urtzidiaz" target="_blank"> URTZI DIAZ </a></span>
        				</div>
        			</aside> 
				</div> <?php	
			}		
			?>
		</div>
	</div>

		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
