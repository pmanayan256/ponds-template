<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<?php if( isset( $apidata->jsondata->infolinks ) && is_array( $apidata->jsondata->infolinks ) && count( $apidata->jsondata->infolinks ) ): ?>
<div class="template-section-8" style="background-image: url(<?php echo "$directoryURI/auto-generate/img/koi-bg.png"; ?>);">
    <div class="section-width middle-center">
        <div class="template-row">
            <div class="template-col-7 right-align white-box no-padding-mobile">
                <div>
                    <div class="text-center">
                        <h3><?php echo $apidata->name; ?></h3>
                        <h4>Informational Links On The Web</h4>
                    </div>
                    <div id="accordion" class="accordion">
                        <?php $infolinkIndex = 0; ?>
                        <?php foreach( $apidata->jsondata->infolinks as $infolink ): ?>
                            <div class="template-accordion-container <?php echo $infolinkIndex == 0 ? 'open' : ''; ?>">
                                <?php if( isset( $infolink->title ) && !empty( $infolink->title ) ): ?>
                                <div class="template-accordion-title">
                                    <h5><?php echo $infolink->title;  ?></h5>
                                </div>
                                <?php endif; ?>

                                <?php if( isset( $infolink->links ) && is_array( $infolink->links ) ): ?>
                                    <div class="template-accordion-description" <?php echo $infolinkIndex == 0 ? 'style="display:block;"' : ''; ?>">
                                        <?php foreach( $infolink->links as $iilink ): ?>
                                            <p>
                                                <a href="<?php echo $iilink->link; ?>" <?php echo $iilink->attributes; ?>>
                                                <?php echo $iilink->title; ?>
                                                </a>
                                            </p>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php $infolinkIndex++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>