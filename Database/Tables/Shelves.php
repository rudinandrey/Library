<?php


namespace Database\Tables;


use Library\Models\States\FreeState;

class Shelves {
    private $shelves = [
        ["id"=>"1.1.1.1", "count"=>10, "books"=>[]]
    ];

    public function __construct()
    {
    }

    public function put(Book $book) {
        foreach($this->shelves as $shelf) {
            $book["state"] = new FreeState();
            if(count($shelf["books"]) < $shelf["count"]) $shelf["books"][] = $book;
        }
    }
}