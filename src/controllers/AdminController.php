<?php

namespace Nrs\controllers;

use duncan3dc\Laravel\BladeInstance;
use Nrs\models\Page;
use Nrs\Validation\Validator;
use Cocur\Slugify\Slugify;

class AdminController extends BaseController
{
    /**
     * Save edited page; Called via Ajax
     * @return string
     */
    public function postSavePage()
    {
        $okay = true;
        $page_id = $_REQUEST['page_id'];
        $page_content = $_REQUEST['thedata'];
        if ($page_id > 0) {
            $page = Page::find($page_id);
        } else {
            $page = new Page;
            $slugify = new Slugify;
            $browser_title = $_REQUEST['browser_title'];
            $page->browser_title = $browser_title;
            $page->slug = $slugify->slugify($browser_title);
            // verify that the slug is not already in the db
            $results = Page::where('slug', '=', $slugify->slugify($browser_title))->get();
            foreach($results as $result){
                $okay = false;
            }
        }
        $page->page_content = $page_content;
        if ($okay){
            $page->save();
            echo "OK";
        } else {
            echo "Browser title is already in use!";
        }
    }

    public function getAddPage()
    {
        $page_id = 0;
        $page_content = "Enter your content here";
        $browser_title = "";
        echo $this->Blade->render('generic-page', [
            'page_id' => $page_id,
            'browser_title' => $browser_title,
            'page_content' => $page_content,
        ]);
    }
}
