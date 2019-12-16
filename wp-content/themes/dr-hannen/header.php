<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package second-mile
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Language" content="en">
		<meta name="google" content="notranslate">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

<body <?php body_class( 'font-sans text-black' ) ?>>
	<a class="skip-link screen-reader-text visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', THEME_NAME ); ?></a>

	<header class="header flex justify-between items-end mt-12 w-11/12 mx-auto" role="banner" data-menu-open="false" id="masthead">
		<h1 class="flex-1">
			<a href="<?php echo home_url(); ?>">
				<span class="visually-hidden"><?php echo bloginfo( 'name' ); ?></span>
				<svg width="172" height="21" viewBox="0 0 172 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M41 18H46.961C49.5847 18 51.3478 17.2864 52.6282 15.7121C53.5937 14.4948 54.0765 12.9835 54.0765 11.0945C54.0765 8.97451 53.4468 7.1904 52.2714 5.88906C51.012 4.50375 49.5217 4 46.7721 4H41V18ZM45.1979 14.4948V7.50525H46.5622C47.8006 7.50525 48.5772 7.82009 49.1439 8.57571C49.6267 9.24738 49.8786 10.1079 49.8786 11.1364C49.8786 13.3823 48.8081 14.4948 46.6882 14.4948H45.1979Z" fill="#303475"/>
					<path d="M60.4481 13.1094H62.2112C63.9114 13.1094 64.4571 13.6972 64.625 15.8171L64.709 16.8036C64.7719 17.5382 64.8139 17.6852 65.0028 18H69.2427C69.0328 17.6432 68.9698 17.4753 68.9069 16.8036L68.634 14.4948C68.4451 12.9205 67.8574 12.039 66.682 11.4933C68.0673 10.7166 68.7389 9.58321 68.7389 8.009C68.7389 6.62369 68.1302 5.4063 67.1018 4.75562C66.1572 4.16792 65.2127 4 62.7989 4H56.2502V18H60.4481V13.1094ZM60.4481 10.024V7.2114H62.589C63.9323 7.2114 64.541 7.65217 64.541 8.61769C64.541 9.58321 63.9323 10.024 62.589 10.024H60.4481Z" fill="#303475"/>
					<path d="M71.413 13.949V18H75.4639V13.949H71.413Z" fill="#303475"/>
					<path d="M92.4777 12.4588V18H96.6756V4H92.4777V8.74363H88.4478V4H84.2499V18H88.4478V12.4588H92.4777Z" fill="#303475"/>
					<path d="M107.453 16.069L108.062 18H112.491L107.453 4H103.045L98.0708 18H102.416L103.045 16.069H107.453ZM106.509 13.0045H104.032L105.27 8.9955L106.509 13.0045Z" fill="#303475"/>
					<path d="M126.235 18V4H122.037V6.24588C122.037 7.16942 122.037 8.17691 122.058 9.22639C122.058 10.045 122.058 10.4858 122.1 11.2624L117.818 4H113.725V18H117.923V15.8801C117.923 14.7466 117.923 13.6972 117.902 12.7106C117.902 11.4513 117.902 11.2624 117.86 10.5697L122.184 18H126.235Z" fill="#303475"/>
					<path d="M141.485 18V4H137.287V6.24588C137.287 7.16942 137.287 8.17691 137.308 9.22639C137.308 10.045 137.308 10.4858 137.35 11.2624L133.068 4H128.976V18H133.173V15.8801C133.173 14.7466 133.173 13.6972 133.152 12.7106C133.152 11.4513 133.152 11.2624 133.11 10.5697L137.434 18H141.485Z" fill="#303475"/>
					<path d="M156.022 4H144.226V18H156.358V14.2849H148.424V12.4168H155.077V9.2054H148.424V7.50525H156.022V4Z" fill="#303475"/>
					<path d="M171.002 18V4H166.804V6.24588C166.804 7.16942 166.804 8.17691 166.825 9.22639C166.825 10.045 166.825 10.4858 166.867 11.2624L162.585 4H158.492V18H162.69V15.8801C162.69 14.7466 162.69 13.6972 162.669 12.7106C162.669 11.4513 162.669 11.2624 162.627 10.5697L166.951 18H171.002Z" fill="#303475"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V21H10.277C11.8945 21 13.3621 20.7535 14.68 20.2606C15.9979 19.7479 17.1261 19.038 18.0647 18.131C19.0032 17.2042 19.722 16.1 20.2212 14.8183C20.7404 13.5169 21 12.0676 21 10.4704C21 9.03099 20.7704 7.68028 20.3111 6.41831C19.8518 5.13662 19.1729 4.02254 18.2743 3.07606C17.3758 2.12958 16.2575 1.38028 14.9197 0.828169C13.5818 0.276056 12.0342 0 10.277 0H0ZM14.4375 15.75V5.25H11.5847V9.12465H8.10281V5.25H5.25V15.75H8.10281V11.6387H11.5847V15.75H14.4375Z" fill="url(#dr_gradient)"/>
					<defs>
					<linearGradient id="dr_gradient" x1="0" y1="0" x2="21" y2="14.9625" gradientUnits="userSpaceOnUse">
					<stop stop-color="#9CCFD3"/>
					<stop offset="1" stop-color="#326FB0"/>
					</linearGradient>
					</defs>
					</svg>
			</a>
		</h1>

		<?php echo get_search_form(); ?>

		<nav class="" role="navigation">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-main',
				'menu_id' => 'main-menu',
				'menu_class' => 'main-menu hidden md:flex list-reset justify-end items-center p-0 m-0 z-40',
				'container' => false,
				'walker' => new Main_Menu()
			) ); ?>

			<button class="uppercase text-sm font-bold flex items-center bg-gradient-dark text-white py-1 px-2 rounded ml-4" aria-expanded="false" aria-controls="masthead">
				<span>Menu</span>
				<span class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
