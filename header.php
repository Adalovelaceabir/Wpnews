<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Loading Animation Overlay -->
<div id="preloader">
    <div class="loader"></div>
</div>

<!-- Site Header with Menu Bar -->
<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            <?php endif; ?>
        </div>

        <!-- Navigation Menu Bar -->
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰ Menu</button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </div>
</header>

<main id="content" class="site-content">
