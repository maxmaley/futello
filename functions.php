<?php
/**
 * Futello Theme Functions
 * 
 * @package Futello
 * @version 1.0.0
 */

// Предотвращаем прямой доступ
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Настройка темы
 */
function futello_theme_setup() {
    // Поддержка заголовка документа
    add_theme_support('title-tag');
    
    // Поддержка миниатюр записей
    add_theme_support('post-thumbnails');
    
    // Поддержка HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Регистрация меню
    register_nav_menus(array(
        'primary' => 'Основное меню',
        'footer'  => 'Меню в подвале'
    ));
}
add_action('after_setup_theme', 'futello_theme_setup');

/**
 * Подключение стилей и скриптов
 */
function futello_enqueue_assets() {
    // Google Fonts - Poppins с разными весами
    wp_enqueue_style(
        'futello-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Основные стили темы
    wp_enqueue_style(
        'futello-style',
        get_stylesheet_uri(),
        array('futello-fonts'),
        wp_get_theme()->get('Version')
    );
    
    // JavaScript для интерактивности
    wp_enqueue_script(
        'futello-script',
        get_template_directory_uri() . '/js/futello.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'futello_enqueue_assets');

/**
 * Регистрация областей для виджетов
 */
function futello_widgets_init() {
    register_sidebar(array(
        'name'          => 'Боковая панель',
        'id'            => 'sidebar-1',
        'description'   => 'Добавьте виджеты здесь',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'futello_widgets_init');

/**
 * Настройка длины отрывка
 */
function futello_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'futello_excerpt_length');

/**
 * Кастомные размеры изображений
 */
function futello_image_sizes() {
    add_image_size('futello-hero', 1200, 600, true);
    add_image_size('futello-card', 400, 300, true);
}
add_action('after_setup_theme', 'futello_image_sizes');
?>
