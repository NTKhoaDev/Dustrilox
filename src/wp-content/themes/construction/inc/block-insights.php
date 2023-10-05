<div class="insights">
	<div class="container-fluid">
		<div class="insights-wrap section">
			<div class="container-inner">
				<div class="content-wrap content-half">
					<div class="content">
						<div class="title-wrap title-wrap-2">
							<div class="sub-title"><?php echo esc_html( get_field( 'sub_title' ) ); ?></div>
							<h2 class="title">
								<?php echo esc_html( get_field( 'title' ) ); ?>
							</h2>
						</div>
					</div>
				</div>
				<div class="row row-insights row-small">

					<?php
						$id_cat = get_field( 'choose_cate' );
						$args  = array(
							'post_status'    => 'publish',
							'post_type'      => 'post',
							'posts_per_page' => 4,
							'tax_query'      => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'term_id',
									'terms'    => $id_cat,
								),
							),
						);
						?>
					<?php $getposts = new WP_query( $args ); ?>
					<?php
					if ( $getposts->have_posts() ) :
						while ( $getposts->have_posts() ) :
							$getposts->the_post();
							$item          = $getposts->post;
							$category_info = get_obj_category( $item );
							$image         = get_field( 'image', $item->ID );
							$link          = get_field( 'link', $item->ID );
							?>
					<div class="col-3 card-news col-small">
						<a href="<?php echo esc_attr( get_permalink() ); ?>" class="card-link">
							<div class="card-inner radius">
								<div class="card-image image-absolute">
									<img src="<?php echo esc_attr( $image['url'] ); ?> " alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
								</div>
								<div class="background image-absolute"></div>
								<div class="news-heading">
									<div class="date-wrap">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/icon-date.png" alt="icon-calendar">
										<span><?php echo esc_html( get_the_date() ); ?></span>
									</div>
									<div class="cate"><?php echo esc_html( $category_info['name'] ); ?></div>
									<div class="heading title-card">
									<?php echo esc_html( $item->post_title ); ?>
									</div>
								</div>
								<div class="read-more">
									<span><?php echo esc_html( $link ); ?></span>
								</div>
							</div>
						</a>
					</div>
											<?php
					endwhile;
					endif; wp_reset_postdata()
					?>

				</div>
			</div>
		</div>
	</div>
</div>
