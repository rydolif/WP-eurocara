<?php
//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );
    
//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );

//------------------чистка від лишнього ----------------------
    remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
    remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
    remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
    remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
    remove_action('wp_head','wp_generator');  // скрыть версию wordpress
    function modify_jquery() {
            if (!is_admin()) {           
            wp_deregister_script('jquery');
            }
    }
    add_action('init', 'modify_jquery');

//------------------информация---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Наполнение',
            'menu_title'    => 'Наполнение',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

    }
