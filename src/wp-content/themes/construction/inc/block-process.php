<?php
	$two_image = get_field( 'two_image' );
	$one_image = get_field( 'one_image' );
	$list_items = get_field( 'list_items' );
?>

<div class="process">
	<div class="container-fluid">
		<div class="process-wrap section">
			<div class="container-inner">
				<div class="row row-process row-half">
					<?php if ( get_field( 'image_type' ) == 'twoImage' ) : ?>
					<div class="col-6 col-half col-image">
						<div class="row row-small">
							<div class="col-6 col-small col-image-inner">
								<div class="image">
									<img src="<?php echo esc_attr( $two_image['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $two_image['image_left']['title'] ); ?>" class="image-absolute">
								</div>
							</div>
							<div class="col-6 col-small col-image-inner col-image-right">
								<div class="image">
									<img src="<?php echo esc_attr( $two_image['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $two_image['image_right']['title'] ); ?>" class="image-absolute">
								</div>
							</div>
						</div>
					</div>
					<?php else : ?>
					<div class="col-6 col-half col-image">
						<div class="image-1 radius">
							<img src="<?php echo esc_attr( $one_image['url'] ); ?>" alt="<?php echo esc_attr( $one_image['title'] ); ?>" class="image-absolute">
						</div>
					</div>
					<?php endif; ?>
					<div class="col-6 col-half col-content">
						<div class="content">
							<div class="title-wrap">
								<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
								<h2 class="title">
									<?php echo esc_html( get_field( 'title' ) ); ?>
								</h2>
							</div>
							<ul class="list-process">
								<?php
								if ( $list_items ) :	
								foreach ( $list_items as $list_item ) :
									?>
								<li class="process-item">
									<div class="process-inner">
										<div class="item-wrap">
											<div class="item-image">
												<img src="<?php echo esc_attr( $list_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_item['image']['title'] ); ?>">
											</div>
											<div class="item-detail">
												<div class="sub-detail"><?php echo esc_html( $list_item['sub_title'] ); ?></div>
												<div class="detail title-card"><?php echo esc_html( $list_item['title'] ); ?></div>
											</div>
										</div>
										<div class="image-read">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow.svg" alt="">
										</div>
									</div>
									<?php if ( is_array( $list_item['link'] ) ) : ?>
									<div class="des-accordion">
										<a href="<?php echo esc_attr( $list_item['link']['url'] ); ?>">
											<div class="description">
												<?php echo esc_html( $list_item['description'] ); ?>
											</div>
											<span><?php echo esc_html( $list_item['link']['title'] ); ?></span>
										</a>
									</div>
									<?php else : ?>
									<div class="des-accordion">
										<div class="description">
											<?php echo esc_html( $list_item['description'] ); ?>
										</div>
									</div>
									<?php endif; ?>
								</li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
