<?php
	$list_accs = get_field( 'list_acc' );
?>

<div class="accordion">
	<div class="container-fluid">
		<div class="acc-wrap section hidden-admin">
			<div class="arrows-wrap">
				<div class="btn-arrow btn-prev">
					<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/prev-arrow.svg" alt="icon-prev">
				</div>
				<div class="btn-arrow btn-next">
					<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow.svg" alt="icon-next">
				</div>
			</div>
			<div class="acc-row">
				<div class="list-image image-absolute">
					<?php
					foreach ( $list_accs as $list_acc ) :
						?>
					<img src="<?php echo esc_attr( $list_acc['background']['url'] ); ?>" alt="<?php echo esc_attr( $list_acc['background']['title'] ); ?>" class="image-absolute">
					<?php endforeach; ?>
				</div>
				<div class="list-card image-absolute">
					<?php
					foreach ( $list_accs as $list_acc ) :
						?>
					<div class="acc-card">
						<div class="card-image">
							<img src="<?php echo esc_attr( $list_acc['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_acc['image']['title'] ); ?>">
						</div>
						<div class="card-content">
							<div class="sub-card">
							<?php echo esc_html( $list_acc['card_sub'] ); ?>
							</div>
							<div class="title-card">
							<?php echo esc_html( $list_acc['card_title'] ); ?>
							</div>
							<div class="link-card">
								<?php if ( is_array( $list_acc['link'] ) ) : ?>
								<a href="<?php echo esc_attr( $list_acc['link']['url'] ); ?>">
									<p class="link-plus radius">
										<span>+</span>
									</p>
									<span><?php echo esc_html( $list_acc['link']['title'] ); ?></span>
								</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/acc-admin.jpg" alt="icon-next">
		</div>
	</div>
</div>
