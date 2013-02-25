</div><!--/ #container -->

<footer id="footer" class="primary-footer">
    <div class="container">
        <div class="row">
          <div class="col col-3">
            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="AC Pawn Logo">
            </div> 
            
            <div class="col col-2 offset-2">
              <ul>
                <li><a href="<?php echo bloginfo('url'); ?>">Homepage</a></li>
                <li><a href="<?php echo bloginfo('url'); ?>/about">About Us</a></li>
                <li><a href="<?php echo bloginfo('url'); ?>/products">Products</a></li>
                <li><a href="<?php echo bloginfo('url'); ?>/how-it-works">How It Works</a></li>
                <li><a href="<?php echo bloginfo('url'); ?>/blog">Blog</a></li>
                <li><a href="<?php echo bloginfo('url'); ?>/contact">Contact</a></li>
                <li class="nav-separator hidden-medium-up">Quick Links</li>
                <li class="hidden-medium-up"><a href="https://maps.google.com/maps?q=ac+pawn+shop&ll=38.588883,-90.233417&spn=0.009241,0.019248&fb=1&gl=us&hq=ac+pawn+shop&hnear=0x87d8b4a9faed8ef9:0xbe39eaca22bbe05b,St.+Louis,+MO&cid=0,0,14249603687703666908&t=m&z=16&iwloc=A"><i class="icon-map-marker"></i> Get Directions</a></li>
                <li class="hidden-medium-up"><a href="tel:<?php the_field('phone_number', 'option'); ?>"><i class="icon-mobile-phone"></i> Call Us</a></li>
              </ul>
            </div>
            
            <div class="col col-3 offset-2">
                <h3>Newsletter Signup</h3>
                <?php echo do_shortcode('[gravityform id="2" name="Newsletter Signup" title="false" description="false" ajax="true"]'); ?>
                <p>We promise not to give away your email address to anyone. Your privacy is our priority.</p>
            </div>
        </div>
        <div class="row">
          <div class="col col-4">
            <p class="copyright">&copy; 2013 AC Pawn.  All Rights Reserved.</p>
          </div>
        </div>
    </div>
</footer>

</div><!-- inner wrap -->
</div><!-- outer wrap -->

<!--<div class="bg-overlay"></div>-->
  <div id="overflow"></div>

    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.js"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.scrollto.min.js'></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/menu.js'></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/app.js'></script>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>