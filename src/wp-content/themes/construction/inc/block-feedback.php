<?php
	$background = get_field( 'background' );
	$slides = get_field( 'slides' );
?>

<div class="feedback">
	<div class="container-fluid">
		<div class="feedback-wrap section hidden-admin">
			<div class="image-absolute" style="overflow: hidden;">
				<img class="image-absolute isNotScale" src="<?php echo esc_attr( $background['url'] ); ?>" alt="<?php echo esc_attr( $background['title'] ); ?>">
			</div>
			<div class="container-right container-feedback">
				<div class="content-wrap">
					<div class="content">
						<div class="title-wrap title-wrap-2">
							<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
							<h2 class="title">
								<?php echo esc_html( get_field( 'title' ) ); ?>
							</h2>
						</div>
					</div>
				</div>
				<div class="slide-people">
					<?php
					if ( $slides ) :
					foreach ( $slides as $slide ) :
						?>
					<div class="card-people radius">
						<div class="people-des">
						<?php echo esc_html( $slide['description'] ); ?>
						</div>
						<div class="people-detail">
							<div class="avatar">
								<img src="<?php echo esc_attr( $slide['avatar']['url'] ); ?>" alt="<?php echo esc_attr( $slide['avatar']['title'] ); ?>">
							</div>
							<div class="people-info">
								<div class="name"><?php echo esc_html( $slide['name'] ); ?></div>
								<div class="position">
									<span><?php echo esc_html( $slide['position'] ); ?>,</span>
									<span class="company"><?php echo esc_html( $slide['company'] ); ?></span>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-feedback.jpg" alt="icon-next">
		</div>
	</div>
</div>
