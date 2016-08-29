<?php
/*

The BaseController is used as bases for our page controller, that show the homepage the 404 page. And that's al
it really does

*/
namespace Nrs\controllers;

use duncan3dc\Laravel\BladeInstance;
use Kunststube\CSRFP\SignatureGenerator;


class BaseController
{
    protected $Blade;
    protected $signer;

    public function __construct()
    {

      $this->signer = new SignatureGenerator(getenv('CSRF_SECRET'));
      $this->Blade = new BladeInstance(getenv('VIEWS_DIRECTORY'), getenv('CACHE_DIRECTORY'));
    }
}
