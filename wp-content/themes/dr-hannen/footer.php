<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package second-mile
 */

$menu_classes = 'footer-nav list-reset flex flex-col text-center items-center justify-start ';

if ( ! is_page( 'who-we-are' ) ) {
	$menu_classes .= 'md:flex-row md:text-left md:justify-end';
} else {
	$menu_classes .= 'xl:flex-row xl:text-left xl:justify-end';
}

?>
	<footer class="pt-16 pb-4 text-center md:text-left" role="contentinfo">
		<p class="text-sm">Power For Today &copy; <?php echo date('Y'); ?></p>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
