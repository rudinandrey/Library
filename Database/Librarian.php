<?php

namespace Database;

class Librarian {
    private $books = null;
    private $shelves = null;

    public function __construct()
    {
        $this->books = new \Database\Tables\Books();
        $this->shelves = new \Database\Tables\Shelves();

        foreach($this->books() as $book) {
            $this->shelves->put($book);
        }
    }
}