<?php $single_des = get_field( 'single_des' ); ?>

<div class="single-des">
    <?php echo apply_filters( 'the_content', $single_des ); ?>
</div>