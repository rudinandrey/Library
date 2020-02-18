<?php


namespace Library\Models;


class BookSearch {
    private $name = "";
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isThatBook(Book $book) {
        if($book["name"] == $this->name) return true;
        else return false;
    }
}