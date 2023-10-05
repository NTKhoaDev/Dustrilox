<?php
	$image = get_field( 'image' );
	$list_items = get_field( 'list_items' );
?>

<div class="funfact">
	<div class="container-fluid">
		<div class="funfact-wrap section bg-style hidden-admin" style="background-image: url(<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/background-funfact.jpg);">
			<div class="container-inner">
				<div class="row row-funfact row-half">
					<div class="col-6 col-half col-image">
						<div class="image radius">
							<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
						</div>
					</div>
					<div class="col-6 col-half col-content">
						<div class="content">
							<div class="title-wrap">
								<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
								<h2 class="title"><?php echo esc_html( get_field( 'title' ) ); ?></h2>
							</div>
							<div class="content-funfact">
								<?php
								if ( $list_items ) :
								foreach ( $list_items as $list_item ) :
									?>
								<div class="content-item">
									<div class="circle">
										<div class="chart" data-percent="<?php echo esc_attr( $list_item['number_circle'] ); ?>"><span><?php echo esc_html( $list_item['number_circle'] ); ?></span></div>
									</div>
									<div class="content-text">
										<div class="heading">
										<?php echo esc_html( $list_item['title'] ); ?>
										</div>
										<div class="description">
										<?php echo esc_html( $list_item['description'] ); ?>
										</div>
									</div>
								</div>
								<?php endforeach; endif; ?>
							</div>
						</div>
						<div class="content-note">
							<?php echo esc_html( get_field( 'content_bottom' ) ); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-number.jpg" alt="icon-next">
		</div>
	</div>
</div>
