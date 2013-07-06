<?php

$config['site_title'] = 'Codebreu';
$config['description'] = 'Markup and Tea';
$config['keywords'] = "";
$config['analytics'] = "UA-31721666-1";

$config['theme'] = 'codebreu';
$config['date_format'] = 'jS F, Y';

$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => true						// Enable Twig debug
);

$config['pages_order_by'] = 'date';		// Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

$config['copywrite'] = date('Y', time('now'));

?>
