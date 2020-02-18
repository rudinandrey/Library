<?php


namespace Database;


interface User {
    public function put(\Library\Models\Book $book);
}