<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header-content">
            <!-- Логотип -->
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="http://futello.com/wp-content/uploads/2025/08/Group-1000003458.png" 
                     alt="<?php bloginfo('name'); ?>" />
            </a>

            <!-- Основное меню (десктоп) -->
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu',
                    'container' => false,
                    'fallback_cb' => 'futello_fallback_menu'
                ));
                ?>
                
                <!-- Кнопка подписки -->
                <div class="header-subscribe">
                    <a href="#subscribe" class="btn btn-primary">Subscribe</a>
                </div>
            </nav>

            <!-- Кнопка мобильного меню -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                ☰
            </button>
        </div>

        <!-- Мобильное меню -->
        <nav class="mobile-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'container' => false,
                'fallback_cb' => 'futello_fallback_menu'
            ));
            ?>
            
            <div class="header-subscribe">
                <a href="#subscribe" class="btn btn-primary btn-large">Subscribe</a>
            </div>
        </nav>
    </div>
</header>

<main class="main-content">
