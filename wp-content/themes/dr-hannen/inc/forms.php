<?php

function dh_setup_fieldsets ( $content, $field, $value, $lead_id, $form_id ) {
  
  if ( IS_ADMIN ) return $content;

  if ( 1 === $field->id ) :
    ob_start(); ?>
        <h2 class="font-extrabold leading-tight text-2xl md:text-3xl">Do you have questions for me?<br />Send me a message.</h2>
        <p class="flex items-center mt-8"><span class="font-bold mr-3">P:</span><span>866.362.7292</span></p>
        <p class="flex items-center mt-2 pb-6"><span class="font-bold mr-3">E:</span><span>info@hannenhealth.com</span></p>
      </li>
      <li class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
      <?php echo $content; ?>
    <?php return ob_get_clean(); ?>
  <?php elseif ( 5 === $field->id ) :
    ob_start(); ?>
          <?php echo $content; ?>
      </li>
    </ul>
    <ul class="<?php echo GFCommon::get_ul_classes( GFAPI::get_form( $form_id ) ); ?>">
    <?php return ob_get_clean();
  endif;
  return $content;
}

add_filter( 'gform_field_content_1', 'dh_setup_fieldsets', 10, 5 );