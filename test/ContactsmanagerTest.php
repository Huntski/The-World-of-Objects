<?php

use PHPUnit\Framework\TestCase;
require '/app/Contactmanager.php';
require '/app/Contact.php';

class ContactsmanagerTest extends TestClass {
    public $Contactmanager;
    public $Contact;
    public $contacts;

    public function __construct()
    {
        $this->Contactmanager = new Contactmanager;
        $this->Contact = new Contact('Vanessa', '217-460-3296');
    }

    /** @test */
    public function add_contact_and_check_contact_exists()
    {
        $result = $this->Contactmanager.addContact($this->Contact);
        $this->assertTrue($result);
    }

    /** @test */
    public function searchContact_and_assertCorrectName()
    {
        $result = $this->Contactmanager.searchContact('Vanessa');
        $this->assertSame(
            $result->name,
            $this->Contact->name
        );
    }

    /** @test */
    public function searchContact_and_assertCorrectPhonenumber()
    {
        $result = $this->Contactmanager.searchContact('217-460-3296');
        $this->assertSame(
            $result->phoneNumber,
            $this->Contact->phoneNumber
        );
    }
}