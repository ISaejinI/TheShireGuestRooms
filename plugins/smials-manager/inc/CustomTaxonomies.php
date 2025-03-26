<?php

namespace SmialsManager;

class CustomTaxonomies
{
    public function define_bed_type_taxonomy()
    {
        $labels = array(
            'name'                       => _x('Types de lit', 'taxonomy general name', 'smials-manager'),
            'singular_name'              => _x('Type de lit', 'taxonomy singular name', 'smials-manager'),
            'search_items'               => __('Rechercher des types de lit', 'smials-manager'),
            'popular_items'              => __('Types de lit populaires', 'smials-manager'),
            'all_items'                  => __('Tous les types de lit', 'smials-manager'),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __('Modifier le type de lit', 'smials-manager'),
            'update_item'                => __('Mettre à jour le type de lit', 'smials-manager'),
            'add_new_item'               => __('Ajouter un nouveau type de lit', 'smials-manager'),
            'new_item_name'              => __('Nom du nouveau type de lit', 'smials-manager'),
            'separate_items_with_commas' => __('Séparez les types de lit par des virgules', 'smials-manager'),
            'add_or_remove_items'        => __('Ajouter ou supprimer des types de lit', 'smials-manager'),
            'choose_from_most_used'      => __('Choisir parmi les types de lit les plus utilisés', 'smials-manager'),
            'not_found'                  => __('Aucun type de lit trouvé.', 'smials-manager'),
            'menu_name'                  => __('Types de lit', 'smials-manager'),
        );

        $args = array(
            'hierarchical'          => true,
            'labels'                => $labels,
            'public'                => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'show_in_rest'          => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'room-bed-type'),
        );

        register_taxonomy('room-bed-type', PostType::POST_TYPE, $args);
    }

    public function define_price_range_taxonomy()
    {
        $labels = array(
            'name'                       => _x('Gammes de prix', 'taxonomy general name', 'smials-manager'),
            'singular_name'              => _x('Gamme de prix', 'taxonomy singular name', 'smials-manager'),
            'search_items'               => __('Rechercher des gammes de prix', 'smials-manager'),
            'popular_items'              => __('Gammes de prix populaires', 'smials-manager'),
            'all_items'                  => __('Toutes les gammes de prix', 'smials-manager'),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __('Modifier la gamme de prix', 'smials-manager'),
            'update_item'                => __('Mettre à jour la gamme de prix', 'smials-manager'),
            'add_new_item'               => __('Ajouter une nouvelle gamme de prix', 'smials-manager'),
            'new_item_name'              => __('Nom de la nouvelle gamme de prix', 'smials-manager'),
            'separate_items_with_commas' => __('Séparez les gammes de prix par des virgules', 'smials-manager'),
            'add_or_remove_items'        => __('Ajouter ou supprimer des gammes de prix', 'smials-manager'),
            'choose_from_most_used'      => __('Choisir parmi les gammes de prix les plus utilisées', 'smials-manager'),
            'not_found'                  => __('Aucune gamme de prix trouvée.', 'smials-manager'),
            'menu_name'                  => __('Gammes de prix', 'smials-manager'),

        );

        $args = array(
            'hierarchical'          => true,
            'labels'                => $labels,
            'public'                => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'show_in_rest'          => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'room-price-range'),
        );

        register_taxonomy('room-price-range', PostType::POST_TYPE, $args);
    }

    public function register()
    {
        add_action('init', [$this, 'define_bed_type_taxonomy']);
        add_action('init', [$this, 'define_price_range_taxonomy']);
    }
}
