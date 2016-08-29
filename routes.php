<?
// register routes
$router->map('GET', '/register', 'Nrs\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'Nrs\controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/verify-account', 'Nrs\controllers\RegisterController@getVerifyAccount', 'verify_account');
// testimonial routes
$router->map('GET', '/testimonials', 'Nrs\controllers\TestimonialController@getShowTestimonials', 'testimonials');
// logged in user routes
if (Nrs\auth\LoggedIn::user()) {
    $router->map('GET', '/add-testimonial', 'Nrs\controllers\TestimonialController@getShowAdd', 'add_testimonial');
    $router->map('POST', '/add-testimonial', 'Nrs\controllers\TestimonialController@postShowAdd', 'add_testimonial_post');
}
// login/logout routes
$router->map('GET', '/login', 'Nrs\controllers\AuthenticationController@getShowLoginPage', 'login');
$router->map('POST', '/login', 'Nrs\controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/logout', 'Nrs\controllers\AuthenticationController@getLogout', 'logout');
// admin routes
if ((Nrs\auth\LoggedIn::user()) && (Nrs\auth\LoggedIn::user()->access_level == 2)) {
    $router->map('POST', '/admin/page/edit', 'Nrs\controllers\AdminController@postSavePage', 'save_page');
    $router->map('GET', '/admin/page/add', 'Nrs\controllers\AdminController@getAddPage', 'add_page');
}
// page routes
$router->map('GET', '/', 'Nrs\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/page-not-found', 'Nrs\controllers\PageController@getShow404', '404');
$router->map('GET', '/[*]', 'Nrs\controllers\PageController@getShowPage', 'generic_page');
