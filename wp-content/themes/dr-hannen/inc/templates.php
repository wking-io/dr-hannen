<?php

function dh_display_twitter() {
  ob_start(); ?>
    <svg width="25" height="20" viewBox="0 0 25 20" class="h-full w-auto" xmlns="http://www.w3.org/2000/svg">
      <path d="M24.6864 2.36897C23.7622 2.77769 22.782 3.04563 21.7783 3.16387C22.8347 2.53531 23.6262 1.54374 24.0051 0.374307C23.0095 0.962663 21.9208 1.37676 20.7859 1.59875C20.024 0.787053 19.0159 0.248951 17.9175 0.0676402C16.8191 -0.113671 15.6916 0.0719069 14.7092 0.595682C13.7269 1.11946 12.9444 1.95226 12.4828 2.96533C12.0212 3.9784 11.9062 5.11531 12.1556 6.2003C10.1437 6.10073 8.17513 5.57994 6.3772 4.67162C4.57927 3.7633 2.99204 2.48768 1.71817 0.927282C1.07048 2.03884 0.872288 3.35598 1.16418 4.60892C1.45608 5.86187 2.21597 6.9558 3.28823 7.66667C2.4819 7.6424 1.69305 7.42572 0.987456 7.0347C0.987456 7.0347 0.987456 7.07913 0.987456 7.09888C0.992099 8.26404 1.39905 9.39183 2.13947 10.2915C2.87989 11.1912 3.90833 11.8075 5.05084 12.0362C4.30509 12.2372 3.52336 12.2659 2.76488 12.1201C3.09044 13.124 3.72112 14.0012 4.56898 14.6296C5.41684 15.258 6.43964 15.6061 7.49479 15.6256C5.69939 17.0257 3.48646 17.7837 1.20963 17.7782C0.805902 17.7869 0.402008 17.772 0 17.7338C2.31685 19.2166 5.01067 20.0031 7.7614 20C17.0781 20 22.1733 12.3077 22.1733 5.63745C22.1733 5.42021 22.1733 5.20297 22.1733 4.98573C23.1597 4.26961 24.0107 3.38352 24.6864 2.36897Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_insta() {
  ob_start(); ?>
    <svg width="21" height="20" viewBox="0 0 21 20" class="h-full w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.0041 4.80176C8.98636 4.80176 7.9915 5.10344 7.14529 5.66866C6.29909 6.23388 5.63956 7.03725 5.25009 7.97718C4.86063 8.91711 4.75873 9.95138 4.95727 10.9492C5.15582 11.947 5.6459 12.8636 6.36554 13.583C7.08517 14.3024 8.00204 14.7923 9.00021 14.9907C9.99837 15.1892 11.033 15.0874 11.9732 14.698C12.9135 14.3087 13.7171 13.6494 14.2826 12.8035C14.848 11.9576 15.1498 10.963 15.1498 9.94567C15.1485 8.58182 14.6059 7.27421 13.6412 6.30982C12.6765 5.34543 11.3684 4.80306 10.0041 4.80176ZM10.0041 13.2482C9.35067 13.2482 8.71193 13.0546 8.16864 12.6917C7.62535 12.3288 7.20191 11.813 6.95186 11.2095C6.70181 10.606 6.63638 9.94201 6.76386 9.30137C6.89133 8.66074 7.20598 8.07228 7.66801 7.6104C8.13004 7.14853 8.7187 6.83399 9.35956 6.70656C10.0004 6.57913 10.6647 6.64453 11.2684 6.89449C11.872 7.14446 12.388 7.56776 12.751 8.11086C13.114 8.65397 13.3078 9.29249 13.3078 9.94567C13.3065 10.8212 12.958 11.6604 12.3387 12.2795C11.7194 12.8986 10.8799 13.2469 10.0041 13.2482Z" class="fill-current" />
      <path d="M15.3413 5.84514C15.9876 5.84514 16.5116 5.32114 16.5116 4.67476C16.5116 4.02839 15.9876 3.50439 15.3413 3.50439C14.6949 3.50439 14.1709 4.02839 14.1709 4.67476C14.1709 5.32114 14.6949 5.84514 15.3413 5.84514Z" class="fill-current" />
      <path d="M18.3887 1.63718C17.8293 1.09462 17.1662 0.670303 16.439 0.389562C15.7119 0.108821 14.9357 -0.0225908 14.1566 0.0031713H5.85045C2.35415 0.0031713 0.0035362 2.35298 0.0035362 5.84808V14.107C-0.024148 14.9014 0.110954 15.693 0.40054 16.4333C0.690126 17.1735 1.12808 17.8468 1.68749 18.4117C2.82525 19.4751 4.33802 20.0449 5.8949 19.9963H14.1122C15.682 20.0516 17.2095 19.4817 18.3591 18.4117C18.9095 17.8501 19.3396 17.1822 19.6232 16.4489C19.9068 15.7156 20.0379 14.9321 20.0085 14.1465V5.84808C20.0324 5.07376 19.9015 4.30244 19.6233 3.57936C19.3452 2.85628 18.9255 2.19598 18.3887 1.63718ZM18.1616 14.1465C18.1902 14.6884 18.1082 15.2304 17.9206 15.7397C17.733 16.2489 17.4437 16.7146 17.0702 17.1084C16.261 17.8381 15.1957 18.2179 14.1072 18.1648H5.8949C4.81493 18.2066 3.76226 17.8198 2.9665 17.0887C2.58875 16.6964 2.29427 16.2317 2.10078 15.7227C1.90729 15.2137 1.81878 14.6708 1.84057 14.1267V5.84808C1.81167 5.30739 1.8921 4.76642 2.07707 4.2575C2.26204 3.74859 2.54775 3.28217 2.91712 2.88613C3.31027 2.52339 3.7716 2.24234 4.2743 2.05929C4.77701 1.87625 5.31108 1.79485 5.84551 1.81983H14.1566C14.6929 1.79647 15.2285 1.881 15.7315 2.0684C16.2345 2.25581 16.6948 2.54227 17.085 2.91082C17.4485 3.3008 17.7309 3.75911 17.9157 4.25911C18.1005 4.75911 18.1841 5.29083 18.1616 5.8234V14.1465Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_facebook() {
  ob_start(); ?>
    <svg width="10" height="20" viewBox="0 0 10 20" class="h-full w-auto" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 6.47609H6.59435V4.40033C6.59435 3.62078 7.1503 3.43904 7.54187 3.43904C7.93255 3.43904 9.94521 3.43904 9.94521 3.43904V0.0120057L6.63533 0C2.96107 0 2.12491 2.55599 2.12491 4.19168V6.47609H0V10.0075H2.12491C2.12491 14.5394 2.12491 20 2.12491 20H6.59435C6.59435 20 6.59435 14.4856 6.59435 10.0075H9.61021L10 6.47609Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_pinterest() {
  ob_start(); ?>
    <svg width="15" height="20" viewBox="0 0 15 20" class="h-full w-auto" xmlns="http://www.w3.org/2000/svg">
      <path d="M7.74955 0C2.59784 0 0 3.91298 0 7.17673C0 9.15251 0.706055 10.9101 2.22017 11.5646C2.46854 11.673 2.69113 11.5686 2.76317 11.2773C2.81323 11.0765 2.93191 10.5678 2.98462 10.3553C3.05705 10.0673 3.02898 9.96684 2.82839 9.71495C2.39194 9.16978 2.11248 8.46352 2.11248 7.46237C2.11248 4.55938 4.16277 1.9605 7.45112 1.9605C10.3629 1.9605 11.9627 3.84548 11.9627 6.3624C11.9627 9.67517 10.5791 12.4709 8.52537 12.4709C7.39083 12.4709 6.5422 11.4774 6.8137 10.2581C7.13943 8.80259 7.77078 7.23258 7.77078 6.18122C7.77078 5.24114 7.29414 4.45693 6.30862 4.45693C5.14905 4.45693 4.21737 5.72805 4.21737 7.43023C4.21737 8.51454 4.5632 9.24812 4.5632 9.24812C4.5632 9.24812 3.3767 14.5752 3.16853 15.5081C2.75445 17.3661 3.10634 19.6432 3.1363 19.873C3.15374 20.0096 3.31907 20.0425 3.39415 19.9397C3.5007 19.7915 4.88247 17.9852 5.35153 16.1798C5.48463 15.6692 6.11409 13.0225 6.11409 13.0225C6.49101 13.7842 7.59218 14.4535 8.76313 14.4535C12.2483 14.4535 14.6133 11.0873 14.6133 6.58135C14.6137 3.17337 11.8896 0 7.74955 0Z" class="fill-current" />
    </svg>

  <?php echo ob_get_clean();
}

function dh_display_author() {
  ob_start(); ?>
    <svg width="20" height="17" viewBox="0 0 20 17" class="h-full w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 10.5948C4.66 10.5948 0 12.0115 0 14.8328V16.9517H14V14.8328C14 12.0115 9.34 10.5948 7 10.5948ZM2.34 14.53C3.18 13.8278 5.21 13.0165 7 13.0165C8.79 13.0165 10.82 13.8278 11.66 14.53H2.34ZM7 8.47586C8.93 8.47586 10.5 6.57485 10.5 4.23793C10.5 1.90101 8.93 0 7 0C5.07 0 3.5 1.90101 3.5 4.23793C3.5 6.57485 5.07 8.47586 7 8.47586ZM7 2.42167C7.83 2.42167 8.5 3.23294 8.5 4.23793C8.5 5.24293 7.83 6.05419 7 6.05419C6.17 6.05419 5.5 5.24293 5.5 4.23793C5.5 3.23294 6.17 2.42167 7 2.42167ZM14.04 10.6675C15.2 11.6846 16 13.0407 16 14.8328V16.9517H20V14.8328C20 12.3869 16.5 10.9944 14.04 10.6675ZM13 8.47586C14.93 8.47586 16.5 6.57485 16.5 4.23793C16.5 1.90101 14.93 0 13 0C12.46 0 11.96 0.157409 11.5 0.423793C12.13 1.50144 12.5 2.82125 12.5 4.23793C12.5 5.65461 12.13 6.97442 11.5 8.05207C11.96 8.31845 12.46 8.47586 13 8.47586Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_date() {
  ob_start(); ?>
    <svg width="16" height="16" viewBox="0 0 16 16" class="h-full w-auto" xmlns="http://www.w3.org/2000/svg">
      <path d="M14.2222 1.6H13.3333V0H11.5556V1.6H4.44444V0H2.66667V1.6H1.77778C0.791111 1.6 0.00888888 2.32 0.00888888 3.2L0 14.4C0 15.28 0.791111 16 1.77778 16H14.2222C15.2 16 16 15.28 16 14.4V3.2C16 2.32 15.2 1.6 14.2222 1.6ZM14.2222 14.4H1.77778V6.4H14.2222V14.4ZM14.2222 4.8H1.77778V3.2H14.2222V4.8ZM8 8H3.55556V12H8V8Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_triangles( $classes = "" ) {
  ob_start(); ?>
    <svg
      class="<?php echo $classes; ?>"
      width="769"
      height="765"
      viewBox="0 0 769 765"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <g opacity="0.3">
        <path d="M121.332 48.2091C111.418 36.4302 92.4701 39.801 87.2265 54.2766L-59.9559 460.587C-65.1995 475.062 -52.8066 489.786 -37.6486 487.089L387.818 411.398C402.976 408.701 409.53 390.607 399.616 378.828L121.332 48.2091Z" fill="url(#paint0_linear)"/>
        <path d="M451.812 411.417C436.429 412.066 427.517 429.123 435.77 442.12L590.854 686.373C599.107 699.37 618.335 698.56 625.464 684.914L759.451 428.481C766.581 414.835 756.265 398.588 740.883 399.237L451.812 411.417Z" fill="url(#paint1_linear)"/>
        <path d="M-22.216 592.049C-37.5983 592.697 -46.5106 609.754 -38.2581 622.752L-1.92724 679.971C6.32528 692.969 25.5532 692.159 32.6831 678.513L64.0715 618.44C71.2013 604.794 60.8857 588.547 45.5033 589.195L-22.216 592.049Z" fill="url(#paint2_linear)"/>
        <path d="M346.094 652.975C356.293 641.442 350.183 623.193 335.096 620.127L204.923 593.669C189.835 590.603 177.086 605.019 181.974 619.618L224.147 745.58C229.036 760.179 247.895 764.013 258.094 752.48L346.094 652.975Z" fill="url(#paint3_linear)"/>
      </g>
      <defs>
        <linearGradient
          id="paint0_linear"
          x1="187.515"
          y1="-193.807"
          x2="200.438"
          y2="591.756"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8EB5D6"/>
          <stop offset="1" stop-color="#E4E7EB"/>
        </linearGradient>
        <linearGradient
          id="paint1_linear"
          x1="333.888"
          y1="268.585"
          x2="784.21"
          y2="604.638"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8EB5D6"/>
          <stop offset="1" stop-color="#E4E7EB"/>
        </linearGradient>
        <linearGradient
          id="paint2_linear"
          x1="-88.669"
          y1="538.359"
          x2="83.4451"
          y2="666.799"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8EB5D6"/>
          <stop offset="1" stop-color="#E4E7EB"/>
        </linearGradient>
        <linearGradient
          id="paint3_linear"
          x1="460.2"
          y1="649.585"
          x2="147.733"
          y2="701.123"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8EB5D6"/>
          <stop offset="1" stop-color="#E4E7EB"/>
        </linearGradient>
      </defs>
    </svg>

  <?php echo ob_get_clean();
}

function dh_display_ad() {
  ob_start(); ?>
    <div class="w-full">
      <a class="flex flex-col sm:flex-row relative rounded overflow-hidden" href="<?php the_field( 'ad_link', 'options' ); ?>">
        <?php echo wp_get_attachment_image( get_field( 'ad_image', 'options' ), 'medium_large', false, array( 'class' => 'absolute left-0 top-0 h-20 sm:h-full w-full object-cover sm:w-auto', 'aria-hidden' => true ) ); ?>
        <div class="ad_content w-full relative z-10 flex justify-end pt-16 sm:pt-4 p-4">
          <div class="w-full md:w-8/12 lg:w-7/12 flex flex-col items-center justify-center">
            <div class="text-center md:text-left">
              <p class="font-extrabold"><?php the_field( 'ad_heading', 'options' ); ?></p>
              <p class="text-xs"><?php the_field( 'ad_subheading', 'options' ); ?></p>
            </div>
          </div>
        </div>
      </a>
    </div>
  <?php echo ob_get_clean();
}


function dh_display_arrow() {
  ob_start(); ?>
    <svg width="21" height="20" viewBox="0 0 21 20" class="text-black h-full w-auto" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2431 19.9705L12.223 17.9906L4.30339 10.071L12.223 2.15145L10.2431 0.17155L0.343589 10.071L10.2431 19.9705Z" class="fill-current" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2431 19.9705L12.223 17.9906L4.30339 10.071L12.223 2.15145L10.2431 0.17155L0.343589 10.071L10.2431 19.9705Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_play() {
  ob_start(); ?>
    <svg width="34" height="35" viewBox="0 0 34 35" class="text-white h-auto w-full" xmlns="http://www.w3.org/2000/svg">
      <path d="M32.5178 15.4765C33.9703 16.2192 33.9704 18.295 32.5178 19.0378L2.91059 34.178C1.57981 34.8585 -1.65631e-06 33.892 -1.59098e-06 32.3973L-2.67382e-07 2.11698C-2.02047e-07 0.622291 1.5798 -0.344224 2.91058 0.336294L32.5178 15.4765Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_link() {
  ob_start(); ?>
    <svg width="20" height="20" viewBox="0 0 20 20" class="text-white w-full h-auto" xmlns="http://www.w3.org/2000/svg">
      <path d="M15 5H12C11.45 5 11 5.45 11 6C11 6.55 11.45 7 12 7H15C16.65 7 18 8.35 18 10C18 11.65 16.65 13 15 13H12C11.45 13 11 13.45 11 14C11 14.55 11.45 15 12 15H15C17.76 15 20 12.76 20 10C20 7.24 17.76 5 15 5ZM6 10C6 10.55 6.45 11 7 11H13C13.55 11 14 10.55 14 10C14 9.45 13.55 9 13 9H7C6.45 9 6 9.45 6 10ZM8 13H5C3.35 13 2 11.65 2 10C2 8.35 3.35 7 5 7H8C8.55 7 9 6.55 9 6C9 5.45 8.55 5 8 5H5C2.24 5 0 7.24 0 10C0 12.76 2.24 15 5 15H8C8.55 15 9 14.55 9 14C9 13.45 8.55 13 8 13Z" class="fill-current" />
    </svg>
  <?php echo ob_get_clean();
}

function dh_display_post ( $category_name = '', $id = 0 ) {
  ob_start(); ?>
    <li class="post-card rounded shadow-md flex flex-col bg-white overflow-hidden md:mx-4 mt-8">
      <div class="aspect-5:3 w-full">
        <?php if ( ! empty( $category_name ) ) : ?>
          <p class="absolute top-0 left-0 mt-4 ml-4 bg-<?php echo dh_category_to_color( dh_get_parent_category( $category_name ) ); ?> rounded dh-shadow z-10 text-white uppercase font-bold px-2 py-1 leading-tight text-sm tracking-wide"><?php echo $category_name; ?></p>
        <?php endif; ?>
        <div class="aspect-content">
          <?php echo get_the_post_thumbnail( $id, 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
        </div>
      </div>
      <div class="p-6 flex flex-col h-full">
        <h3 class="font-bold"><?php echo get_the_title( $id ); ?></h3>
        <div class="text-sm mt-4 flex-1 text-grey-600"><?php echo get_the_excerpt( $id ); ?></div>
        <a class="uppercase tracking-wide font-bold text-sm underline hover:no-underline mt-4 inline-block" href="<?php echo get_the_permalink( $id ); ?>">Read This Article</a>
      </div>
    </li>
  <?php echo ob_get_clean();
}

function dh_display_select( $opts = array() ) {
  $defaults = array(
    'options'  => array(),
    'classes'  => '',
    'name'     => 'default-name',
    'id'       => 'default-id',
    'use_key'  => false,
    'selected' => null,
    'attrs' => array(),
  );

  $data = wp_parse_args( $opts, $defaults );

  if ( empty( $data['options'] ) ) :
    return 'No options were passed.';
  endif;

  ob_start(); ?>
    <div class="dh-select <?php echo $data['classes']; ?>">
			<select name="<?php echo $data['name']; ?>" id="<?php echo $data['id']; ?>" <?php echo dh_make_attrs( $data['attrs'] ); ?>>
        <?php foreach ( $data['options'] as $key => $value ) : ?>
          <option value="<?php echo $data['use_key'] ? esc_attr( $key ) : esc_attr( str_replace( ' ', '-', strtolower( $value ) ) ); ?>" <?php selected( $data['selected'], $data['use_key'] ? $key : $value ) ?>><?php echo esc_html( $value ); ?></option>
        <?php endforeach; ?>
      </select>
      <div class="dh-select__arrow absolute right-0 h-4 mr-3">
        <?php dh_display_arrow(); ?>
      </div>
		</div>
  <?php echo ob_get_clean();
}

?>