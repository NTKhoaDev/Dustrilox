<?php
	$background = get_field( 'background' );
	$list_items = get_field( 'list_items' );
?>

<div class="history">
	<div class="container-fluid">
		<div class="history-wrap section">
			<div class="image-absolute" style="overflow: hidden;">
				<img class="image-absolute isNotScale" src="<?php echo esc_attr( $background['url'] ); ?>" alt="<?php echo esc_attr( $background['title'] ); ?>">
			</div>
			<div class="container-inner">
				<div class="content-wrap content-half">
					<div class="content">
						<div class="title-wrap title-wrap-2">
							<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
							<h2 class="title"><?php echo esc_html( get_field( 'title' ) ); ?></h2>
						</div>
					</div>
				</div>
				<div class="row list-history row-small">
					<?php
					if ( $list_items ) :
					foreach ( $list_items as $list_item ) :
						?>
					<div class="col-3 col-item col-small">
						<div class="col-inner radius">
							<div class="history-image">
								<img src="<?php echo esc_attr( $list_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_item['image']['title'] ); ?>" class="image-absolute">
							<?php if ( $list_item['year'] ) : ?>
								<span><?php echo esc_html( $list_item['year'] ); ?></span>
							<?php endif; ?>
							</div>
							<div class="content-item">
								<div class="heading">
								<?php echo esc_html( $list_item['title'] ); ?>
								</div>
								<div class="history-des">
								<?php echo esc_html( $list_item['description'] ); ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
