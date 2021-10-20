<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<div class="template-section-9">
    <div class="section-width middle-center">
        <div class="text-center">
            <?php if( isset( $apidata->jsondata->footerContent ) && !empty($apidata->jsondata->footerContent) ): ?>
                <?php echo $apidata->jsondata->footerContent; ?>
            <?php endif; ?>
            <p>
                <?php if( isset( $apidata->jsondata->socialmedia ) && is_array( $apidata->jsondata->socialmedia ) ): ?>
                <?php
                    $socialMediaLists = [
                        'facebook' => "$directoryURI/auto-generate/img/fb-300x300.png",
                        'youtube' => "$directoryURI/auto-generate/img/utube-300x300.png",
                        'google' => "$directoryURI/auto-generate/img/google-300x300.png",
                        'pinterest' => "$directoryURI/auto-generate/img/pinterest-1-300x300.png",
                        'twitter' => "$directoryURI/auto-generate/img/twitter-1-300x300.png",
                        'linkedin' => "$directoryURI/auto-generate/img/Linkedin-1-300x300.png",
                        'instagram' => "$directoryURI/auto-generate/img/fb-300x300.png"
                    ];
                ?>
                <?php foreach( $apidata->jsondata->socialmedia as $socm ): ?>
                    <?php if(isset( $socm->link )): ?>
                        <a href="<?php echo $socm->link; ?>" <?php echo $socm->attributes; ?>>
                            <?php if(isset( $socialMediaLists[$socm->type] )): ?>
                                <img src="<?php echo $socialMediaLists[$socm->type]; ?>" 
                                alt="<?php echo $socm->type; ?>" 
                                width="30" height="30"
                                />
                            <?php else: ?>
                                <img src="<?php echo $socm->icon; ?>" 
                                alt="<?php echo $socm->type; ?>" 
                                width="30" height="30"
                                />
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </p>
        </div>
    </div>

    <?php 
    $getFacebookFrame = array_search( 'facebook', array_column($apidata->jsondata->socialmedia, 'type') );
    $fbframe = null;
    if(is_int($getFacebookFrame)) {
        $fbframe = $apidata->jsondata->socialmedia[$getFacebookFrame]->link;
    }
    ?>

    <div class="template-row template-map-section middle-center">
        <div class="<?php echo $fbframe ? 'template-col-9' : 'template-col-12'; ?>">
            <div class="template-iframe-container">
                <iframe 
                src="https://maps.google.com/maps?q=<?php echo $apidata->lat; ?>,<?php echo $apidata->lng; ?>&hl=es;z=14&amp;output=embed" 
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
            </div>
        </div>
        <?php if($fbframe): ?>
        <div class="template-col-3" style="margin-top: 0;">
            <iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo urlencode($fbframe); ?>&tabs=<?php echo urlencode('timeline, events, messages'); ?>&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="width:100%;" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <?php endif; ?>
    </div>
</div>