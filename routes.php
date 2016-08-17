<?php

$router->map('GET',       '/',         'Nrs\controllers\PageController@getShowHomePage', 'home');
$router->map('GET',       '/register', 'Nrs\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST',      '/register', 'Nrs\controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET',       '/login',    'Nrs\controllers\RegisterController@getShowLoginPage', 'login');
