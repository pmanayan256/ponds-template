<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion, $galleryLayout, $galleryColumn, $galleryFancybox;
?>
<div class="template-section-7">
    <div class="section-width middle-center">
        <?php if( isset( $apidata->description ) && !empty($apidata->description) ): ?>
        <div class="tempalte-text-content" style="margin-bottom: 20px;">
            <?php echo $apidata->description; ?>
        </div>
        <?php endif; ?>
    

        <?php if( isset($apidata->gallery) && is_array($apidata->gallery) && count($apidata->gallery) ): ?>
        <div class="template-image-content template-gallery">
            <?php if( $galleryLayout == 'gridv2' ): ?>
                <div class="gallery-container">
                    <?php
                        get_template_part('auto-generate/templates/gallery/responsive-gallery');
                    ?>
                </div>
            <?php elseif( $galleryLayout == 'mosaic' ): ?>
                <div class="gallery-container">                            
                    <?php
                        get_template_part( 'auto-generate/templates/gallery/gallery-description' );
                    ?>
                </div>
            <?php elseif( $galleryLayout == 'carousel' ): ?>
                <div class="gallery-container">
                    <?php
                        get_template_part('auto-generate/templates/gallery/slick-slider-v3');
                    ?>
                </div>
            <?php elseif( $galleryLayout == 'carouselv2' ): ?>
                <div class="gallery-container m-no-gutter-30">
                    <?php
                        get_template_part('auto-generate/templates/gallery/slick-slider-v1');
                    ?>
                </div>
            <?php else: ?>
                <div class="gallery-container">
                    <?php
                        get_template_part('auto-generate/templates/gallery/fancybox');
                    ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        

    </div>
</div>