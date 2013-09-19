<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Asset compression path
	|--------------------------------------------------------------------------
	|
	| The path to compress assets after at public directory.
	|
	*/

	'compressDir' => 'cache',

	/*
	|--------------------------------------------------------------------------
	| Force compress assets
	|--------------------------------------------------------------------------
	|
	| This forces Theme to (re)compile compression assets on every invocation.
	| By default this is FALSE. This is handy for development and debugging,
	| It should never be used in a production environment.
	|
	*/

	'forceCompress' => false,

	/*
	|--------------------------------------------------------------------------
	| Theme Default
	|--------------------------------------------------------------------------
	|
	| If you don't set a theme when using a "Theme" class the default theme
	| will replace automatically.
	|
	*/

	'themeDefault' => 'default',

	/*
	|--------------------------------------------------------------------------
	| Layout Default
	|--------------------------------------------------------------------------
	|
	| If you don't set a layout when using a "Theme" class the default layout
	| will replace automatically.
	|
	*/

	'layoutDefault' => 'default',

	/*
	|--------------------------------------------------------------------------
	| Path to lookup theme
	|--------------------------------------------------------------------------
	|
	| The root path contains themes collections.
	|
	*/

	'themeDir' => 'themes',

	/*
	|--------------------------------------------------------------------------
	| A pieces of theme collections
	|--------------------------------------------------------------------------
	|
	| Inside a theme path we need to set up directories to
	| keep "layouts", "assets" and "partials".
	|
	*/

	'containerDir' => array(
		'layout'  => 'layouts',
		'asset'   => 'assets',
		'partial' => 'partials',
		'widget'  => 'widgets',
		'view'    => 'views'
	),

	/*
	|--------------------------------------------------------------------------
	| Listener from events
	|--------------------------------------------------------------------------
	|
	| You can hook a theme when event fired on activities
	| this is cool feature to set up a title, meta, default styles and scripts.
	|
	*/

	'events' => array(

		// Before all event, this event will effect for global.
		'before' => function($theme)
		{
			//$theme->setTitle('Something in global.');
		}

	)

);