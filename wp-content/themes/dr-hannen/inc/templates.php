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

?>