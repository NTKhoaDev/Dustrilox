<?php
	get_header();
?>

<div class="style-gutenberg main-content">
	<?php require get_template_directory() . '/inc/banner-single.php'; ?>
	<div class="news-single">
		<div class="container-fluid">
			<div class="news-single-wrap section">
				<div class="container-inner">
					<div class="row row-single">
						<?php require get_template_directory() . '/inc/col-news-single.php'; ?>
						<?php require get_template_directory() . '/inc/col-bar.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
