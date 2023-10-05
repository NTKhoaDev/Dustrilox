<?php $link = get_field( 'link_error', 'options' ); ?>

<div class="error-404" style="background-image: url(<?php echo esc_attr( get_field( 'background_error', 'options')['url'] ); ?>)">
    <div class="background image-absolute"></div>
    <div class="container-fluid">
        <div class="container-inner">
            <div class="content-error">
                <div class="title-error">
                    <h1><?php echo esc_html( get_field( 'title_error', 'options' ) ); ?></h1>
                    <h2><?php echo esc_html( get_field( 'sub_title_error', 'options' ) ); ?></h2>
                </div>
                <?php if ( is_array( $link ) ): ?>
                <div class="btn-submit">
                    <a href="<?php echo esc_attr( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>