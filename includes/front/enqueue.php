<?php

function f_enqueue (){
 wp_register_style (
    'f_font_rubik_and_pacifico',
    'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
    [],
    null
 );
 wp_register_style(
    'f_bootstrap_icons',
    get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
 );
 wp_register_style(
    'f_theme',
    get_theme_file_uri('assets/public/index.css'),
 );
 wp_enqueue_style('f_font_rubik_and_pacifico');
 wp_enqueue_style('f_bootstrap_icons');
 wp_enqueue_style('f_theme');
}