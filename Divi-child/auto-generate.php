<?php
/* 
Template Name: Auto-Generate
*/
$remoteURL = carbon_get_theme_option('portal_admin') . '/api/v1/customer?post_id='.get_the_ID();
$request = wp_remote_get($remoteURL); 
$apidata = json_decode( wp_remote_retrieve_body( $request ) );
$directoryURI = get_stylesheet_directory_uri();
$parent = wp_get_theme()->parent();
$themeVersion = $parent->Version;
$cssAssets = [
	[
		'id' => 'auto-generate-css',
		'href' => "$directoryURI/auto-generate/style.css?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-mobile-css',
		'href' => "$directoryURI/auto-generate/style-mobile.css?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-font-css',
		'href' => "$directoryURI/auto-generate/font.css?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-slick-css',
		'href' => "$directoryURI/auto-generate/slick/slick.css?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-slick-theme-css',
		'href' => "$directoryURI/auto-generate/slick/slick-theme.css?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-fancybox-css',
		'href' => "$directoryURI/auto-generate/fancybox.css?ver=$themeVersion"
	]
];

$jsAssets = [
	[
		'id' => 'auto-generate-slick-js',
		'href' => "$directoryURI/auto-generate/slick/slick.min.js?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-fancybox-js',
		'href' => "$directoryURI/auto-generate/fancybox.js?ver=$themeVersion"
	],
	[
		'id' => 'auto-generate-js',
		'href' => "$directoryURI/auto-generate/script.js?ver=$themeVersion"
	]
];

$galleryLayout = isset($apidata->jsondata->galleryLayout) ? $apidata->jsondata->galleryLayout : "grid";
$galleryColumn = isset($apidata->jsondata->galleryColumn) ? (int) $apidata->jsondata->galleryColumn : 3;
$galleryFancybox = isset($apidata->jsondata->galleryFancyBox) ? (boolean) $apidata->jsondata->galleryFancyBox : false;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

	<?php foreach( $cssAssets as $csselem ): ?>
    <link rel="stylesheet" id="<?php echo $csselem['id']; ?>" href="<?php echo $csselem['href']; ?>" type="text/css" media="all" />
	<?php endforeach; ?>

</head>
<body class="auto-generate-page auto-generate-id-<?php echo get_the_ID(); ?>">
<div class="template-page-container">
		
		<?php
			get_template_part( 'auto-generate/templates/sections/header' );
		?>

		<div class="template-main-content">

			<?php

				get_template_part( 'auto-generate/templates/sections/section-1' );

				get_template_part( 'auto-generate/templates/sections/section-2' );

				get_template_part( 'auto-generate/templates/sections/section-4' );

				get_template_part( 'auto-generate/templates/sections/section-5' );

				get_template_part( 'auto-generate/templates/sections/section-7' );

				get_template_part( 'auto-generate/templates/sections/section-8' );

				get_template_part( 'auto-generate/templates/sections/section-9' );

			?>

		</div>

		<?php
			get_template_part( 'auto-generate/templates/sections/footer' );
		?>

	</div>

	<?php
		get_template_part( 'auto-generate/templates/sections/terms' );
	?>
	
    <?php wp_footer(); ?>
	
	<?php foreach( $jsAssets as $jselem ): ?>
	<script type="text/javascript" src="<?php echo $jselem['href']; ?>" id="<?php echo $jselem['id']; ?>"></script>  
	<?php endforeach; ?>
	
	<script type="text/javascript">
	// dynamic scripts here
	jQuery(document).ready( function() {
		
		<?php if( isset( $apidata->jsondata->background ) && is_array( $apidata->jsondata->background ) && count( $apidata->jsondata->background ) ): ?>
		<?php $bgautoplayInterval = isset($apidata->jsondata->background) ? (int) $apidata->jsondata->backgroundInterval : 3000; ?>
		jQuery('.atf-slider-content-bg').slick({
			autoplay: true,
			autoplaySpeed: <?php echo $bgautoplayInterval; ?> || 3000,
			<?php if( isset($apidata->jsondata->backgroundEffect) && $apidata->jsondata->backgroundEffect == 'fade' ): ?>
			fade: true,
			cssEase: 'linear',
			speed: 500,
			<?php endif; ?>
		});
		<?php endif; ?>

		<?php if( isset($apidata->gallery) && is_array($apidata->gallery) && count($apidata->gallery) ): ?>
			
			<?php if( $galleryLayout == 'carousel' ): ?>
				jQuery('.slick-item-for-v3').slick({          
					centerMode: true,
					//centerPadding: '10px',
					slidesToShow: <?php echo $galleryColumn; ?> || 3,
					focusOnSelect: true, 
					responsive: [
						{
							breakpoint: 768,
							settings: {
								arrows: true,
								centerMode: true,
								//centerPadding: '10px',
								slidesToShow: 3
							}
						},
						{
							breakpoint: 480,
							settings: {
								arrows: true,
								centerMode: true,
								//centerPadding: '10px',
								slidesToShow: 1
							}
						}
					]
				});



			<?php elseif( $galleryLayout == 'carouselv2' ): ?>
				 jQuery('.slick-item-for').slick({
				    slidesToShow: 1,
				     slidesToScroll: 1,
				     arrows: false,
				     fade: true,
				      asNavFor: '.slick-item-nav',
					  adaptiveHeight: true
				  });

				 jQuery(".slick-item-nav").slick({
				     slidesToShow: <?php echo $galleryColumn; ?> || 4,
				     slidesToScroll: 1,
				     asNavFor: '.slick-item-for',
				     dots: false,
				     focusOnSelect: true, 
				     responsive: [
				      {
				        breakpoint: 1025,
				        settings: {
				          slidesToShow: <?php echo $galleryColumn; ?> || 4,
				          slidesToScroll: 1,
				          infinite: true,
				        }
				      }
				      ]
				  });

			<?php endif; ?>

		<?php endif; ?>

	});

	</script>

</body>
</html>