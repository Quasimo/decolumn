<?php
register_nav_menus(array('topNav' => 'Top Main Menu', 'sideNav' => 'Sidebar Menu', 'bottomNav' => 'Bottom Menu'));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="column">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
));

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) $content_width = 600;

?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>