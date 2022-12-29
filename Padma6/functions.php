<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'PM'=>'Primary'
]);

register_sidebar([
    'name'=>'BD Logo',
    'id'=>'bdlogo',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Title',
    'id'=>'htitle',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card 1',
    'id'=>'card1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card 2',
    'id'=>'card2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card 3',
    'id'=>'card3',
    'after_widget'=>'',
    'before_widget'=>''
]);



register_sidebar([
    'name'=>'News Part img1',
    'id'=>'img1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News Part Text',
    'id'=>'text1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News Part img2',
    'id'=>'img2',
    'after_widget'=>'',
    'before_widget'=>''
]);



register_sidebar([
    'name'=>'News Card 1',
    'id'=>'ncard1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News Card 2',
    'id'=>'ncard2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News Card 3',
    'id'=>'ncard3',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News Card 4',
    'id'=>'ncard4',
    'after_widget'=>'',
    'before_widget'=>''
]);



register_sidebar([
    'name'=>'News part img3',
    'id'=>'img3',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News part Text2',
    'id'=>'text2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News part img4',
    'id'=>'img4',
    'after_widget'=>'',
    'before_widget'=>''
]);
