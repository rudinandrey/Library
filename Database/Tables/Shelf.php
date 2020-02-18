<?php


namespace Database\Tables;


use Database\User;
use Library\Models\Book;
use Library\Models\States\FreeState;

class Shelf implements User {
    private $books;
    private $count = 10;

    public function __construct()
    {
        $this->books = [];
    }

    public function put(Book $book) {
        $book["state"] = new FreeState();
        $this->books[] = $book;
    }
}