    <!-- Footer Widget Area Starts -->
	<div id="footer-widgets">
		<div class="container col-full">
            <div class="block">
                <?php dynamic_sidebar('footer-1'); ?>		           
            </div>
            <div class="block">
                <?php dynamic_sidebar('footer-2'); ?>		           
            </div>
            <div class="block last">
                <?php dynamic_sidebar('footer-3'); ?>		           
            </div>
   			<div class="fix"></div>
		</div>    
    </div>
    <!-- Footer Widget Area Ends -->

	<div id="footer">
		<div class="col-full">
            <div id="copyright" class="col-left">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?>. <?php _e('All Rights Reserved.', 'woothemes') ?> <?php wp_loginout(); ?></p>
            </div>
            
            <div id="credit" class="col-right">
                <p>Disseny: <a href="http://www.sergiofores.net">Sergio For&eacute;s</a> </p>
            </div>
		</div>
	</div>
	<!-- footer Ends -->
	
</div><!-- /#container -->

<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>
<?php if ( get_option('woo_twitter') ) { ?>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter'); ?>.json?callback=twitterCallback2&amp;count=1"></script>
<?php } ?>
</body>
</html>