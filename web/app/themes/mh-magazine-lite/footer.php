<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>
<div class="footer_wrap" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/footer-skyline-bg.png')">
	<div class="footer_inner_wrap">
		
		<div class="footer_row">

			<div class="footer_about_us">
				<div class="footer_logo_wrap">
					<a href="<?php echo get_home_url();?>">
						<img class="pulse" class="footer_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-full-fin02.png">
					</a>
				</div>
				<p>Cryptology. I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					<br>

				<div id="mega_social_icons" style="display: inline-flex;">
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.facebook.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(59, 89, 152); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#3b5998" data-onleavecolor="">
						
								<img src='<?php echo get_template_directory_uri().'/images/facebook.png' ?>'>
						
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://twitter.com/?lang=en" target="" style="font-size: 20px; border-radius: 50%; background: rgb(85, 172, 238); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#55acee" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/twitter.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.youtube.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(187, 0, 0); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#bb0000" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/youtube.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.tumblr.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(44, 71, 98); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#2c4762" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/tumblr.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.instagram.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(18, 86, 136); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#125688" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/instragram.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.google.com/gmail/about/#" target="" style="font-size: 20px; border-radius: 50%; color: ; background: #f9443a; width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="#005a8c" data-onleavebg="#f9443a" data-onleavecolor="">
							<img width="131px" src='<?php echo get_template_directory_uri().'/images/gmail.png' ?>'>
						</a>
					</div>
		
				</div> <!-- mega_social_icons -->

				

				<div class="subs_wrapper">
					<input class="subscribeText" type="text" name="subscribeText" placeholder="Please Type Your Email">
					<button class="btnSubscribe">SUBSCRIBE</button>
				</div>

			</div>

			<div class="footer_about_cryptohub">
				<h5>About CryptologyHUB</h5>
				<ul class="footer_list">
					<li><?php wp_nav_menu( array( 'theme_location' => 'footernav' ) ); ?></li>
				</ul>
			</div>		

			<div class="footer_about_cryptohub">
				<h5>News</h5>
				<ul class="footer_list">
					<li><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></li>
				</ul>
			</div>


		</div><!-- footer_row -->

			

		

	</div><!-- footer_inner_wrap -->

	

	<div class="mh-copyright-wrap">
		<div class="mh-container mh-container-inner mh-clearfix">
			<p class="mh-copyright"><?php printf(esc_html__('CryptologyHub 2018 All rights reserved.'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
		</div>
	</div>

</div><!-- footer_wrap -->




		


<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>


