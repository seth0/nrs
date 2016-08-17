<?php

$router->map('GET',       '/',         'Nrs\controllers\PageController@getShowHomePage', 'home');

$router->map('GET',       '/register', 'Nrs\controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST',      '/register', 'Nrs\controllers\RegisterController@postShowRegisterPage', 'register_post');

$router->map('GET',       '/login',    'Nrs\controllers\RegisterController@getShowLoginPage', 'login');

$router->map('GET',      '/page-not-found', 'Nrs\controllers\PageController@getShow404', '404');

$router->map('GET',        '/slug', function(){
  $slug = new Cocur\Slugify\Slugify();
  echo $slug->slugify('About Acme?');
});

$router->map('GET',       '/[*]',    'Nrs\controllers\PageController@getShowPage', 'generic_page');
