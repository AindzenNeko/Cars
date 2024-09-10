<?php

function gc_register_post_type() {
    $args = [
        'label'  => 'Cars',
		'labels' => [
			'name'               => 'Cars', // основное название для типа записи
			'singular_name'      => 'Car', // название для одной записи этого типа
			'add_new'            => 'Add Car', // для добавления новой записи
			'add_new_item'       => 'Add new Car', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Car', // для редактирования типа записи
			'new_item'           => 'New Car', // текст новой записи
			'view_item'          => 'Viev Car', // для просмотра записи этого типа.
			'search_items'       => 'Search Car', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Car', // название меню
		],
		'description'            => 'Its a Car',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
    ];

    register_post_type('car', $args);
};

add_action('init', 'gc_register_post_type');