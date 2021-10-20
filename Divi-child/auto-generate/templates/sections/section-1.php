<?php 
global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<div class="template-section-1">
    <div class="atf-slider-content">
        <?php if( isset( $apidata->jsondata->background ) && is_array( $apidata->jsondata->background ) && count( $apidata->jsondata->background ) ): ?>
        <div class="atf-slider-content-bg">
            <?php foreach( $apidata->jsondata->background as $bgObj ): ?>
                <?php if( isset($bgObj->path) && is_object($bgObj) ): ?>
                <img 
                    src="<?php echo $bgObj->path; ?>" 
                    width="<?php echo isset($bgObj->width) ? $bgObj->width : 'auto'; ?>" 
                    height="<?php echo isset($bgObj->height) ? $bgObj->height : 'auto'; ?>">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div>
            <div class="p-150-0 section slider-section slider-with-bg p-m-50-0" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.18) 0%,rgba(0,0,0,0.15) 100%);">
                <div class="template-row section-width middle-center">
                    <div class="template-left-container color-white template-col-6 text-center">
                        <div class="section-title">
                            <!--h1>P.O.N.D.S. Sites Navigation</h1-->
                            <h1><?php echo $apidata->name; ?></h1>
                        </div>
                    </div>
                    <div class="template-right-container template-col-6">
                        <!--div class="template-inner-text text-center">
                            <h3>Get a Free Quote</h3>
                        </div-->
                        <div class="bg-set template-form">                      
                            <?php get_template_part( 'auto-generate/templates/forms/form-1' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>