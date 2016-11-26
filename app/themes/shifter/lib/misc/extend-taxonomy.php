<?php

namespace Apollo\Extend\Taxonomies;
use Apollo\Extend\PostTypes;

/**
 * Generate Labels for Custom Post Types
 * @param  string $name     Admin name of CPT label
 * @param  string $singular Singular form of CPT label
 * @param  string $plural   Plural for of CPT label
 * @return array            Label array neecessary for CPT
 */
function label_factory( $name, $singular = false, $plural = false ) {

  $singular = $singular ? $singular : $name;
  $plural = $plural ? $plural : $name;

  $labels = array(
    'name'                  => $name,
    'singular_name'         => $singular,
    'menu_name'             => $name,
    'name_admin_bar'        => $name,
    'parent_item_colon'     => 'Parent ' . $singular . ':',
    'all_items'             => 'All ' . $plural,
    'add_new_item'          => 'Add New ' . $singular,
    'add_new'               => 'Add New',
    'new_item'              => 'New ' . $singular,
    'edit_item'             => 'Edit ' . $singular,
    'update_item'           => 'Update ' . $singular,
    'view_item'             => 'View ' . $singular,
    'search_items'          => 'Search ' . $singular,
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'items_list'            => $plural . ' list',
    'items_list_navigation' => $plural . ' list navigation',
    'filter_items_list'     => 'Filter ' . $plural . ' list'
  );

  return $labels;

}

// Refer to: http://generatewp.com/taxonomy/
function apollo_taxonomy() {

  $labels = label_factory('Singular', 'Singular', 'Plural');

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );

  register_taxonomy( 'apollo_tax', array( 'post' ), $args );

}

add_action( 'init', __NAMESPACE__ . '\apollo_taxonomy', 0 );
