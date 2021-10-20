<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<div class="template-section-4 section">
    <div class="section-width middle-center">
        <div class="template-row">
            <div class="template-left-container template-col-6 text-center">
                <?php if( $apidata->image ): ?>
                    <?php if( is_object($apidata->image) ): ?>
                        <img 
                        width="<?php echo $apidata->image->width; ?>" 
                        height="<?php echo $apidata->image->height; ?>" 
                        src="<?php echo $apidata->image->path; ?>" 
                        alt="<?php echo $apidata->image->alt; ?>"
                        style="
                        max-width: 300px;
                        max-height: 300px;
                        "
                        >
                    <?php else: ?>
                        <img 
                        width="auto" 
                        height="auto" 
                        src="<?php echo $apidata->image; ?>" 
                        alt="<?php echo $apidata->name; ?>"
                        style="
                        max-width: 300px;
                        max-height: 300px;
                        "
                        >
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="template-right-container">
                <div class="template-content">
                    <?php if( isset( $apidata->jsondata->addressContent ) && !empty($apidata->jsondata->addressContent) ): ?>
                    <div class="template-details">
                        <?php echo $apidata->jsondata->addressContent; ?>
                    </div>
                    <?php endif; ?>
                    <?php if( isset( $apidata->reviews ) && !empty($apidata->reviews) ): ?>
                    <div class="template-button-container">
                        <a class="template-button upper-case" href="<?php echo $apidata->reviews; ?>" target="_blank">
                            <i class="fa fa-comments icon" aria-hidden="true"></i>Reviews
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>