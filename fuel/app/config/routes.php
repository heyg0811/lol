<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	// データ関連
	'character/(:any)' => 'data/character/$1',
	'item/(:any)'      => 'data/item/$1',
	'dungeon/(:any)'   => 'data/dungeon/$1',
	'card/(:any)'      => 'data/card/$1',
);