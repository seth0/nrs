<?php
namespace Nrs\controllers;

use duncan3dc\Laravel\BladeInstance;
use Nrs\models\Page;


class PageController extends BaseController
{
    public function getShowHomePage()
    {
      echo $this->Blade->render("home");
    }

    public function getShowPage()
  {
      $browser_title ="";
      $page_content = "";
      // Extract pagename from the url
      $uri = explode("/", $_SERVER['REQUEST_URI']);
      $target = $uri[1];

      // find matching page in the db
      $page = Page::where('slug', '=', $target)->get();
      // look up page content
      foreach ($page as $item) {
              $browser_title = $item->browser_title;
              $page_content = $item->page_content;
          }

      if (strlen($browser_title) == 0 ) {
          header("HTTP/1.0 404 Not Found");
          header("Location: /page-not-found");
          exit();
      }
      // pass the content to some blade tempalte
      echo $this->Blade->render('generic-page', [
               'browser_title' => $browser_title,
               'page_content' => $page_content,
           ]);
      // render the template.
  }
    public function getShow404()
    {
      echo $this->Blade->render('page-not-found');
    }
}
