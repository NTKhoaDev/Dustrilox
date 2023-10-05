<?php $iamge = get_field( 'image' ); ?>

<div class="certificate">
	<div class="container-fluid">
		<div class="certificate-wrap section">
			<div class="container-inner">
				<div class="row row-half">
					<div class="col-6 col-image col-half">
						<div class="image radius">
							<img src="<?php echo esc_attr( $iamge['url'] ); ?>" alt="<?php echo esc_attr( $iamge['title'] ); ?>" class="image-absolute">
						</div>
					</div>
					<div class="col-6 col-content col-half">
						<div class="content-certificate">
							<div class="certificate-title title-col">
								<?php echo esc_html( get_field( 'title' ) ); ?>
							</div>
							<div class="description">
								<?php echo esc_html( get_field( 'description' ) ); ?>
							</div>
							<?php
								$list_certificates = get_field( 'list_certificates' );
							if ( is_array( $list_certificates ) ) :
								?>
							<div class="certificate-image">
								<?php
								foreach ( $list_certificates as $list_certificate ) :
									?>
								<div class="image-item">
									<img src="<?php echo esc_url( $list_certificate['url'] ); ?>" alt="<?php echo esc_url( $list_certificate['title'] ); ?>">
								</div>
								<?php endforeach ?>
							</div>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
