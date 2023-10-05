<?php
	$image = get_field( 'image' );
	$link  = get_field( 'link' );
	$col_images = get_field( 'col_images' );

?>

<div class="about-us">
	<div class="container-fluid">
		<div class="container-inner">
			<div class="about-wrap section row row-half">
				<?php if ( get_field( 'image_type' ) == 'oneImage' ) : ?>
				<div class="col-6 col-half col-image">
					<div class="image radius">
						<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
					</div>
				</div>
				<?php else : ?>
				<div class="col-6 col-half col-image col-image-company">
					<div class="row row-image row-small">
						<?php
						if ( $col_images ) :
						foreach ( $col_images as $key => $col_image ) :
							?>
						<div class="col-6 col-small col-small-<?php echo esc_attr( $key ); ?>">
							<?php
								$image_items = $col_image['image_items'];
								if ( $image_items ) :
							foreach ( $image_items as $image_item ) :
								?>
							<div class="image radius">
								<img src="<?php echo esc_attr( $image_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $image_item['image']['title'] ); ?>" class="image-absolute">
								<div class="content-absolute image-absolute">
									<div class="content-inner">
										<div class="number"><?php echo esc_html( $image_item['number'] ); ?><span>+</span></div>
										<p><?php echo esc_html( $image_item['description'] ); ?></p>
									</div>
								</div>
							</div>
							<?php endforeach; endif; ?>
						</div>
						<?php endforeach; endif; ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-6 col-half col-content .col-content-about">
					<div class="content">
						<div class="title-wrap">
							<span class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></span>
							<h2 class="title"><?php echo esc_html( get_field( 'title' ) ); ?></h2>
						</div>
						<div class="excerpts"><?php echo esc_html( get_field( 'excerpts' ) ); ?></div>
						<div class="people">
							<span class="name"><?php echo esc_html( get_field( 'name' ) ); ?></span>
							<span class="position">-</span>
							<span class="position"><?php echo esc_html( get_field( 'position' ) ); ?></span>
						</div>
						<div class="description">
							<?php echo esc_html( get_field( 'description' ) ); ?>
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
