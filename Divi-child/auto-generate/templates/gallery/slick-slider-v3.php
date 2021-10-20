<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion, $galleryLayout, $galleryColumn, $galleryFancybox;
?>
<div id="fancy-box-container" class="slick-container slick-carousel-module" >
   <div class="slider slider-nav slick-item-for-v3 s-c-1-nav main">
        <?php foreach( $apidata->gallery as $galdata ): ?>
            <?php if( isset( $galdata->path ) && is_object($galdata) ): ?>
                <?php 
                    $galwidth = isset($galdata->width) ? (int) $galdata->width : 'auto';
                    $galheight = isset($galdata->height) ? (int) $galdata->height : 'auto';
                    $galtitle = isset($galdata->title) ? $galdata->title : '';
                    $galalt = isset($galdata->alt) ? $galdata->alt : $galtitle;
                ?>
                <div class="slick-item card-image slide">
                    <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>