
<div class="col-9 col-news-single">
	<div class="title-single title-col">
		<?php echo esc_html( get_post( $post_id )->post_title ); ?>
	</div>
	<div class="single-content">
		<?php echo apply_filters( 'the_content', $post->post_content ); ?>
                <?php echo wp_link_pages(); ?>
                <div class="tag-text">
                    Tags: <?php echo get_the_term_list($post->ID, 'post_tag', '', ', '); ?>
                </div>
	</div>
    
    <?php comments_template('/comments.php'); ?>
    <?php comment_form(); ?>
</div>
