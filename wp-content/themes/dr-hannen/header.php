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

$body_defaults = 'font-sans text-black overflow-x-hidden';
$maybe_pattern = is_page_template( 'templates/clinics.php' ) || is_page_template( 'templates/media.php' ) || is_home() || is_category() ? ' bg-pattern' : '';

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

<body <?php body_class( $body_defaults . $maybe_pattern ); ?>>
	<a class="skip-link screen-reader-text visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', THEME_NAME ); ?></a>

	<header class="header flex justify-between items-center mt-8 lg:mt-12 w-5/6 md:w-11/12 mx-auto" role="banner" data-menu-open="false" id="masthead">
		<h1 class="relative z-50">
			<a href="<?php echo home_url(); ?>">
				<span class="visually-hidden"><?php echo bloginfo( 'name' ); ?></span>
				<svg viewBox="0 0 172 21" class="menu-logo text-brand-indigo h-4" xmlns="http://www.w3.org/2000/svg">
					<path d="M41 18H46.961C49.5847 18 51.3478 17.2864 52.6282 15.7121C53.5937 14.4948 54.0765 12.9835 54.0765 11.0945C54.0765 8.97451 53.4468 7.1904 52.2714 5.88906C51.012 4.50375 49.5217 4 46.7721 4H41V18ZM45.1979 14.4948V7.50525H46.5622C47.8006 7.50525 48.5772 7.82009 49.1439 8.57571C49.6267 9.24738 49.8786 10.1079 49.8786 11.1364C49.8786 13.3823 48.8081 14.4948 46.6882 14.4948H45.1979Z" class="fill-current" />
					<path d="M60.4481 13.1094H62.2112C63.9114 13.1094 64.4571 13.6972 64.625 15.8171L64.709 16.8036C64.7719 17.5382 64.8139 17.6852 65.0028 18H69.2427C69.0328 17.6432 68.9698 17.4753 68.9069 16.8036L68.634 14.4948C68.4451 12.9205 67.8574 12.039 66.682 11.4933C68.0673 10.7166 68.7389 9.58321 68.7389 8.009C68.7389 6.62369 68.1302 5.4063 67.1018 4.75562C66.1572 4.16792 65.2127 4 62.7989 4H56.2502V18H60.4481V13.1094ZM60.4481 10.024V7.2114H62.589C63.9323 7.2114 64.541 7.65217 64.541 8.61769C64.541 9.58321 63.9323 10.024 62.589 10.024H60.4481Z" class="fill-current" />
					<path d="M71.413 13.949V18H75.4639V13.949H71.413Z" class="fill-current" />
					<path d="M92.4777 12.4588V18H96.6756V4H92.4777V8.74363H88.4478V4H84.2499V18H88.4478V12.4588H92.4777Z" class="fill-current" />
					<path d="M107.453 16.069L108.062 18H112.491L107.453 4H103.045L98.0708 18H102.416L103.045 16.069H107.453ZM106.509 13.0045H104.032L105.27 8.9955L106.509 13.0045Z" class="fill-current" />
					<path d="M126.235 18V4H122.037V6.24588C122.037 7.16942 122.037 8.17691 122.058 9.22639C122.058 10.045 122.058 10.4858 122.1 11.2624L117.818 4H113.725V18H117.923V15.8801C117.923 14.7466 117.923 13.6972 117.902 12.7106C117.902 11.4513 117.902 11.2624 117.86 10.5697L122.184 18H126.235Z" class="fill-current" />
					<path d="M141.485 18V4H137.287V6.24588C137.287 7.16942 137.287 8.17691 137.308 9.22639C137.308 10.045 137.308 10.4858 137.35 11.2624L133.068 4H128.976V18H133.173V15.8801C133.173 14.7466 133.173 13.6972 133.152 12.7106C133.152 11.4513 133.152 11.2624 133.11 10.5697L137.434 18H141.485Z" class="fill-current" />
					<path d="M156.022 4H144.226V18H156.358V14.2849H148.424V12.4168H155.077V9.2054H148.424V7.50525H156.022V4Z" class="fill-current" />
					<path d="M171.002 18V4H166.804V6.24588C166.804 7.16942 166.804 8.17691 166.825 9.22639C166.825 10.045 166.825 10.4858 166.867 11.2624L162.585 4H158.492V18H162.69V15.8801C162.69 14.7466 162.69 13.6972 162.669 12.7106C162.669 11.4513 162.669 11.2624 162.627 10.5697L166.951 18H171.002Z" class="fill-current" />
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

		<div class="flex-1 flex justify-end">
			<?php echo get_search_form(); ?>

			<nav class="" role="navigation">
				<div class="main-menu py-8 md:pt-32 md:pb-24 z-40">
					<div class="h-full w-5/6 md:w-11/12 mx-auto flex flex-col justify-end">
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-main',
							'menu_id' => 'main-menu',
							'menu_class' => 'main-menu__list',
							'container' => false,
							'walker' => new Main_Menu()
						) ); ?>
						<div class="h-1 w-32 bg-brand-cyan mt-16"></div>
						<div class="text-white flex flex-col md:flex-row md:items-center justify-between mt-16">
							<ul class="flex items-center">
								<?php if ( ! empty( $twitter = get_field( 'twitter', 'options' ) ) ) : ?>
									<li>
										<a href="<?php echo $twitter; ?>">
											<svg width="25" height="20" viewBox="0 0 25 20" xmlns="http://www.w3.org/2000/svg">
												<path d="M24.6864 2.36897C23.7622 2.77769 22.782 3.04563 21.7783 3.16387C22.8347 2.53531 23.6262 1.54374 24.0051 0.374307C23.0095 0.962663 21.9208 1.37676 20.7859 1.59875C20.024 0.787053 19.0159 0.248951 17.9175 0.0676402C16.8191 -0.113671 15.6916 0.0719069 14.7092 0.595682C13.7269 1.11946 12.9444 1.95226 12.4828 2.96533C12.0212 3.9784 11.9062 5.11531 12.1556 6.2003C10.1437 6.10073 8.17513 5.57994 6.3772 4.67162C4.57927 3.7633 2.99204 2.48768 1.71817 0.927282C1.07048 2.03884 0.872288 3.35598 1.16418 4.60892C1.45608 5.86187 2.21597 6.9558 3.28823 7.66667C2.4819 7.6424 1.69305 7.42572 0.987456 7.0347C0.987456 7.0347 0.987456 7.07913 0.987456 7.09888C0.992099 8.26404 1.39905 9.39183 2.13947 10.2915C2.87989 11.1912 3.90833 11.8075 5.05084 12.0362C4.30509 12.2372 3.52336 12.2659 2.76488 12.1201C3.09044 13.124 3.72112 14.0012 4.56898 14.6296C5.41684 15.258 6.43964 15.6061 7.49479 15.6256C5.69939 17.0257 3.48646 17.7837 1.20963 17.7782C0.805902 17.7869 0.402008 17.772 0 17.7338C2.31685 19.2166 5.01067 20.0031 7.7614 20C17.0781 20 22.1733 12.3077 22.1733 5.63745C22.1733 5.42021 22.1733 5.20297 22.1733 4.98573C23.1597 4.26961 24.0107 3.38352 24.6864 2.36897Z" class="fill-current" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( ! empty( $insta = get_field( 'insta', 'options' ) ) ) : ?>
									<li class="ml-8">
										<a href="<?php echo $insta; ?>">
											<svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.0041 4.80176C8.98636 4.80176 7.9915 5.10344 7.14529 5.66866C6.29909 6.23388 5.63956 7.03725 5.25009 7.97718C4.86063 8.91711 4.75873 9.95138 4.95727 10.9492C5.15582 11.947 5.6459 12.8636 6.36554 13.583C7.08517 14.3024 8.00204 14.7923 9.00021 14.9907C9.99837 15.1892 11.033 15.0874 11.9732 14.698C12.9135 14.3087 13.7171 13.6494 14.2826 12.8035C14.848 11.9576 15.1498 10.963 15.1498 9.94567C15.1485 8.58182 14.6059 7.27421 13.6412 6.30982C12.6765 5.34543 11.3684 4.80306 10.0041 4.80176ZM10.0041 13.2482C9.35067 13.2482 8.71193 13.0546 8.16864 12.6917C7.62535 12.3288 7.20191 11.813 6.95186 11.2095C6.70181 10.606 6.63638 9.94201 6.76386 9.30137C6.89133 8.66074 7.20598 8.07228 7.66801 7.6104C8.13004 7.14853 8.7187 6.83399 9.35956 6.70656C10.0004 6.57913 10.6647 6.64453 11.2684 6.89449C11.872 7.14446 12.388 7.56776 12.751 8.11086C13.114 8.65397 13.3078 9.29249 13.3078 9.94567C13.3065 10.8212 12.958 11.6604 12.3387 12.2795C11.7194 12.8986 10.8799 13.2469 10.0041 13.2482Z" class="fill-current" />
												<path d="M15.3413 5.84514C15.9876 5.84514 16.5116 5.32114 16.5116 4.67476C16.5116 4.02839 15.9876 3.50439 15.3413 3.50439C14.6949 3.50439 14.1709 4.02839 14.1709 4.67476C14.1709 5.32114 14.6949 5.84514 15.3413 5.84514Z" class="fill-current" />
												<path d="M18.3887 1.63718C17.8293 1.09462 17.1662 0.670303 16.439 0.389562C15.7119 0.108821 14.9357 -0.0225908 14.1566 0.0031713H5.85045C2.35415 0.0031713 0.0035362 2.35298 0.0035362 5.84808V14.107C-0.024148 14.9014 0.110954 15.693 0.40054 16.4333C0.690126 17.1735 1.12808 17.8468 1.68749 18.4117C2.82525 19.4751 4.33802 20.0449 5.8949 19.9963H14.1122C15.682 20.0516 17.2095 19.4817 18.3591 18.4117C18.9095 17.8501 19.3396 17.1822 19.6232 16.4489C19.9068 15.7156 20.0379 14.9321 20.0085 14.1465V5.84808C20.0324 5.07376 19.9015 4.30244 19.6233 3.57936C19.3452 2.85628 18.9255 2.19598 18.3887 1.63718ZM18.1616 14.1465C18.1902 14.6884 18.1082 15.2304 17.9206 15.7397C17.733 16.2489 17.4437 16.7146 17.0702 17.1084C16.261 17.8381 15.1957 18.2179 14.1072 18.1648H5.8949C4.81493 18.2066 3.76226 17.8198 2.9665 17.0887C2.58875 16.6964 2.29427 16.2317 2.10078 15.7227C1.90729 15.2137 1.81878 14.6708 1.84057 14.1267V5.84808C1.81167 5.30739 1.8921 4.76642 2.07707 4.2575C2.26204 3.74859 2.54775 3.28217 2.91712 2.88613C3.31027 2.52339 3.7716 2.24234 4.2743 2.05929C4.77701 1.87625 5.31108 1.79485 5.84551 1.81983H14.1566C14.6929 1.79647 15.2285 1.881 15.7315 2.0684C16.2345 2.25581 16.6948 2.54227 17.085 2.91082C17.4485 3.3008 17.7309 3.75911 17.9157 4.25911C18.1005 4.75911 18.1841 5.29083 18.1616 5.8234V14.1465Z" class="fill-current" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( ! empty( $facebook = get_field( 'facebook', 'options' ) ) ) : ?>
									<li class="ml-8">
										<a href="<?php echo $facebook; ?>">
											<svg width="10" height="20" viewBox="0 0 10 20" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 6.47609H6.59435V4.40033C6.59435 3.62078 7.1503 3.43904 7.54187 3.43904C7.93255 3.43904 9.94521 3.43904 9.94521 3.43904V0.0120057L6.63533 0C2.96107 0 2.12491 2.55599 2.12491 4.19168V6.47609H0V10.0075H2.12491C2.12491 14.5394 2.12491 20 2.12491 20H6.59435C6.59435 20 6.59435 14.4856 6.59435 10.0075H9.61021L10 6.47609Z" class="fill-current" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( ! empty( $pinterest = get_field( 'pinterest', 'options' ) ) ) : ?>
									<li class="ml-8">
										<a href="<?php echo $pinterest; ?>">
											<svg width="15" height="20" viewBox="0 0 15 20" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.74955 0C2.59784 0 0 3.91298 0 7.17673C0 9.15251 0.706055 10.9101 2.22017 11.5646C2.46854 11.673 2.69113 11.5686 2.76317 11.2773C2.81323 11.0765 2.93191 10.5678 2.98462 10.3553C3.05705 10.0673 3.02898 9.96684 2.82839 9.71495C2.39194 9.16978 2.11248 8.46352 2.11248 7.46237C2.11248 4.55938 4.16277 1.9605 7.45112 1.9605C10.3629 1.9605 11.9627 3.84548 11.9627 6.3624C11.9627 9.67517 10.5791 12.4709 8.52537 12.4709C7.39083 12.4709 6.5422 11.4774 6.8137 10.2581C7.13943 8.80259 7.77078 7.23258 7.77078 6.18122C7.77078 5.24114 7.29414 4.45693 6.30862 4.45693C5.14905 4.45693 4.21737 5.72805 4.21737 7.43023C4.21737 8.51454 4.5632 9.24812 4.5632 9.24812C4.5632 9.24812 3.3767 14.5752 3.16853 15.5081C2.75445 17.3661 3.10634 19.6432 3.1363 19.873C3.15374 20.0096 3.31907 20.0425 3.39415 19.9397C3.5007 19.7915 4.88247 17.9852 5.35153 16.1798C5.48463 15.6692 6.11409 13.0225 6.11409 13.0225C6.49101 13.7842 7.59218 14.4535 8.76313 14.4535C12.2483 14.4535 14.6133 11.0873 14.6133 6.58135C14.6137 3.17337 11.8896 0 7.74955 0Z" class="fill-current" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
							</ul>
							<ul class="flex items-center text-sm  mt-8 md:mt-0">
								<li><a href="/privacy-policy">Legal & Privacy</a></li>
								<li class="ml-6"><a href="/return-policy">Return Policy</a></li>
							</ul>
						</div>
					</div>
				</div>

				<button class="menu-button uppercase text-sm font-bold flex items-center bg-gradient-dark text-white py-1 px-2 rounded ml-4 relative z-50" aria-expanded="false" aria-controls="masthead">
					<span>Menu</span>
					<span class="menu-toggle">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
