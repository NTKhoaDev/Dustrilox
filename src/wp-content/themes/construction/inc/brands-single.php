<?php
	$gallerys = get_field( 'gallerys', 'options' );
if ( is_array( $gallerys ) ) :
	?>

<div class="brand">
	<div class="container-fluid">
		<div class="container-inner">
			<div class="brand-wrap section">
				<div class="brand-grid">
					<span><?php echo esc_html( get_field( 'title_brands', 'options' ) ); ?></span>
				<?php foreach ( $gallerys as $gallery ) : ?>
					<div class="image">
						<img src="<?php echo esc_url( $gallery['url'] ); ?>" alt="<?php echo esc_url( $gallery['title'] ); ?>">
					</div>
				<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif ?>
