

<?php

function theme_support(){
//añadir miniaturas 
	add_theme_support('post-thumbnails');
//poder poner un logo custom
	add_theme_support('custom-logo');
}

add_action('after_setup_theme','theme_support');


//menús dinámicos
function theme_menus(){
    $locations = array('primary'=> "Navbar");

    register_nav_menus($locations);
}


add_action('init','theme_menus');


function mytheme_excerpt_rss_thumbs($content) {
 
    global $post;
    $args = array(
        'post_type'      => 'attachment', // Seleccionamos adjuntos
        'post_mime_type' => 'image', // Del tipo "imagen"
        'order'          => 'ASC', // Los ordenamos ascendentemente
        'orderby'        => 'menu_order', // Que respete el orden asignado
        'post_parent'    => $post->ID // De la entrada actual
    );
    $images = get_posts($args);
    $style = 'float:right;margin:0 0 20px 20px;'; // Estilos CSS
 
    // La entrada tiene una imagen destacada.
    if ( has_post_thumbnail($post->ID) ) {
        $content = '<div style="' . $style . '">' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</div>' . $content;
 
    // No se ha asignado una imagen destacada, asi que adjuntamos
    // la primera que encontramos asociada a la entrada actual.
    } elseif ( $images ) {
        $post_link = get_permalink();
        $content = '<a href="' . $post_link . '" style="' . $style . '">' . wp_get_attachment_image($images[0]->ID, 'thumbnail') . '</a>' . $content;
    }
 
    return $content;
}
 
add_filter('the_excerpt_rss', 'mytheme_excerpt_rss_thumbs');



?>