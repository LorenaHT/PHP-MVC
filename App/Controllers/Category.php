<?php

namespace App\Controllers;

use \Core\View;

/**
 * Category controller
 *
 * PHP version 7.0
 */
class Category extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Category/index.html');
    }

    public function showAction()
    {
        $categories = \App\Models\Category::getAll();
       // var_dump($categories);
        View::renderTemplate('Category/categories.html',['$categories' => $categories]);
    }



}
