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
}
add_action('wp_enqueue_scripts', 'futello_enqueue_assets');

/**
 * Fallback меню если не создано основное меню
 */
function futello_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url('/predictions') . '">Predictions</a></li>';
    echo '<li><a href="' . home_url('/reviews') . '">Reviews</a></li>';
    echo '<li><a href="' . home_url('/statistics') . '">Statistics</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About us</a></li>';
    echo '</ul>';
}

/**
 * Настройка длины отрывка
 */
function futello_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'futello_excerpt_length');
?>

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
