<?php

namespace App\Controllers;

use \Core\View;

/**
 * Book controller
 *
 * PHP version 7.0
 */
class Book extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Book/index.html');
    }

    public function showAction()
    {
        $books = \App\Models\Book::getAll();
       // var_dump($books);
        View::renderTemplate('Book/books.html',['books' => $books]);
    }

    public function getBooksIdAction()
    {
        //var_dump($this->route_params);
        //$catId=$this->route_params[0];
        $books = \App\Models\Category::getBooksById($this->route_params['id']);
        $categories =\App\Models\Category::getAll();
        //var_dump($books);
        View::renderTemplate('Category/categories.html',['books' => $books, 'categories' => $categories]);
    }
}
