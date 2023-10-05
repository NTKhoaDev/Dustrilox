<ol class="row-our row">
    <?php
        $list_des = get_field( 'list_des' );
    foreach ( $list_des as $list_des_item ) :
        ?>
    <li class="col-6">
        <?php echo esc_html( $list_des_item['title'] ); ?>
        <p>
            <?php echo esc_html( $list_des_item['des'] ); ?>
        </p>
    </li>
    <?php endforeach; ?>
</ol>