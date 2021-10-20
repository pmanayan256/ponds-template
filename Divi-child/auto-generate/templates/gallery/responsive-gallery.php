<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion, $galleryLayout, $galleryColumn, $galleryFancybox;
?>
<div id="fancy-box-container">
  <div class="container no-touch template-row w-max-cont no-padding t-c-<?php echo $galleryColumn; ?>">

    <?php foreach( $apidata->gallery as $galdata ): ?>
      <?php if( isset( $galdata->path ) && is_object($galdata) ): ?>
        <?php 
          $galwidth = isset($galdata->width) ? (int) $galdata->width : 'auto';
          $galheight = isset($galdata->height) ? (int) $galdata->height : 'auto';
          $galtitle = isset($galdata->title) ? $galdata->title : '';
          $galalt = isset($galdata->alt) ? $galdata->alt : $galtitle;
        ?>

        <div class="card">
            <div class="boxInner card-image">
            <?php if( $galleryFancybox ): ?>
              <a href="<?php echo $galdata->path; ?>" data-fancybox="gallery" data-caption="<?php echo $galalt; ?>">
                <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
                <?php if( $galtitle ): ?>
                <div class="titleBox"><?php echo $galtitle; ?></div>
                <?php endif; ?>
              </a>
            <?php else: ?>
              <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
              <?php if( $galtitle ): ?>
              <div class="titleBox"><?php echo $galtitle; ?></div>
              <?php endif; ?>
            <?php endif; ?>
            </div>
        </div>

      <?php endif; ?>
    <?php endforeach; ?>
    
  </div>
</div>