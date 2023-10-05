<?php
	$current_page = ( isset( $_GET['paging'] ) ) ? $_GET['paging'] : 1;
	$current_page = max( 1, $current_page );
	$current_category = ( isset( $_GET['category'] ) ) ? $_GET['category'] : "";
?>

<div class="study">
	<div class="container-fluid">
		<div class="study-wrap section hidden-admin">
			<div class="container-inner">
				<ul class="nav-tabs list-category">
                    <li class="nav-item category-item">
                        <a class="nav-link <?php if ($current_category == "") : ?>active<?php endif; ?>" href="<?php echo get_permalink($post); ?>">
                            <?php echo __( 'All', 'construction' ); ?>
                        </a>
                    </li>
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
            
                    <li class="nav-item category-item">
                        <a class="nav-link <?php if ($category->slug == $current_category) : ?>active<?php endif; ?>" data-id="<?php echo esc_attr( $category->slug ); ?>" href="?category=<?php echo $category->slug; ?>">
                            <span class="cate"><?php echo esc_html( $category->name ); ?></span>
                        </a>
                    </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
				<div class="tab-contents" id="myTabContent">
					<div class="tab-pane-content">
						<div class="row row-small" id="list-post">
							<?php
								$args = array(
									'post_status'    => 'publish',
									'post_type'      => 'post',
									'posts_per_page' => 12,
									'oderby'         => 'rand',
									'paged'          => $current_page,
								);
								
								
								if (isset($_GET['category']) && $_GET['category'] !="") {
									$args['tax_query'] =  array(
										array(
										'taxonomy' => 'category',
										'field' => 'slug',
										'terms' => $_GET['category'],
										)
									);
										

								}
									
								?>
								<?php
									$getposts = new WP_query( $args );
								?>
								<?php
								if ( $getposts->have_posts() ) :
								while ( $getposts->have_posts() ) :
									$getposts->the_post();
									$item          = $getposts->post;
									$category_info = get_obj_category( $item );
									$image         = get_field( 'image', $item->ID );
								?>
							<div class="col-3 col-small">
								<a href="<?php echo esc_attr( get_permalink() ); ?>" class="col-inner radius">
									<div class="image radius">
										<img src="<?php echo esc_attr( $image['url'] ); ?> " alt="<?php echo esc_attr( $image['title'] ); ?>" class="image-absolute">
									</div>
									<div class="background image-absolute"></div>
									<div class="btn-readmore radius">
										<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/next-arrow-white.svg" alt="">
									</div>
									<div class="study-detail">
										<div class="sub-cate"><?php echo esc_html( $category_info['name'] ); ?></div>
										<div class="study-title title-card">
										<?php echo esc_html( $item->post_title ); ?>
										</div>
									</div>
								</a>
							</div>
													<?php
							endwhile;
							endif; wp_reset_postdata()
							?>

						</div>

						<div class="pagination-wrap">
							<div class="blog-pagination">
								<?php
									$big = 999999999;

									echo paginate_links(
										array(
											'base'      => add_query_arg( 'paging', '%#%' ),
											'format'    => '?paging=%#%',
											'show_all'  => false,
											'type'      => 'list',
											'end_size'  => 1,
											'mid_size'  => 2,
											'prev_text' => __( '<', 'dustrilox' ),
											'next_text' => __( '>', 'dustrilox' ),
											'current'   => $current_page,
											'total'     => $getposts->max_num_pages,
										)
									);
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-study.jpg" alt="icon-next">
		</div>
	</div>
</div>

