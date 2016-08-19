<?php
/*

The BaseController is used as bases for our page controller, that show the homepage the 404 page. And that's al
it really does

*/
namespace Nrs\controllers;

use duncan3dc\Laravel\BladeInstance;


class BaseController
{
    protected $Blade;

    public function __construct()
    {
      $this->Blade = new BladeInstance("/opt/lampp/htdocs/views", "/opt/lampp/htdocs/cache/views");
    }
}
