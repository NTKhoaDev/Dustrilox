<?php
	$image_advertisement = get_field( 'image_advertisement', 'options' );
	$page_news = get_field( 'page_news', 'options' );
        $page_news_link = "";
        if ($page_news) {
            $page_news_link = $page_news->post_name;
        }
?>

<div class="col-3 col-bar">
	<div class="box-tags box radius">
		<div class="box-title title-col"><?php echo esc_html( get_field( 'title_tags', 'options' ) ); ?></div>
		<ul class="list-tags">
			<?php
				$list_category    = array();
				$category_current = wp_get_post_terms( $post->ID, 'category' );
			foreach ( $category_current as $value ) {
				$list_category[] = $value->slug;
			}
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4,
					'post__not_in'   => array( $post->ID ),
					'tax_query'      => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => $list_category,
						),
					),
				);

				$getposts = new WP_Query( $args );
				if ( $getposts->have_posts() ) :
					while ( $getposts->have_posts() ) :
						$getposts->the_post();
						$item          = $getposts->post;
						$category_info = get_obj_category( $item );
						$image         = get_field( 'image', $item->ID );
						?>

				<li class="tag-item">
					<a href="<?php echo esc_attr( get_permalink() ); ?>">
						<div class="tag-image radius">
							<img src="<?php echo esc_attr( $image['url'] ); ?> " alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
						</div>
						<div class="tag-details">
							<div class="tag-title">
								<?php echo esc_html( $item->post_title ); ?>
							</div>
							<div class="time">
								<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/icon-date.png" alt="icon-date">
								<span><?php echo esc_html( get_the_date() ); ?></span>
							</div>
						</div>
					</a>
				</li>
									<?php
				endwhile;
				endif;
				wp_reset_postdata();
				?>
		</ul>
	</div>
	<div class="box-category box radius">
		<div class="box-title title-col"><?php echo esc_html( get_field( 'title_list_cate', 'options' ) ); ?></div>
		<ul class="list-category">
			<?php
				$args       = array(
					'type'       => 'post',
					'child_of'   => 0,
					'parent'     => '',
					'hide_empty' => 1,
				);
				$categories = get_categories( $args );
				if ( is_array( $categories ) ) {
					foreach ( $categories as $category ) {
                                            
						?>
                                                <?php if (is_object($category)) : ?>
				<li class="category-item radius">
					<a data-id="<?php echo esc_attr( $category->slug ); ?>"
						href="<?php echo esc_attr( $page_news_link ); ?>?category=<?php echo esc_attr( $category->slug ); ?>">
						<span class="cate"><?php echo esc_html( $category->name ); ?></span>
						<span class="count"><?php echo esc_html( $category->count ); ?></span>
					</a>
				</li>
                                <?php endif; ?>
						<?php
					}
				}
				?>
		</ul>
	</div>
	<div class="radius box-advertisement">
		<img src="<?php echo esc_attr( $image_advertisement['url'] ); ?>" alt="<?php echo esc_attr( $image_advertisement['title'] ); ?>" class="image-absolute">
		<div class="background image-absolute"></div>
		<div class="advertisement-text"><?php echo esc_html( get_field( 'title_advertisement', 'options' ) ); ?></div>
	</div>
</div>
