<?php
get_header();
?>

<div class="main-content">
	<div class="scroll-top">
		<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/scroll-top.png" alt="icon-bar">
	</div>
    <?php require get_template_directory() . '/inc/block-error.php'; ?>
</div>

<?php
get_footer();