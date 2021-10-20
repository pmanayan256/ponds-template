<?php
/* 
Template Name: dev-template-1
*/
$directoryURI = get_stylesheet_directory_uri();
$parent = wp_get_theme()->parent();
$themeVersion = $parent->Version;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" media="all"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" type="text/css" media="all"/>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="all" />

    <link 
	rel="stylesheet" 
	id="auto-generate-css"  
	href="<?php echo "$directoryURI/dev-template-1/style.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />

	<link 
	rel="stylesheet" 
	id="auto-generate-mobile-css"  
	href="<?php echo "$directoryURI/dev-template-1/style-mobile.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />


	<link 
	rel="stylesheet" 
	id="auto-generate-font-css"  
	href="<?php echo "$directoryURI/dev-template-1/font.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />

</head>
<body class="dev-template-page">
	<div id="dev-template-1" class="template-page-container">
        <div class="template-main-content">
        <?php
            get_template_part( 'dev-template-1/templates/sections/section-1' );
        ?>
        <?php
            get_template_part( 'dev-template-1/templates/sections/section-2' );
        ?>
        <?php
            get_template_part( 'dev-template-1/templates/sections/section-3' );
        ?>
        <?php
            get_template_part( 'dev-template-1/templates/sections/section-4' );
        ?>
        </div>
    </div>
    
    <?php wp_footer(); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script 
	type="text/javascript"
	src="<?php echo "$directoryURI/dev-template-1/script.js?ver=$themeVersion"; ?>"
	id="auto-generate-js"></script>
    
</body>
</html>