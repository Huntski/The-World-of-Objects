<?php

use PHPUnit\Framework\TestCase;
require '/app/Book.php';

class BookTest extends TestClass {
    public $Book;

    public function __construct()
    {
        $this->$Book = new Book('The Serious Goose', 'Jimmy Kimmel');
    }

    /** @test */
    public function borrowBook_returnTrue()
    {
        $this->Book.borrowBook();
        $this->assertTrue($result);
    }

    /** @test */
    public function returnBook_returnFalse()
    {
        $this->Book.returnBook();
        $this->assertFalse($result);
    }

    /** @test */
    public function checkBorrowBook_returnBoolean()
    {
        $result = $this->Book.checkBorrowStatus();
        $this->assertBool($result);
    }
}