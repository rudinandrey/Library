<?php


namespace Database\Tables;


class Shelves {
    private $shelves;

    public function __construct()
    {
        $this->shelves = [
            ["id"=>"1.1.1.1", "count"=>10, "books"=>new Books()]
        ];
    }
}