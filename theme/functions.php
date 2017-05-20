<?php

require __DIR__ . '/theme-init.php';

function getMenuItems($menuName) {
	$locations = get_nav_menu_locations();
	if (isset($locations[$menuName])) {
		$menu = get_term($locations[$menuName], 'nav_menu');
		return wp_get_nav_menu_items($menu->term_id);
	}
	return [];
}

add_theme_support('menus');
register_nav_menu('main_menu', 'Hlavní menu');

$View->main_menu = getMenuItems('main_menu');
