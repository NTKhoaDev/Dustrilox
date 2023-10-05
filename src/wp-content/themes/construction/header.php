<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/favicons/site.webmanifest">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
	<div class="overflow"></div>
	<header>
		<?php $header_logo = get_field( 'logo_header', 'options' ); ?>
		<?php $phone_text = get_field( 'phone_text', 'options' ); ?>
		<?php $phone_details = get_field( 'phone_details', 'options' ); ?>
		<?php $email_text = get_field( 'email_text', 'options' ); ?>
		<?php $email_details = get_field( 'email_details', 'options' ); ?>
		<div class="container-fluid">
			<div class="header-wrap">
				<div class="container-inner">
					<div class="header-mobile">
						<div class="logo">
							<a href="<?php echo esc_attr( site_url() ); ?>">
								<img src="<?php echo esc_attr( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['title'] ); ?>">
							</a>
						</div>
						<div class="toggle">
							<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/toggle.png" alt="icon-bar">
						</div>
					</div>
					<div class="header-inner">
						<div class="close">
							<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/icon-close.png" alt="icon-close">
						</div>
						<div class="header-left">
							<div class="logo">
								<a href="<?php echo esc_attr( site_url() ); ?>">
									<img src="<?php echo esc_attr( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['title'] ); ?>">
								</a>
							</div>
							<nav class="menu">

								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'menu_class' => 'menu-list',
										)
									);
								?>
								
							</nav>
						</div>
						<div class="header-right">
							<div class="header-info">
								<div class="info-text"><?php echo esc_html( $phone_text ); ?></div>
								<div class="info-detail"><?php echo esc_html( $phone_details ); ?></div>
							</div>
							<div class="header-info info-mail">
								<div class="info-text"><?php echo esc_html( $email_text ); ?></div>
								<div class="info-detail"><?php echo esc_html( $email_details ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
