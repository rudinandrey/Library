<?php


namespace Library\Models;


class Library {
    private $librarian = null;
    public function __construct()
    {
        $this->librarian = new \Librarian();
    }

    public function give(Book $book) {

    }

    public function take(Book $book) {

    }

    public function search(BookSearch $book) {

    }


}