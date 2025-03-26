<?php

namespace SmialsManager;

class PostType
{
    const POST_TYPE = 'smial';

    public function define_smial_post_type()
    {
        $labels = array(
            'name'                  => _x('Smials', 'Nom général du type de publication', 'smials-manager'),
            'singular_name'         => _x('Smial', 'Nom singulier du type de publication', 'smials-manager'),
            'menu_name'             => _x('Smials', 'Texte du menu d’administration', 'smials-manager'),
            'name_admin_bar'        => _x('Smial', 'Ajouter un nouveau sur la barre d’outils', 'smials-manager'),
            'add_new'               => __('Ajouter un nouveau', 'smials-manager'),
            'add_new_item'          => __('Ajouter un nouveau Smial', 'smials-manager'),
            'new_item'              => __('Nouveau Smial', 'smials-manager'),
            'edit_item'             => __('Modifier le Smial', 'smials-manager'),
            'view_item'             => __('Voir le Smial', 'smials-manager'),
            'all_items'             => __('Tous les Smials', 'smials-manager'),
            'search_items'          => __('Rechercher des Smials', 'smials-manager'),
            'parent_item_colon'     => __('Smials parents :', 'smials-manager'),
            'not_found'             => __('Aucun Smial trouvé.', 'smials-manager'),
            'not_found_in_trash'    => __('Aucun Smial trouvé dans la corbeille.', 'smials-manager'),
            'featured_image'        => _x('Image de couverture du Smial', 'Remplace l’expression “Image mise en avant” pour ce type de publication. Ajouté en 4.3', 'smials-manager'),
            'set_featured_image'    => _x('Définir l’image de couverture', 'Remplace l’expression “Définir l’image mise en avant” pour ce type de publication. Ajouté en 4.3', 'smials-manager'),
            'remove_featured_image' => _x('Supprimer l’image de couverture', 'Remplace l’expression “Supprimer l’image mise en avant” pour ce type de publication. Ajouté en 4.3', 'smials-manager'),
            'use_featured_image'    => _x('Utiliser comme image de couverture', 'Remplace l’expression “Utiliser comme image mise en avant” pour ce type de publication. Ajouté en 4.3', 'smials-manager'),
            'archives'              => _x('Archives des Smials', 'Libellé de l’archive du type de publication utilisé dans les menus de navigation. Par défaut “Archives des articles”. Ajouté en 4.4', 'smials-manager'),
            'insert_into_item'      => _x('Insérer dans un Smial', 'Remplace l’expression “Insérer dans un article”/”Insérer dans une page” (utilisé lors de l’insertion de médias dans une publication). Ajouté en 4.4', 'smials-manager'),
            'uploaded_to_this_item' => _x('Téléversé sur ce Smial', 'Remplace l’expression “Téléversé sur cet article”/”Téléversé sur cette page” (utilisé lors de la visualisation des médias attachés à une publication). Ajouté en 4.4', 'smials-manager'),
            'filter_items_list'     => _x('Filtrer la liste des Smials', 'Texte d’aide pour les lecteurs d’écran pour l’en-tête des liens de filtrage sur l’écran de liste des types de publication. Par défaut “Filtrer la liste des articles”/”Filtrer la liste des pages”. Ajouté en 4.4', 'smials-manager'),
            'items_list_navigation' => _x('Navigation dans la liste des Smials', 'Texte d’aide pour les lecteurs d’écran pour l’en-tête de la pagination sur l’écran de liste des types de publication. Par défaut “Navigation dans la liste des articles”/”Navigation dans la liste des pages”. Ajouté en 4.4', 'smials-manager'),
            'items_list'            => _x('Liste des Smials', 'Texte d’aide pour les lecteurs d’écran pour l’en-tête de la liste des éléments sur l’écran de liste des types de publication. Par défaut “Liste des articles”/”Liste des pages”. Ajouté en 4.4', 'smials-manager'),

        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'show_in_admin_bar'  => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-admin-home',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => self::POST_TYPE ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        );

        register_post_type(self::POST_TYPE, $args);
    }

    public function register()
    {
        add_action('init', [$this, 'define_smial_post_type']);
    }
}
