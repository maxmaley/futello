<?php
/**
 * Futello Child Theme Functions
 * Основной файл функций для детской темы Futello
 */

// Защита от прямого доступа
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Подключение стилей родительской и дочерней темы
 */
function futello_enqueue_styles() {
    // Подключаем стили родительской темы Astra
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    
    // Подключаем наши кастомные стили
    wp_enqueue_style('futello-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'futello_enqueue_styles');

/**
 * Регистрируем Custom Post Types для матчей
 */
function futello_register_match_post_type() {
    $labels = array(
        'name' => 'Матчи',
        'singular_name' => 'Матч',
        'menu_name' => 'Матчи',
        'add_new' => 'Добавить матч',
        'add_new_item' => 'Добавить новый матч',
        'edit_item' => 'Редактировать матч',
        'new_item' => 'Новый матч',
        'view_item' => 'Посмотреть матч',
        'all_items' => 'Все матчи',
        'search_items' => 'Поиск матчей'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true, // Для REST API
        'query_var' => true,
        'rewrite' => array('slug' => 'match'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('futello_match', $args);
}
add_action('init', 'futello_register_match_post_type');

/**
 * Регистрируем Custom Post Type для команд
 */
function futello_register_team_post_type() {
    $labels = array(
        'name' => 'Команды',
        'singular_name' => 'Команда',
        'menu_name' => 'Команды',
        'add_new' => 'Добавить команду',
        'add_new_item' => 'Добавить новую команду'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'team'),
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('futello_team', $args);
}
add_action('init', 'futello_register_team_post_type');

/**
 * Добавляем кастомные поля для матчей
 */
function futello_add_match_meta_boxes() {
    add_meta_box(
        'futello_match_details',
        'Детали матча',
        'futello_match_details_callback',
        'futello_match',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'futello_add_match_meta_boxes');

/**
 * Форма для ввода деталей матча в админке
 */
function futello_match_details_callback($post) {
    wp_nonce_field('futello_match_details_nonce', 'futello_match_details_nonce');
    
    // Получаем существующие значения
    $home_team = get_post_meta($post->ID, '_home_team', true);
    $away_team = get_post_meta($post->ID, '_away_team', true);
    $match_date = get_post_meta($post->ID, '_match_date', true);
    $match_time = get_post_meta($post->ID, '_match_time', true);
    $league = get_post_meta($post->ID, '_league', true);
    $odds_home = get_post_meta($post->ID, '_odds_home', true);
    $odds_draw = get_post_meta($post->ID, '_odds_draw', true);
    $odds_away = get_post_meta($post->ID, '_odds_away', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="home_team">Домашняя команда</label></th>
            <td><input type="text" id="home_team" name="home_team" value="<?php echo esc_attr($home_team); ?>" /></td>
        </tr>
        <tr>
            <th><label for="away_team">Гостевая команда</label></th>
            <td><input type="text" id="away_team" name="away_team" value="<?php echo esc_attr($away_team); ?>" /></td>
        </tr>
        <tr>
            <th><label for="match_date">Дата матча</label></th>
            <td><input type="date" id="match_date" name="match_date" value="<?php echo esc_attr($match_date); ?>" /></td>
        </tr>
        <tr>
            <th><label for="match_time">Время матча</label></th>
            <td><input type="time" id="match_time" name="match_time" value="<?php echo esc_attr($match_time); ?>" /></td>
        </tr>
        <tr>
            <th><label for="league">Лига</label></th>
            <td><input type="text" id="league" name="league" value="<?php echo esc_attr($league); ?>" /></td>
        </tr>
        <tr>
            <th><label for="odds_home">Коэффициент на победу дома</label></th>
            <td><input type="number" step="0.01" id="odds_home" name="odds_home" value="<?php echo esc_attr($odds_home); ?>" /></td>
        </tr>
        <tr>
            <th><label for="odds_draw">Коэффициент на ничью</label></th>
            <td><input type="number" step="0.01" id="odds_draw" name="odds_draw" value="<?php echo esc_attr($odds_draw); ?>" /></td>
        </tr>
        <tr>
            <th><label for="odds_away">Коэффициент на победу в гостях</label></th>
            <td><input type="number" step="0.01" id="odds_away" name="odds_away" value="<?php echo esc_attr($odds_away); ?>" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Сохраняем кастомные поля матча
 */
function futello_save_match_details($post_id) {
    if (!isset($_POST['futello_match_details_nonce']) || !wp_verify_nonce($_POST['futello_match_details_nonce'], 'futello_match_details_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Сохраняем все поля
    $fields = array('home_team', 'away_team', 'match_date', 'match_time', 'league', 'odds_home', 'odds_draw', 'odds_away');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'futello_save_match_details');

/**
 * Функция для получения данных матча (пока фейковые)
 */
function futello_get_match_data($match_id = null) {
    // ВРЕМЕННЫЕ ФЕЙКОВЫЕ ДАННЫЕ
    // Потом заменим на реальные из API
    return array(
        'home_team' => 'AC Milan',
        'away_team' => 'FC Shakhtar Donetsk',
        'match_time' => '21:45',
        'match_date' => 'May 10',
        'league' => 'Premier League',
        'odds' => array(
            'home' => 1.85,
            'draw' => 3.3,
            'away' => 2.76
        ),
        'home_logo' => 'https://via.placeholder.com/60x60?text=MIL',
        'away_logo' => 'https://via.placeholder.com/60x60?text=SHA'
    );
}

/**
 * Активация темы - создаем начальные данные
 */
function futello_theme_activation() {
    // Обновляем правила rewrite для новых post types
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'futello_theme_activation');
