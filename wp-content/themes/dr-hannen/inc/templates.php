<?php

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
      <a class="flex relative rounded overflow-hidden" href="<?php the_field( 'ad_link', 'options' ); ?>">
        <?php echo wp_get_attachment_image( get_field( 'ad_image', 'options' ), 'medium', false, array( 'class' => 'absolute left-0 top-0 h-full w-auto', 'aria-hidden' => true ) ); ?>
        <div class="ad_content w-full relative z-10 flex justify-end p-4">
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
  error_log( print_r( $id, true ) );
  ob_start(); ?>
    <li>
      <div>
        <p><?php echo $category_name; ?></p>
        <?php get_the_post_thumbnail( $id, 'medium', array( 'class' => '' ) ); ?>
      </div>
      <div>
        <h3><?php get_the_title( $id ); ?></h3>
        <div><?php get_the_excerpt( $id ); ?></div>
        <a href="<?php get_the_permalink( $id ); ?>">Read This Article</a>
      </div>
    </li>
  <?php echo ob_end_clean();
}

?>