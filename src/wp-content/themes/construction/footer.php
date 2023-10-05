<?php
	$logo_footer       = get_field( 'logo_footer', 'options' );
	$background_footer = get_field( 'background_footer', 'options' );
	$link_pages        = get_field( 'link_page', 'options' );
	$connect_title     = get_field( 'connect_title', 'options' );
	$connect_des       = get_field( 'connect_description', 'options' );
	$social_title      = get_field( 'social_title', 'options' );
	$link_facebook     = get_field( 'link_facebook', 'options' );
	$link_twitter      = get_field( 'link_twitter', 'options' );
	$link_instagram    = get_field( 'link_istagram', 'options' );
	$link_youtube      = get_field( 'link_youtube', 'options' );
	$link_linkedin     = get_field( 'link_linkedin', 'options' );
?>

<footer>
	<div class="container-fluid">
		<div class="footer-wrap bg-style" style="background-image: url('<?php echo esc_attr( $background_footer['url'] ); ?>')">
			<div class="container-inner">
				<div class="row row-footer">
					<div class="col-2 col-logo">
						<div class="logo">
							<a href="<?php echo esc_attr( site_url() ); ?>">
								<img src="<?php echo esc_attr( $logo_footer['url'] ); ?>" alt="<?php echo esc_attr( $logo_footer['title'] ); ?>">
							</a>
						</div>
					</div>
					<div class="col-5 col-menu">
						<div class="row row-menu">
							<?php if ( is_array( $link_pages) ) : foreach ( $link_pages as $link_page ) : ?>
							<div class="col-6 col-link">
								<div class="footer-heading"><?php echo esc_html( $link_page['title'] ); ?></div>
								<ul class="menu-footer">
									<?php
										$page_details = $link_page['page_details'];
									foreach ( $page_details as $page_detail ) :
										?>
									<li class="menu-item">
										<a href="<?php echo esc_attr( $page_detail['link_page']['url'] ); ?>" class="menu-link footer-des"><?php echo esc_html( $page_detail['link_page']['title'] ); ?></a>
									</li>
									<?php endforeach ?>
								</ul>
							</div>
							<?php endforeach; endif; ?>
						</div>
					</div>
					<div class="col-5 col-connect">
						<div class="footer-heading"><?php echo esc_html( $connect_title ); ?></div>
						<div class="footer-des connect-des"><?php echo esc_html( $connect_des ); ?></div>
						<div class="form-item radius">
							<?php echo do_shortcode( '[gravityform id="1" ajax="true" title="false" description="false"]' ); ?>
						</div>
						<div class="social">
							<div class="footer-heading"><?php echo esc_html( $social_title ); ?>:</div>
							<ul class="list-social">
								<li class="social-item">
									<a href="<?php echo esc_attr( $link_facebook ); ?>" class="social-link" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/facebook.svg" alt="icon-facebook">
									</a>
								</li>
								<li class="social-item">
									<a href="<?php echo esc_attr( $link_twitter ); ?>" class="social-link" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/twitter.svg" alt="icon-twitter">
									</a>
								</li>
								<li class="social-item">
									<a href="<?php echo esc_attr( $link_instagram ); ?>" class="social-link" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/instagram.svg" alt="icon-instagram">
									</a>
								</li>
								<li class="social-item">
									<a href="<?php echo esc_attr( $link_youtube ); ?>" class="social-link" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/youtube.svg" alt="icon-youtube">
									</a>
								</li>
								<li class="social-item">
									<a href="<?php echo esc_attr( $link_linkedin ); ?>" class="social-link" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/linkedin.svg" alt="icon-linkedin">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
	
	<?php wp_footer(); ?>
</body>

</html>
