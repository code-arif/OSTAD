<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class bookAuthorController extends Controller
{
    public function bookAuthor(){
        // $book = Book::get();
        $book = Book::find(1)->author;
        return $book;
    }

    //create book with heard code
    /*
    public function createBook(){
        $book = new Book();
        $book->title = "Communiucation hacks";
        $book->save();
        return $book;
    }
    */

    /*
    public function createBook(){
        $book = Book::create(
            ['title' => "Branin booster"]
        );
        return $book;
    }
    */
}
