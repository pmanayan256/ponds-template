<?php 
global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<div class="header-main-container">
    <div class="header-cta-container">
        <div class="m-w-1600 middle-center">
            <div class="template-row">
                <div class="template-col-3">
                </div>
                <div class="template-col-3">
                    <?php if( isset( $apidata->jsondata->socialmedia ) && is_array( $apidata->jsondata->socialmedia ) ): ?>
                    <?php
                        $socialMediaListsIcons = [
                            'facebook' => "social_facebook",
                            'youtube' => "social_youtube",
                            'google' => "social_googleplus",
                            'pinterest' => "social_pinterest",
                            'twitter' => "social_twitter",
                            'linkedin' => "social_linkedin",
                            'instagram' => "social_instagram"
                        ];
                    ?>
                    <div class="w-max-cont middle-center">
                        <?php foreach($apidata->jsondata->socialmedia as $socicon): ?>
                            <?php if(isset( $socicon->link )): ?>
                                <a href="<?php echo $socicon->link; ?>" target="_blank" <?php echo $socicon->attributes; ?> class="header-link">
                                    <?php if(isset( $socialMediaListsIcons[$socicon->type] )): ?>
                                        <span aria-hidden="true" class="<?php echo $socialMediaListsIcons[$socicon->type]; ?> set-social-icon p-10"></span>
                                    <?php else: ?>
                                        <img src="<?php echo $socicon->icon; ?>" 
                                        alt="<?php echo $socicon->type; ?>" 
                                        width="30" height="30"
                                        />
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>
                
                <?php if( isset( $apidata->jsondata->showDirectionButton ) && $apidata->jsondata->showDirectionButton ): ?>
                <div class="template-col-3">
                    <a 
                    target="_blank"
                    class="template-button upper-case middle-center btn" 
                    href="https://www.google.com/maps/search/<?php echo $apidata->lat; ?>,<?php echo $apidata->lng; ?>">
                        <span aria-hidden="true" class="icon_pin adjust"></span>Get Directions
                </a>
                </div>
                <?php endif; ?>

                <?php if( isset( $apidata->phone ) && !empty($apidata->phone) ): ?>
                <div class="template-col-3">
                    <a 
                    class="template-button upper-case middle-center fix-mobile btn" 
                    href="tel:+<?php echo $apidata->phone; ?>">
                    <span aria-hidden="true" class="icon_phone adjust"></span><span class="hide-m"><?php echo $apidata->phone; ?></span>
                </a>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="header-template-container template-container">		
        <div class="template-row relative">
            <div class="template-menu-logo-wrap">
                <div class="template-container">
                    <a href="<?php get_home_url(); ?>">
                        <?php if( $apidata->image ): ?>
                            <?php if( is_object($apidata->image) ): ?>
                                <img 
                                width="<?php echo $apidata->image->width; ?>" 
                                height="<?php echo $apidata->image->height; ?>" 
                                src="<?php echo $apidata->image->path; ?>" 
                                alt="<?php echo $apidata->image->alt; ?>"
                                style="
                                max-width: 180px;
                                max-height: 180px;
                                "
                                >
                            <?php else: ?>
                                <img 
                                width="auto" 
                                height="auto" 
                                src="<?php echo $apidata->image; ?>" 
                                alt="<?php echo $apidata->name; ?>"
                                style="
                                max-width: 180px;
                                max-height: 180px;
                                "
                                >
                            <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="mobile-show hamburger">
                    <span class="x-1"></span>
                    <span class="x-hide"></span>
                    <span class="x-2"></span>
                </div>
            </div>
            <div class="template-wrap right nav-links-container-mobile">
                <div class="template-menu-container">
                    <nav class="template-menu-nav">
                        <ul id="menu-template" class="child-lr-p-15 template-menu no-style nav template-row template-no-gutters no-padding">
                            <li class="menu-item"><a href="#">Home</a></li>
                            <li class="menu-item"><a href="#">About Us</a></li>
                            <li class="menu-item"><a href="#">Services</a></li>
                            <li class="menu-item"><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>