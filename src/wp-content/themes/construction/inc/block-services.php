<?php
	$link = get_field( 'link' );
	$card_contents = get_field( 'card_contents' );
?>

<div class="services">
	<div class="container-fluid">
		<div class="services-wrap section hidden-admin">
			<div class="container-right container-services">
				<div class="row row-services">
					<div class="col-5 col-content">
						<div class="content">
							<div class="title-wrap">
								<span class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></span>
								<h2 class="title">
									<?php echo esc_html( get_field( 'title' ) ); ?>
								</h2>
							</div>
							<div class="description">
								<?php echo esc_html( get_field( 'description' ) ); ?>
							</div>
							<?php if ( is_array( $link ) ) : ?>
							<div class="btn-submit">
								<a href="<?php echo esc_attr( get_field( 'link' )['url'] ); ?>"><?php echo esc_html( get_field( 'link' )['title'] ); ?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-7 col-item">
						<div class="row row-small">
							<?php
							if ( $card_contents ) :
							foreach ( $card_contents as $card_content ) :
								?>
							<div class="col-4 col-small">
								<?php if ( is_array( $card_content['card_link'] ) ) : ?>
								<a href="<?php echo esc_attr( $card_content['card_link']['url'] ); ?>" class="card-link">
									<div class="card-item radius">
										<div class="heading title-card"><?php echo esc_html( $card_content['card_title'] ); ?></div>
										<ul class="list-des">
											<?php
												$card_items = $card_content['card_items'];
											if ( $card_items ) :
											foreach ( $card_items as $card_item ) :
												?>
											<li class="des-item">
												<?php echo esc_html( $card_item['item'] ); ?>
											</li>
											<?php endforeach; endif; ?>
										</ul>
										<div class="read-more">
											<span><?php echo esc_html( $card_content['card_link']['title'] ); ?></span>
										</div>
									</div>
								</a>
								<?php else : ?>
								<div class="card-item radius">
									<div class="heading title-card"><?php echo esc_html( $card_content['card_title'] ); ?></div>
									<ul class="list-des">
										<?php
											$card_items = $card_content['card_items'];
										if ( $card_items ) :
										foreach ( $card_items as $card_item ) :
											?>
										<li class="des-item">
											<?php echo esc_html( $card_item['item'] ); ?>
										</li>
										<?php endforeach; endif; ?>
									</ul>
								</div>
								<?php endif; ?>
							</div>
							<?php endforeach; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-service.jpg" alt="icon-next">
		</div>
	</div>
</div>
