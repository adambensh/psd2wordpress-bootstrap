<!--</div>--><!-- /.row -->

<!--</div>--><!-- /.container -->
<div class="testimonial">
<div class="container text-center">
        <p class="lead">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum velit vitae nulla molestie eu commodo nulla dapib us. Donec id sollicitudin urna. Integer at dui ac leo fermentum varius eleifend ut.”</p>
        <h4>Helen Hunt</h4>
        <p>Carousel here... </p>
        <hr>
        <h3>Say Hi & Get in Touch</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse.</p>
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/twitter-icon.png"></div>
                    </div>
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/facebook-icon.png"></div>
                    </div>
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/googlePlus-icon.png"></div>
                    </div>
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/linkedin-icon.png"></div>
                    </div>
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/pintrest-icon.png"></div>
                    </div>
                    <div class="col-2">
                        <div class="social-container"><img src="wp-content/themes/notifyTheme/img/youtube-icon.png"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</div>
<footer class="blog-footer text-center">
    <p><a href="#">Back to top</a></p>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-center " id="navbar-content">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-menu', // Defined when registering the menu
                'menu_id'        => 'footer-menu-1',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'nav navbar-nav',
                //'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                'walker'         => new bs4navwalker(), // This controls the display of the Bootstrap Navbar
                'fallback_cb'    => 'bs4navwalker::fallback', // For menu fallback 
                ) );
                ?>
        </div>
    </nav>
</footer>

<script type="text/javascript">

    var isOpen = false;

     jQuery(".card").click(function() {
        if (!isOpen) {
            jQuery(".featured-icon", this).animate({height: '70px', top: '13px',left: '13px'}, 200);
            jQuery(".card-text", this).slideToggle("slow");
            isOpen = true;
        } else {
            jQuery(".featured-icon", this).animate({height: '48px', top: '25px', left: '25px'}, 200);
            jQuery(".card-text", this).slideToggle("slow");
            //isOpen = false;
        }
        
    }); 

     jQuery(".card").hover(function() {
        jQuery(".featured-icon", this).animate({height: '70px', top: '13px',left: '13px'}, 200);
        if (!isOpen) {
            jQuery(".card-text", this).slideToggle("slow");
            isOpen = true;
        } else {
            //isOpen = true;
        }
    }, function() {
        jQuery(".featured-icon", this).animate({height: '48px', top: '25px', left: '25px'}, 200);
        if (isOpen) {
            jQuery(".card-text", this).slideToggle("slow");
            isOpen = false;
        } else {
            isOpen = false;
        }
    });
    
    
    jQuery(".social-container").hover(function() {
        jQuery(this).css("filter", "contrast(110%)");
    }, function() {
        jQuery(this).css("filter", "contrast(80%)");
    });
    
   
</script>
</body>
</html>