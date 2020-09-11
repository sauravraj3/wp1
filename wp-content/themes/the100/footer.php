<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_100
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">	
	<?php 
	if(get_theme_mod('the100_footer_top_setting','yes')=='yes'):
		if ( is_active_sidebar( 'the100-top-footer' ) ) :
			$columns = get_theme_mod('the100_footer_top_column','3');
		?>
		<div class="top-footer columns-<?php echo esc_attr($columns);?>">
			<div class="ed-container wow fadeInUp">
				<?php dynamic_sidebar( 'the100-top-footer' ); ?>    							
			</div>
		</div>	
	<?php endif; 
	endif; ?>
	<div class="main-footer">
		<div class="ed-container">
		<center>	<div class="site-info wow zoomIn">
				<?php
				$copyright = get_theme_mod('the100_footer_main_text','');
				if($copyright && $copyright!=""){
					echo wp_kses_post($copyright)." ";
				}?>
				<?php esc_html_e( '© 2015-19 Bitumish Consultancy Services ', 'the100' );  ?></br><a  title="<?php echo esc_html_e('2014-2018','the100');?>" href="<?php echo esc_url( __( 'https://sauravraj.in/?utm_source=bitumish.in&utm_medium=website&utm_campaign=lead_generation', 'the100' ) ); ?>"><?php esc_html_e( 'Developed & Optimized by Saurav Raj', 'the100' ); ?> </a>
					<span><?php echo esc_html_e('','the100');?></span>
			</div></center><!-- .site-info -->
			<?php 
			if(get_theme_mod('the100_footer_main_menu','yes')=='yes'):
				if ( is_active_sidebar( 'the100-footer-menu' ) ) :
					?>
				<div class="footer-menu">
					<?php dynamic_sidebar( 'the100-footer-menu' ); ?>
				</div>	
			<?php endif;
			endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<div id="es-top"><i class="fa fa-angle-up"></i></div>
<?php wp_footer(); ?>

</body>
</html>
