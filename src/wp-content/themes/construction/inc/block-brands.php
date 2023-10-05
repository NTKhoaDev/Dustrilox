<?php
	$gallery_brands = get_field( 'gallery_brands' );
if ( is_array( $gallery_brands ) ) :
	?>

<div class="brand">
	<div class="container-fluid">
		<div class="container-inner">
			<div class="brand-wrap section <?php if( is_admin() ): ?>show-inadmin<?php endif; ?>">
				<div class="brand-grid">
					<span><?php echo esc_html( get_field( 'title' ) ); ?></span>
					<div class="brands-slide">
						<?php foreach ( $gallery_brands as $gallery_brand ) : ?>
							<div class="image">
								<img src="<?php echo esc_url( $gallery_brand['url'] ); ?>" alt="<?php echo esc_url( $gallery_brand['title'] ); ?>">
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif ?>
