<?php
	$slides = get_field( 'slides' );
?>

<div class="banner-home">
	<div class="container-fluid">
		<div class="banner-home-wrap hidden-admin">
			<h1 style="display: none;">title</h1>
			<div class="slide-wrap">
				<div class="content-banner">
					<div class="container-inner">
						<div class="sub-heading">
							<?php echo esc_html( get_field( 'sub_heading' ) ); ?>
						</div>
						<h2><?php echo esc_html( get_field( 'heading' ) ); ?></h2>
						<?php
							$list_links = get_field( 'list_link' );
						if ( is_array( $list_links ) ) :
							?>
						<div class="link">
							<?php
							foreach ( $list_links as $key => $list_link ) :
								if ( $list_link['link'] ) :
									?>
							<div id="btn-submit-<?php echo esc_attr( $key ); ?>"class="btn-submit">
								<a href="<?php echo esc_attr( $list_link['link']['url'] ); ?>"><?php echo esc_html( $list_link['link']['title'] ); ?></a>
							</div>
									<?php
								endif;
							endforeach;
							?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php
				if ($slides) :
					?>
				<div class="slide-banner">
					<?php
					foreach ( $slides as $slide ) :
						?>
					<div class="slide-item">
						<div class="slide-inner">
							<img src="<?php echo esc_attr( $slide['image_slide']['url'] ); ?>" alt="<?php echo esc_attr( $slide['image_slide']['title'] ); ?>" class="image-absolute">
							<div class="background image-absolute"></div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php else : ?>
					<div class="background-default">
						<div class="slide-inner"></div>
					</div>
					<?php endif; ?>
			</div>
			<div class="dots-slide">
				<div class="container-inner">
					<div class="row dots-wrap">
						<?php
						if ($slides) :
						foreach ( $slides as $key => $slide ) :
							?>
						<div class="col-3 dots-item" data-index=<?php echo esc_attr( $key ); ?> >
							<div class="content-wrap">
								<div class="dots-image">
									<img src="<?php echo esc_attr( $slide['image_dot']['url'] ); ?>" alt="<?php echo esc_attr( $slide['image_dot']['title'] ); ?>">
								</div>
								<div class="dots-content">
									<span><?php echo esc_html( $slide['sub_title'] ); ?></span>
									<div class="dots-title title-card"><?php echo esc_html( $slide['title'] ); ?></div>
								</div>
							</div>
						</div>
						<?php endforeach; endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-slider-banner.jpg" alt="icon-next">
		</div>
	</div>
</div>
