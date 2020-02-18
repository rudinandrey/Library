<?php

namespace Database\Tables;

use Library\Models\Book;
use Library\Models\States\EmptyState;

class Books {
    private $_books;

    public function __construct()
    {
        $this->_books = [
            new Book("Совершенный код", "Стив Макконел", 2010, "1000", new EmptyState())
        ];
    }

    public function books() {
        return $this->_books;
    }
}