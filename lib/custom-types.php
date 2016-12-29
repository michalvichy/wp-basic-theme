<?php
    add_action( 'init', 'edition_post_type' );
    function edition_post_type() {
        /**
         * Register a achievement post type.
         */
        $labels_edition = array(
            'name'               => 'Edycje',
            'singular_name'      => 'Edycja',
            'menu_name'          => 'Edycje',
            'name_admin_bar'     => 'Edycje',
            'add_new'            => 'Nowa edycja',
            'add_new_item'       => 'Dodaj nową edycje',
            'new_item'           => 'Nowa edycja',
            'edit_item'          => 'Edytuj edycje',
            'view_item'          => 'Zobacz edycje',
            'all_items'          => 'Wszystkie edycje',
            'search_items'       => 'Wyszukaj edycje',
            'parent_item_colon'  => 'Nadrzędne edycje:',
            'not_found'          => 'Nie znaleziono edycji',
            'not_found_in_trash' => 'Nie znaleziono edycji w koszu'
        );
        $args = array(
            'labels'             => $labels_edition,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'edition' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'thumbnail', 'excerpt'),
            'menu_icon'          => 'dashicons-media-video'
        );
        register_post_type( 'edition', $args );
    }
?>
