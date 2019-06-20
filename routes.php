<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');  

$router->get('/contact', 'PagesController@contact' );
$router->post('/contact', 'PagesController@traitementForm');

$router->get('/ajout-article', 'ArticlesController@ajout');
$router->post('/ajout-article', 'ArticlesController@save');



// Run it!
$router->run();