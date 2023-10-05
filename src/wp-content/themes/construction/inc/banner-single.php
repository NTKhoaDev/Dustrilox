<div class="banner">
	<div class="container-fluid">
		<div class="banner-wrap bg-style" style="background-image: url(<?php echo esc_attr( get_field( 'banner_image', 'options' )['url'] ); ?>);">
			<div class="container-inner">
				<div class="content-detail">
					<div class="breadcrumb">
						<?php apply_filters( 'the_content', get_breadcrumb() ); ?>
					</div>
					<h1><?php esc_html( single_post_title() ); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
