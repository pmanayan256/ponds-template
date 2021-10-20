<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<div class="template-section-5 section" style="background-image: url(<?php echo "$directoryURI/auto-generate/img/circle-background-pattern.png"; ?>);">
    <div class="section-width middle-center">
        <?php if( isset( $apidata->jsondata->quickFormContent ) && !empty($apidata->jsondata->quickFormContent) ): ?>
        <div class="text-center template-details">
            <?php echo $apidata->jsondata->quickFormContent; ?>
        </div>
        <?php endif; ?>

        <div class="template-form">
            
            <?php get_template_part( 'auto-generate/templates/forms/form-2' ); ?>

        </div>
    </div>
</div>