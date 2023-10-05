<?php
	$email   = get_field( 'email' );
	$phone   = get_field( 'phone' );
	$address = get_field( 'address' );
	$socials = get_field( 'socials' );
?>

<div class="connect">
	<div class="container-fluid">
		<div class="connect-wrap section bg-style" style="background-image: url(<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/background-contact.png);">
			<div class="container-inner">
				<div class="row row-small">
					<div class="col-3 col-small">
						<div class="col-inner">
							<div class="image">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/email-contact-white.svg" alt="mail-contact" class="white">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/email-contact.svg" alt="mail-contact">
							</div>
							<h3 class="title-card"><?php echo esc_html( $email['title'] ); ?></h3>
							<div class="details">
								<?php
									$email_items = $email['email_items'];
									if ( is_array( $email_items )):
								foreach ( $email_items as $email_item ) :
									?>
								<p><?php echo esc_html( $email_item['email_item'] ); ?></p>
								<?php endforeach; endif; ?>
							</div>
						</div>
					</div>
					<div class="col-3 col-small">
						<div class="col-inner">
							<div class="image">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/telephone-contact-white.svg" alt="phone-contact" class="white">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/telephone-contact.svg" alt="phone-contact">
							</div>
							<h3 class="title-card"><?php echo esc_html( $phone['title'] ); ?></h3>
							<div class="details">
								<?php
									$phone_items = $phone['phone_items'];
									if ( is_array( $phone_items )):
								foreach ( $phone_items as $phone_item ) :
									?>
								<p><?php echo esc_html( $phone_item['phone_item'] ); ?></p>
								<?php endforeach; endif; ?>
							</div>
						</div>
					</div>
					<div class="col-3 col-small">
						<div class="col-inner">
							<div class="image">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/location-contact-white.svg" alt="address-contact" class="white">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/location-contact.svg" alt="address-contact">
							</div>
							<h3 class="title-card"><?php echo esc_html( $address['title'] ); ?></h3>
							<div class="details">
								<?php
									$address_items = $address['address_items'];
									if ( is_array( $address_items )):
								foreach ( $address_items as $address_item ) :
									?>
								<p><?php echo esc_html( $address_item['address_item'] ); ?></p>
								<?php endforeach; endif; ?>
							</div>
						</div>
					</div>
					<div class="col-3 col-small">
						<div class="col-inner">
							<div class="image">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/social-contact-white.svg" alt="connect-contact" class="white">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/social-contact.svg" alt="connect-contact">
							</div>
							<h3 class="title-card"><?php echo esc_html( $socials['title'] ); ?></h3>
							<ul class="list-social">
								<?php if ( $socials['link_facebook'] ) : ?>
								<li class="social-item radius">
									<a href="<?php echo esc_attr( $socials['link_facebook'] ); ?>" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/facebook.svg" alt="icon-face">
									</a>
								</li>
									<?php
								endif;
								if ( $socials['link_twitter'] ) :
									?>
								<li class="social-item radius">
									<a href="<?php echo esc_attr( $socials['link_twitter'] ); ?>" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/twitter.svg" alt="icon-twitter">
									</a>
								</li>
									<?php
								endif;
								if ( $socials['link_instagram'] ) :
									?>
								<li class="social-item radius">
									<a href="<?php echo esc_attr( $socials['link_instagram'] ); ?>" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/instagram.svg" alt="icon-instagram">
									</a>
								</li>
									<?php
								endif;
								if ( $socials['link_youtube'] ) :
									?>
								<li class="social-item radius">
									<a href="<?php echo esc_attr( $socials['link_youtube'] ); ?>" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/youtube.svg" alt="icon-youtube">
									</a>
								</li>
									<?php
								endif;
								if ( $socials['link_linkedin'] ) :
									?>
								<li class="social-item radius">
									<a href="<?php echo esc_attr( $socials['link_linkedin'] ); ?>" target="_blank">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/linkedin.svg" alt="icon-linkedin">
									</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
