<?php
	$sub_title = get_field( 'sub_title' );
	$title    = get_field( 'title' );
	$list_teams = get_field( 'list_team' );
?>

<div class="team">
	<div class="container-fluid">
		<div class="team-wrap section">
			<div class="container-inner">
				<?php if ( $sub_title && $title ) : ?>
				<div class="content-wrap content-half">
					<div class="content">
						<div class="title-wrap title-wrap-2">
							<?php if ( $sub_title ) : ?>
							<div class="sub-title"><?php echo esc_html( $sub_title ); ?></div>
								<?php
							endif;
							if ( $title ) :
								?>
							<h2 class="title">
								<?php echo esc_html( $title ); ?>
							</h2>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="list-team row row-small">
					<?php
					if ( $list_teams ) :
					foreach ( $list_teams as $list_team ) :
						?>
					<div class="col-3 col-item col-small">
						<div class="col-inner radius">
							<div class="team-image">
								<img src="<?php echo esc_attr( $list_team['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_team['image']['title'] ); ?>" class="image-absolute">
							</div>
							<div class="absolute image-absolute">
								<?php if ( is_array( $list_team['link'] ) ) : ?>
								<a href="<?php echo esc_attr( $list_team['link']['url'] ); ?>">
									<div class="background image-absolute"></div>
									<div class="info">
										<div class="position"><?php echo esc_html( $list_team['position'] ); ?></div>
										<div class="name"><?php echo esc_html( $list_team['name'] ); ?></div>
									</div>
								</a>
								<?php else : ?>
									<div class="background image-absolute"></div>
									<div class="info">
										<div class="position"><?php echo esc_html( $list_team['position'] ); ?></div>
										<div class="name"><?php echo esc_html( $list_team['name'] ); ?></div>
									</div>
								<?php endif; ?>
								<div class="list-social">
								<?php if ( $list_team['link_facebook'] ) : ?>
									<div class="social-item">
										<a href="<?php echo esc_attr( $list_team['link_facebook'] ); ?>">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/facebook.svg" alt="icon-facebook">
										</a>
									</div>
									<?php
								endif;
								if ( $list_team['link_twitter'] ) :
									?>
									<div class="social-item">
										<a href="<?php echo esc_attr( $list_team['link_twitter'] ); ?>">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/twitter.svg" alt="icon-twitter">
										</a>
									</div>
									<?php
								endif;
								if ( $list_team['link_instagram'] ) :
									?>
									<div class="social-item">
										<a href="<?php echo esc_attr( $list_team['link_instagram'] ); ?>">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/instagram.svg" alt="icon-instagram">
										</a>
									</div>
								<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
