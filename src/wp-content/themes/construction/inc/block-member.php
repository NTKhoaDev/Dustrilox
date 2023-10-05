<?php
	$link  = get_field( 'link' );
	$image = get_field( 'image' );
?>

<div class="member">
	<div class="container-fluid">
		<div class="member-wrap section">
			<div class="container-inner">
				<div class="row row-half row-member">
					<div class="col-6 col-half col-image">
						<div class="image radius">
							<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
						</div>
					</div>
					<div class="col-6 col-half col-content">
						<div class="content-member">
							<div class="position"><?php echo esc_html( get_field( 'position' ) ); ?></div>
							<div class="member-name"><?php echo esc_html( get_field( 'name' ) ); ?></div>
							<div class="description">
								<?php echo esc_html( get_field( 'description' ) ); ?>
							</div>
						</div>
						<div class="info-member">
							<div class="info-item">
								<div class="info-icon radius">
									<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/telephone.svg" alt="icon-phone">
								</div>
								<div class="info-details">
									<span><?php echo esc_html( get_field( 'phone' ) ); ?></span>
									<p><?php echo esc_html( get_field( 'phone_number' ) ); ?></p>
								</div>
							</div>
							<div class="info-item">
								<div class="info-icon radius">
									<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/email.svg" alt="icon-mail">
								</div>
								<div class="info-details">
									<span><?php echo esc_html( get_field( 'email' ) ); ?></span>
									<p><?php echo esc_html( get_field( 'email_details' ) ); ?></p>
								</div>
							</div>
							<div class="info-item">
								<div class="info-icon radius">
									<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/location.svg" alt="icon-address">
								</div>
								<div class="info-details">
									<span><?php echo esc_html( get_field( 'location' ) ); ?></span>
									<p><?php echo esc_html( get_field( 'location_details' ) ); ?></p>
								</div>
							</div>
						</div>
						<?php if ( is_array( $link ) ) : ?>
						<div class="btn-submit">
							<a href="<?php echo esc_attr( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
