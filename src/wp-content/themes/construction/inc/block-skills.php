<div class="skills">
	<div class="container-fluid">
		<div class="skills-wrap section">
			<div class="container-inner">
				<div class="row row-half">
					<div class="col-6 col-half col-range">
						<div class="content-range">
							<div class="range-title title-col"><?php echo esc_html( get_field( 'title' ) ); ?></div>
							<ul>
								<?php
									$list_values = get_field( 'list_values' );
									if ( $list_values ) :
								foreach ( $list_values as $key => $list_value ) :
									?>
								<li>
									<div class="description">
									<?php echo esc_html( $list_value['title'] ); ?>
									</div>
									<div class="number-des" id="number-<?php echo esc_attr( $key ); ?>"></div>
									<input type="range" min="0" max="100" value="<?php echo esc_attr( $list_value['value'] ); ?>" class="slider" id="my-range-<?php echo esc_attr( $key ); ?>">
								</li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-6 col-image col-half">
						<div class="image radius">
							<img src="<?php echo esc_attr( get_field( 'image' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'image' )['title'] ); ?>" class="image-absolute">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
