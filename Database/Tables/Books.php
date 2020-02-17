<?php

namespace Database\Tables;

use Library\Models\Book;
use Library\Models\States\EmptyState;

class Books {
    private $books;

    public function __construct()
    {
        $this->books = [
            new Book("Совершенный код", "Стив Макконел", 2010, "1000", new EmptyState())
        ];
    }



}