<div class="row row-image">
    <?php
        $list_images = get_field( 'list_images' );
    foreach ( $list_images as $list_image ) :
        ?>
    <div class="col-4">
        <div class="image radius">
            <img src="<?php echo esc_attr( $list_image['image']['url'] ); ?>" alt="<?php echo esc_attr( $list_image['image']['url'] ); ?>" class="image-absolute">
        </div>
    </div>
    <?php endforeach; ?>
</div>