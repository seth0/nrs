<?php
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



// -> OLD TWIG

/*  protected $loader;
  protected $twig;

  public function __construct()
  {
      $this->loader = new \Twig_Loader_Filesystem(__DIR__ . "/../../views");
      $this->twig   = new \Twig_Environment($this->loader,[
        'cache' => false, 'debug' => true
      ]);
  } */
