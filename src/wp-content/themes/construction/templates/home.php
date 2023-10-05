<?php
/*
 * Template Name: Home
 */

get_header();
?>

<div class="main-content">
	<?php echo apply_filters( 'the_content', $post->post_content ); ?>
	<div class="scroll-top">
		<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/scroll-top.png" alt="icon-bar">
	</div>
</div>

<?php
get_footer();
