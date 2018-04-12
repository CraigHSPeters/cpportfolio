<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package ZeroGravity
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="credits credits-left"><?php echo wp_kses_post(get_theme_mod('zerogravity_footer_text_left', __('Copyright 2015', 'zerogravity'))); ?></div>
			<div class="credits credits-center"><?php echo wp_kses_post(get_theme_mod('zerogravity_footer_text_center', __('Footer text center', 'zerogravity'))); ?></div>
			<div class="credits credits-right"><?php echo "Contact Info: (604) 413-0604              craighspeters@gmail.com" ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
	if (get_theme_mod('zerogravity_boton_ir_arriba', 1) == 1){ ?>
		<div class="ir-arriba"><i class="fa fa-chevron-up"></i></div>
	<?php }

wp_footer(); ?>

</body>
</html>