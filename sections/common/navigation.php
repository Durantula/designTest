<div class="navbar-fix">
    <nav class="navbar navbar-toggleable-md navbar-light">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="/test">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 229.766 229.766" style="enable-background:new 0 0 229.766 229.766;" xml:space="preserve">
<g>
	<path style="fill:#ffffff;" d="M7.196,119.892c-2.19-0.436-3.867-2.208-4.177-4.421c-0.316-2.214,0.806-4.386,2.781-5.412   L218.292,0L93.769,137.041L7.196,119.892z"/>
	<path style="fill:#ffffff;" d="M136.17,226.526c-0.817,1.969-2.727,3.24-4.857,3.24h-0.292c-2.22-0.125-4.129-1.641-4.756-3.789   l-23.677-80.893L226.8,8.378L136.17,226.526z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
        </a>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   =>  'mainNavigation',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
            ?>
            <div class="navbar-social">
            <a id="linkedin-link"  target="_blank" href="<?php echo get_option('linkedin_page_url'); ?>">
                <div class="circle">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                </div> 
            </a>
            <a id="facebook-link" target="_blank"  href="<?php echo get_option('facebook_page_url'); ?>">
                <div class="circle">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                </div> 
            </a>
             <a id="instagram-link" target="_blank"  href="<?php echo get_option('instagram_page_url'); ?>">
                <div class="circle">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                </div> 
            </a>

            <button id="bookingModal" class="circle circle-booking" data-toggle="modal" data-target="#bookAcademy">Book Academy</button>
        </div>
        </div>
    </nav>
</div>

<script>
    (function($) {
        $("#bookingModal").click(function(event){
        mixpanel.track("Booking Modal Opened");
    });
    })(jQuery);
</script>

