<?php $list_tabs = get_field( 'list_tab' ); ?>

<div class="tab">
	<div class="container-fluid">
		<div class="tab-wrap section hidden-admin">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php
					if ( $list_tabs ) :
					foreach ( $list_tabs as $key => $list_tab ) :
				?>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab-<?php echo esc_attr( $key ); ?>" data-bs-toggle="tab" data-bs-target="#tab-pane-<?php echo esc_attr( $key ); ?>" type="button"
						role="tab" aria-controls="tab-pane-<?php echo esc_attr( $key ); ?>" aria-selected="true"><?php echo esc_html( $list_tab['title_tab'] ); ?></button>
				</li>
				<?php endforeach; endif; ?>
			</ul>
			<div class="tab-content" id="myTabContent">
				<?php
					if ( $list_tabs ) :
					foreach ( $list_tabs as $key => $list_tab ) :
				?>
				<div class="tab-pane fade" id="tab-pane-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-<?php echo esc_attr( $key ); ?>" tabindex="<?php echo esc_attr( $key ); ?>">
					<div class="container-inner">
						<div class="button-tab">
							<p></p>
							<span><?php echo esc_html( $list_tab['text_button'] ); ?></span>
						</div>
						<div class="tab-des">
							<?php echo esc_html( $list_tab['tab_description'] ); ?>
						</div>
						<?php
							$list_items = $list_tab['list_items'];
						if ( is_array( $list_items ) ) :
							?>
						<div class="row-tab row row-small">
							<?php
							if ( $list_items ) :
							foreach ( $list_items as $list_item ) :
								if ( $list_item['image'] || $list_item['title'] || $list_item['description'] ) :
									?>
							<div class="col-4 col-item col-small">
								<div class="col-inner">
									<?php if ( $list_item['image'] ) : ?>
									<div class="item-image">
										<img src="<?php echo esc_attr( $list_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_item['image']['title'] ); ?>">
									</div>
										<?php
									endif;
									if ( $list_item['title'] || $list_item['description'] ) :
										?>
									<div class="item-content">
										<?php
										if ( $list_item['title'] ) :
											?>
										<div class="heading title-card">
											<?php echo esc_html( $list_item['title'] ); ?>
										</div>
											<?php
										endif;
										if ( $list_item['description'] ) :
											?>
										<div class="item-des">
											<?php echo esc_html( $list_item['description'] ); ?>
										</div>
										<?php endif; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<?php
							endif;
							endforeach;
							endif;
							?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; endif; ?>
			</div>
		</div>
		<div class="block-admin show-admin">
			<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/admin-tab.jpg" alt="icon-next">
		</div>
	</div>
</div>
