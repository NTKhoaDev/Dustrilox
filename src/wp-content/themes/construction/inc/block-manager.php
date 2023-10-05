<div class="manager">
	<div class="container-fluid">
		<div class="manager-wrap section">
			<div class="manager-grid row">
				<?php
					$leaders = get_field( 'leaders' );
					if ( $leaders ) :
					foreach ( $leaders as $leader ) :
					?>
				<div class="manager-item col-3">
					<div class="manager-image">
						<img src="<?php echo esc_attr( $leader['image']['url'] ); ?>" alt="<?php echo esc_attr( $leader['image']['title'] ); ?>" class="image-absolute">
					</div>
					<?php if ( is_array( $leader['link'] ) ): ?>
					<a href="<?php echo esc_attr( $leader['link']['url'] ); ?>">
						<div class="background image-absolute"></div>
					</a>
					<?php else : ?>
					<div class="background image-absolute"></div>
					<?php endif; ?>
					<div class="manager-info">
						<?php if ( is_array( $leader['link'] ) ): ?>
						<a href="<?php echo esc_attr( $leader['link']['url'] ); ?>">
							<div class="position"><?php echo esc_html( $leader['position'] ); ?></div>
							<div class="name"><?php echo esc_html( $leader['name'] ); ?></div>
						</a>
						<?php else : ?>
							<div class="position"><?php echo esc_html( $leader['position'] ); ?></div>
							<div class="name"><?php echo esc_html( $leader['name'] ); ?></div>
						<?php endif; ?>
						<div class="manager-social">
						<?php if ( $leader['link_facebook'] ) : ?>
							<a href="<?php echo esc_attr( $leader['link_facebook'] ); ?>" class="social-item radius" target="_blank">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/facebook.svg" alt="icon-face">
							</a>
							<?php
						endif;
						if ( $leader['link_twitter'] ) :
							?>
							<a href="<?php echo esc_attr( $leader['link_twitter'] ); ?>" class="social-item radius" target="_blank">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/twitter.svg" alt="icon-twitter">
							</a>
							<?php
						endif;
						if ( $leader['link_instagram'] ) :
							?>
							<a href="<?php echo esc_attr( $leader['link_instagram'] ); ?>" class="social-item radius" target="_blank">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/instagram.svg" alt="icon-instagram">
							</a>
						<?php endif ?>
						</div>
					</div>
				</div>
				<?php endforeach; endif; ?>
			</div>
		</div>
	</div>
</div>
