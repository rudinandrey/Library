<?php


namespace Library\Models;


class Search {
    private $library;
    public function __construct(Library $library)
    {
        $this->$library = $library;
    }

    public function byName($name) {

    }
}