<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion, $galleryLayout, $galleryColumn, $galleryFancybox;
    $galleryChunked = array_chunk($apidata->gallery, 6);
?>
<div id="hover-gallery-description">
<section class="gallery">
  <div class="template-container w-max-cont">
    <div class="grid template-row">
      <?php 
      $gchunkindex = 0;
      foreach($galleryChunked as $gchunk): ?>
        <?php $galindex = 0; foreach( $gchunk as $galdata ): ?>

          <?php 
            $galwidth = isset($galdata->width) ? (int) $galdata->width : 'auto';
            $galheight = isset($galdata->height) ? (int) $galdata->height : 'auto';
            $galtitle = isset($galdata->title) ? $galdata->title : '';
            $galalt = isset($galdata->alt) ? $galdata->alt : $galtitle;
          ?>

          <?php if( ($galindex == 0) || ($galindex == 1)): ?>
          <div class="template-col-6 card">
            <figure class="img-container move-mouse-add card-image">
              <?php if( $galleryFancybox ): ?>
                <a href="<?php echo $galdata->path; ?>" data-fancybox="mosaic-gallery" data-caption="<?php echo $galalt; ?>">
                  <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
                </a>
              <?php else: ?>
                <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
              <?php endif; ?>
            </figure>
          </div>


          <?php elseif( ($galindex == 2) || ($galindex == 3) || ($galindex == 4)): ?>
          <div class="template-col-4 card">
            <figure class="img-container move-mouse-add card-image">
              <?php if( $galleryFancybox ): ?>
                <a href="<?php echo $galdata->path; ?>" data-fancybox="mosaic-gallery" data-caption="<?php echo $galalt; ?>">
                  <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
                </a>
              <?php else: ?>
                <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
              <?php endif; ?>
            </figure>
          </div>


          <?php elseif( $galindex == 5 ): ?>
          <div class="template-col-12 card">
            <figure class="img-container move-mouse-add card-image">
              <?php if( $galleryFancybox ): ?>
                <a href="<?php echo $galdata->path; ?>" data-fancybox="mosaic-gallery" data-caption="<?php echo $galalt; ?>">
                  <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
                </a>
              <?php else: ?>
                <img src="<?php echo $galdata->path; ?>" width="<?php echo $galwidth; ?>" height="<?php echo $galheight; ?>" alt="<?php echo $galalt; ?>">
              <?php endif; ?>
            </figure>
          </div>
          <?php endif; ?>
        <?php $galindex++; endforeach; ?>
      <?php $gchunkindex++; endforeach; ?>

  </div>
</section>
</div>