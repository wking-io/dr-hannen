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
	<footer class="p-4" role="contentinfo">
		<div class="bg-gradient-dark text-white flex flex-col items-center rounded">
			<svg class="mt-20" width="131" height="74" viewBox="0 0 131 74" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 74H5.96102C8.58471 74 10.3478 73.2864 11.6282 71.7121C12.5937 70.4948 13.0765 68.9835 13.0765 67.0945C13.0765 64.9745 12.4468 63.1904 11.2714 61.8891C10.012 60.5037 8.52174 60 5.77211 60H0V74ZM4.1979 70.4948V63.5052H5.56222C6.8006 63.5052 7.57721 63.8201 8.14393 64.5757C8.62669 65.2474 8.87856 66.1079 8.87856 67.1364C8.87856 69.3823 7.80809 70.4948 5.68816 70.4948H4.1979Z" fill="white"/>
				<path d="M19.4481 69.1094H21.2112C22.9114 69.1094 23.4571 69.6972 23.625 71.8171L23.709 72.8036C23.7719 73.5382 23.8139 73.6852 24.0028 74H28.2427C28.0328 73.6432 27.9698 73.4753 27.9069 72.8036L27.634 70.4948C27.4451 68.9205 26.8574 68.039 25.682 67.4933C27.0673 66.7166 27.7389 65.5832 27.7389 64.009C27.7389 62.6237 27.1302 61.4063 26.1018 60.7556C25.1572 60.1679 24.2127 60 21.7989 60H15.2502V74H19.4481V69.1094ZM19.4481 66.024V63.2114H21.589C22.9323 63.2114 23.541 63.6522 23.541 64.6177C23.541 65.5832 22.9323 66.024 21.589 66.024H19.4481Z" fill="white"/>
				<path d="M30.413 69.949V74H34.4639V69.949H30.413Z" fill="white"/>
				<path d="M51.4777 68.4588V74H55.6756V60H51.4777V64.7436H47.4478V60H43.2499V74H47.4478V68.4588H51.4777Z" fill="white"/>
				<path d="M66.4531 72.069L67.0618 74H71.4906L66.4531 60H62.0453L57.0708 74H61.4156L62.0453 72.069H66.4531ZM65.5086 69.0045H63.0318L64.2702 64.9955L65.5086 69.0045Z" fill="white"/>
				<path d="M85.2351 74V60H81.0372V62.2459C81.0372 63.1694 81.0372 64.1769 81.0582 65.2264C81.0582 66.045 81.0582 66.4858 81.1002 67.2624L76.8183 60H72.7253V74H76.9232V71.8801C76.9232 70.7466 76.9232 69.6972 76.9023 68.7106C76.9023 67.4513 76.9023 67.2624 76.8603 66.5697L81.1841 74H85.2351Z" fill="white"/>
				<path d="M100.485 74V60H96.2874V62.2459C96.2874 63.1694 96.2874 64.1769 96.3084 65.2264C96.3084 66.045 96.3084 66.4858 96.3503 67.2624L92.0685 60H87.9755V74H92.1734V71.8801C92.1734 70.7466 92.1734 69.6972 92.1524 68.7106C92.1524 67.4513 92.1524 67.2624 92.1105 66.5697L96.4343 74H100.485Z" fill="white"/>
				<path d="M115.022 60H103.226V74H115.358V70.2849H107.424V68.4168H114.077V65.2054H107.424V63.5052H115.022V60Z" fill="white"/>
				<path d="M130.002 74V60H125.804V62.2459C125.804 63.1694 125.804 64.1769 125.825 65.2264C125.825 66.045 125.825 66.4858 125.867 67.2624L121.585 60H117.492V74H121.69V71.8801C121.69 70.7466 121.69 69.6972 121.669 68.7106C121.669 67.4513 121.669 67.2624 121.627 66.5697L125.951 74H130.002Z" fill="white"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M49 0V32H64.6602C67.1249 32 69.3613 31.6244 71.3696 30.8732C73.3778 30.092 75.097 29.0103 76.5271 27.6282C77.9572 26.216 79.0526 24.5333 79.8133 22.5803C80.6044 20.5972 81 18.3887 81 15.9549C81 13.7615 80.6501 11.7033 79.9502 9.78028C79.2504 7.82723 78.2159 6.12958 76.8466 4.68733C75.4773 3.24507 73.7734 2.10329 71.7347 1.26197C69.696 0.420657 67.3379 0 64.6602 0H49ZM71 24V8H66.6529V13.9042H61.3471V8H57V24H61.3471V17.7352H66.6529V24H71Z" fill="white"/>
			</svg>

			<div class="mt-12">
				<?php echo get_search_form(); ?>
			</div>

			<?php wp_nav_menu( array(
				'theme_location' => 'menu-footer',
				'menu_id' => 'footer-menu',
				'menu_class' => 'w-5/6 mx-auto mt-12 flex flex-wrap items-center justify-center',
				'container' => false,
				'walker' => new Footer_Menu()
			) ); ?>

			<div class="w-5/6 mx-auto mt-16 max-w-3xl">
				<?php dh_display_ad(); ?>
			</div>

			<div class="flex flex-col md:flex-row items-center justify-between px-8 pb-8 md:py-6 w-full text-sm mt-16">
				<p>Dr. Hannen &copy; <?php echo date( 'Y' ); ?> All Rights Reserved</p>
				<ul class="flex items-center justify-end mt-4 md:mt-0">
					<li><a class="hover:underline" href="/privacy-policy">Legal & Privacy</a></li>
					<li class="ml-6"><a class="hover:underline" href="/return-policy">Return Policy</a></li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155756852-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-155756852-1');
	</script>

<?php wp_footer(); ?>

</body>
</html>
