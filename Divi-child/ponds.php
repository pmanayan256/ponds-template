<?php

/* PONDS THEME FEATURE EXTENDED */

// auto generate template lists api
add_action( 'rest_api_init', function () {
    register_rest_route( 'autogenerate/v1', 'page-templates', array(
      'methods' => 'GET',
      'callback' => function() {
          return wp_get_theme()->get_page_templates();
      },
    ) );
} );


  use Carbon_Fields\Container;
  use Carbon_Fields\Field;
  
  add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
  function crb_attach_theme_options() {
      Container::make( 'theme_options', __( 'POND Options' ) )
          ->add_fields( array(
              Field::make( 'text', 'ponds_image_cdn', 'Enter ShortPixel AI CDN' )
              ->set_attribute( 'placeholder', 'https://cdn.shortpixel.ai/client' )
            ->set_default_value( 'https://cdn.shortpixel.ai/client' ),
          ) )
          ->add_fields( array(
            Field::make( 'text', 'portal_admin', 'Enter Auto-Generate Landing Page Admin URL' )
        ) );
  }
  
  add_action( 'after_setup_theme', 'crb_load' );
  function crb_load() {
      require_once( 'vendor/autoload.php' );
      \Carbon_Fields\Carbon_Fields::boot();
  }