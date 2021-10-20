<?php
/* 
Template Name: dev-template
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
	href="<?php echo "$directoryURI/dev-template/style.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />

	<link 
	rel="stylesheet" 
	id="auto-generate-mobile-css"  
	href="<?php echo "$directoryURI/dev-template/style-mobile.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />


	<link 
	rel="stylesheet" 
	id="auto-generate-font-css"  
	href="<?php echo "$directoryURI/dev-template/font.css?ver=$themeVersion"; ?>" 
	type="text/css" media="all" />

</head>
<body class="dev-template-page">
	<div class="template-page-container">
        <?php
            get_template_part( 'dev-template/templates/sections/header' );
        ?>
        <div class="template-main-content">
            <?php
                get_template_part( 'dev-template/templates/sections/section-1' );
            ?>
            <!--?php
                get_template_part( 'dev-template/templates/sections/section-2' );
            ?-->
            <?php
                get_template_part( 'dev-template/templates/sections/section-3' );
            ?>
            <?php
                get_template_part( 'dev-template/templates/sections/section-4' );
            ?>
            <?php
                get_template_part( 'dev-template/templates/sections/section-5' );
            ?>
            <!--?php
                get_template_part( 'dev-template/templates/sections/section-6' );
            ?-->
            <?php
                get_template_part( 'dev-template/templates/sections/section-7' );
            ?>
            <?php
                get_template_part( 'dev-template/templates/sections/section-8' );
            ?>
            <?php
                get_template_part( 'dev-template/templates/sections/section-9' );
            ?>
            </div>
            <?php
                get_template_part( 'dev-template/templates/sections/footer' );
            ?>
        </div>
    </div>
    <div class="modal-popup">
        <div class="modal-close-bg"></div>
        <div class="terms-services-modal">
            <div>
                <h3>Terms & Conditions</h3>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec nibh quis magna malesuada fringilla in et leo. Quisque eget rhoncus diam. Sed elementum vel lacus non fringilla. Sed pretium ipsum quis odio tincidunt, vel vehicula justo molestie. Vestibulum nisl orci, efficitur ut dictum vel, viverra eu tellus. Integer vitae risus eget magna cursus dignissim eget non quam. Integer finibus lorem sit amet lacus malesuada, sed fringilla lorem posuere.</p>

                <p>Curabitur id eros orci. Fusce magna lacus, tincidunt sit amet vulputate sit amet, tristique et est. Morbi sodales nisi et enim facilisis sollicitudin. Pellentesque fermentum elit tristique placerat tempor. Maecenas at maximus augue. Donec sagittis consequat sem, sit amet vulputate massa porttitor sit amet. Cras sed iaculis nunc. Cras a convallis neque. Donec efficitur turpis urna, bibendum feugiat dolor vestibulum eu. Nulla iaculis pulvinar elementum.</p>

                <p>Praesent in massa tellus. Phasellus pharetra id neque in placerat. Ut dictum varius risus, vel tempor est dictum nec. Nullam blandit aliquam ex quis iaculis. Nam quis erat et ex euismod vestibulum eleifend id libero. Mauris sit amet risus condimentum, aliquam diam vel, interdum felis. Vestibulum eros magna, commodo ut nunc vitae, pharetra feugiat ante. Praesent posuere maximus nunc, vitae rhoncus est. Morbi porttitor nunc id mi posuere elementum. Nulla condimentum mauris nec lacinia efficitur. Duis nulla magna, pretium a finibus eu, fringilla id felis.</p>

                <p>Quisque laoreet suscipit mollis. Curabitur ullamcorper pharetra efficitur. Maecenas sodales tortor a urna porta, et dictum nunc posuere. Quisque dapibus pulvinar lorem, vitae hendrerit massa pharetra consequat. Integer mollis lacinia sagittis. Suspendisse eleifend rutrum tristique. Morbi quis libero fringilla, ornare mi ut, tempus leo. In a tortor ut nisl malesuada porta. Aliquam ac ligula scelerisque, sodales justo scelerisque, eleifend velit. Duis consequat malesuada euismod.</p>

                <p>Aenean quis mi ligula. In ultricies vel diam sed iaculis. Sed ut tempus enim. Praesent nec venenatis sapien. Suspendisse quis feugiat nibh, quis blandit enim. Praesent in purus vel ipsum imperdiet elementum at et diam. Vestibulum venenatis metus nec ligula placerat, cursus elementum magna placerat. Vestibulum congue enim bibendum tellus sollicitudin, nec facilisis tortor blandit. Praesent quis augue et urna consectetur faucibus in finibus augue. Morbi iaculis id nunc at sodales. Sed lacinia egestas consectetur. Curabitur eget nunc id metus porta pellentesque. Nulla aliquet quam sed gravida egestas.</p>
            </div>
            <div class="">
                <p class="template-button align-right-modal modal-button">Agree</p>
            </div>
        </div>
    </div>
    
    <?php wp_footer(); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script 
	type="text/javascript"
	src="<?php echo "$directoryURI/dev-template/script.js?ver=$themeVersion"; ?>"
	id="auto-generate-js"></script>
    
</body>
</html>