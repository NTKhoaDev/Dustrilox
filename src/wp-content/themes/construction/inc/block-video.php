<div class="video">
    <div class="container-fluid">
        <div class="video-wrap">
            <div class="background image-absolute"></div>
            <video loop muted autoplay  preload="auto" >
                <source src="<?php echo esc_attr( get_field( 'link_video' )['url'] ); ?>" alt="video" type="video/mp4">
            </video> 
            <div class="caption">
                <h2><?php echo esc_html( get_field( 'title' ) ); ?></h2>
                <p><?php echo esc_html( get_field( 'des' ) ); ?></p>
            </div>
            <div class="image-scroll">
                <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/scroll-bottom.gif" alt="icon-scroll">
            </div>
        </div>
    </div>
</div>