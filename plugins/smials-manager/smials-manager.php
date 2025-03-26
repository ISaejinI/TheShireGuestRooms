<?php

/*
 * Plugin Name: Smials manager
 * Description: Ajoutez un nouveau type de post 'Smials' à votre site WordPress pour gérer facilement vos chambres d'hôtes inspirées des maisons de hobbits. Ce plugin intègre des taxonomies personnalisées pour organiser et afficher vos Smials de manière intuitive.
 * Version: 1.0.0
 * Author: Lou-Anne Biet
 * Author URI: https://www.portfolio.louanne-biet.fr/
 * Text Domain: smials-manager
*/

if (!defined('ABSPATH')) { // Redirige si tentative accès
    exit;
}

if (class_exists('Geniem\ACF\Group')) {
    error_log('ACF Codifier chargé avec succès !');
} else {
    error_log('ACF Codifier n\'est pas chargé !');
}

require_once 'inc/PostType.php';
require_once 'inc/CustomFields.php';
require_once 'inc/CustomTaxonomies.php';

use SmialsManager\PostType;
use SmialsManager\CustomFields;
use SmialsManager\CustomTaxonomies;

(new PostType())->register();
(new CustomFields())->register();
(new CustomTaxonomies())->register();