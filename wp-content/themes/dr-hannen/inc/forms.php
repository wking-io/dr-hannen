<?php

function dh_setup_fieldsets ( $content, $field, $value, $lead_id, $form_id ) {
  
  if ( IS_ADMIN ) return $content;

  if ( 1 === $field->id ) :
    $heading = get_field( 'contact_heading', 'options' );
    $phone = get_field( 'phone_number', 'options' );
    $email = get_field( 'email_address', 'options' );
    ob_start(); ?>
        <h2 class="font-extrabold leading-tight text-2xl sm:text-3xl md:text-4xl lg:text-2xl xl:text-3xl"><?php echo $heading; ?></h2>
        <?php if ( ! empty( $phone ) ) : ?>
          <p class="flex items-center mt-8"><span class="font-bold mr-3">P:</span><span><?php echo $phone; ?></span></p>
        <?php endif; ?>
        <?php if ( ! empty( $email ) ) : ?>
          <p class="flex items-center mt-2 pb-6"><span class="font-bold mr-3">E:</span><span><?php echo $email; ?></span></p>
        <?php endif; ?>
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