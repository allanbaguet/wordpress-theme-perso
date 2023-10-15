<?php 

function declarateFiles() {
    // Déclarer le fichier bootstrap à la racine du thème
    wp_enqueue_style( 
        'Bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(), 
        '5.3.2',
    );
    wp_enqueue_script(
        'Bootstrap JS',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.2',
        true,
    );
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'Fiche CSS',
        get_stylesheet_uri(), 
    );   
    // Déclarer le JS
    wp_enqueue_script( 
        'script JS', 
        get_template_directory_uri() . '/public/assets/js/script.js', 
        array(), 
        '1.0', 
        true
    );
}
add_action( 'wp_enqueue_style', 'declarateFiles' );
add_action( 'wp_enqueue_scripts', 'declarateFiles' );



// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// Affichée une fois par date différente
the_date();

// Affichée pour chaque article avec le format défini 
// dans WordPress
the_time( get_option( 'date_format' ) );

// Affichée pour chaque article, avec un format de date 
// et heure personnalisé (ici : 02 Avril 2019 à 17:23)
the_time( 'j F Y à H:i' );