<?php

class Book {
    private $title;
    private $author;
    private $isBorrowed;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function borrowBook()
    {
        $this->isBorrowed = true;
        return true;
    }

    public function returnBook()
    {
        $this->isBorrowed = false;
        return false;
    }

    public function checkBorrowStatus()
    {
        return $this->isBorrowed;
    }
}