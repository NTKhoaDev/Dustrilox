<?php
	$link_video = get_field( 'link_video' );
	$links = get_field( 'links' );
?>

<div class="features">
	<div class="container-fluid">
		<div class="features-wrap section">
			<div class="container-inner">
				<div class="row row-features row-half">
					<div class="col-6 col-content col-half">
						<div class="content">
							<div class="title-wrap">
								<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
								<h2 class="title">
									<?php echo esc_html( get_field( 'title' ) ); ?>
								</h2>
							</div>
							<ul class="list-features">
								<?php
									if ( $links ) :
									foreach ( $links as $link ) :
									if ( is_array( $link['link'] ) ) :
										?>
								<li class="features-item radius">
									<a href="<?php echo esc_attr( $link['link']['url'] ); ?>">
										<div class="features-detail">
											<?php echo esc_html( $link['description'] ); ?>
										</div>
										<div class="image image-grey">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow.svg" alt="icon-next">
										</div>
										<div class="image image-white">
											<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow-white.svg" alt="icon-next">
										</div>
									</a>
								</li>
								<?php else : ?>
								<li class="features-item radius">
									<div class="features-detail">
										<?php echo esc_html( $link['description'] ); ?>
									</div>
									<div class="image image-grey">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow.svg" alt="icon-next">
									</div>
									<div class="image image-white">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow-white.svg" alt="icon-next">
									</div>
								</li>
									<?php
								endif;
								endforeach;
								endif;
								?>
							</ul>
						</div>
					</div>
					<div class="col-6 col-video col-half">
						<div class="video-wrap bg-style" style="background-image: url(<?php echo esc_attr( get_field( 'image' )['url'] ); ?>)">
							<div id="<?php echo esc_attr( $link_video ); ?>" class="box-video image-absolute">
								<a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
									<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/btn-play.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
