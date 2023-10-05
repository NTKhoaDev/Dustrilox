<?php $id_form = get_field( 'id_form' ); ?>

<div class="form-contact">
	<div class="container-fluid">
		<div class="form-contact-wrap section">
			<div class="container-inner">
				<div class="form-wrap">
					<div class="content-wrap">
						<div class="content">
							<div class="title-wrap title-wrap-2">
								<div class="sub-title">
									<?php echo esc_html( get_field( 'sub_title' ) ); ?>
								</div>
								<h2 class="title">
									<?php echo esc_html( get_field( 'title' ) ); ?>
								</h2>
							</div>
						</div>
					</div>
					<?php if ( $id_form ) : ?>
					<div class="form-contact">
						<?php echo do_shortcode('[gravityform id="' . $id_form . '" ajax="true" title="false" description="false"]'); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
