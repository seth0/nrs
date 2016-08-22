<?php

// REGISTER ROUTES
$router->map('GET',       '/register',       'Nrs\controllers\RegisterController@getShowRegisterPage',        'register');
$router->map('POST',      '/register',       'Nrs\controllers\RegisterController@postShowRegisterPage',       'register_post');
$router->map('GET',       '/verify-account',  'Nrs\controllers\RegisterController@getVerifyAccount',          'verify_account');

// LOGIN LOGOUT ROUTES
$router->map('GET',       '/login',          'Nrs\controllers\AuthenticationController@getShowLoginPage',     'login');
$router->map('POST',      '/login',          'Nrs\controllers\AuthenticationController@postShowLoginPage',    'login_post');
$router->map('GET',       '/logout',         'Nrs\controllers\AuthenticationController@getLogout',            'logout');


// PAGE ROUTES
$router->map('GET',       '/',               'Nrs\controllers\PageController@getShowHomePage',                'home');
$router->map('GET',       '/page-not-found', 'Nrs\controllers\PageController@getShow404',                     '404');
$router->map('GET',       '/[*]',            'Nrs\controllers\PageController@getShowPage',                    'generic_page');
