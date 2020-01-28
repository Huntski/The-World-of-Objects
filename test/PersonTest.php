<?php

use PHPUnit\Framework\TestCase;
require '/app/Person.php';

class PersonTest extends TestClass {
    public $Person_1;
    public $Person_2;

    public function __construct()
    {
        $this->Person_1 = new Person('Abel', '612-68-8822');
        $this->Person_1 = new Person('Marivel', '610-21-9053');
    }

    /** @test */
    public function getUsername_returnAbel()
    {
        $result = $this->Person_1.getUserName();
        $this->assertSame(
            $result,
            'Abel'
        );
    }

    /** @test */
    public function getSSN_returnId()
    {
        $result = $this->Person_1.getUserName();
        $this->assertSame(
            $result,
            '612-68-8822'
        );
    }

    /** @test */
    public function isSamePerson_returnFalse()
    {
        $result = $this->Person_1.isSamePerson($Person_2);
        $this->assertFalse($result);
    }
}