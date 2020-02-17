<?php

namespace Library\Models;

class Book {
    private $name;
    private $author;
    private $year;
    private $id;
    private $state;

    public function __construct($name, $author, $year, $id, $state)
    {
        $this->name = $name;
        $this->author = $author;
        $this->year = $year;
        $this->id = $id;
        $this->state = $state;
    }
}