<?php


namespace Database\Tables;


class Placement {
    private $book;
    private $shelf;

    public function __construct(Book $book)
    {
    }
}