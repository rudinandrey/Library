<?php


namespace Database\Tables;


use Database\User;

class Reader implements User {
    private $books = [];

    public function put(\Library\Models\Book $book)
    {
        // TODO: Implement put() method.
        $this->books[] = $book;
    }
}