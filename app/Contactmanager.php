<?php

class Contactmanager {

    public $contacts;

    public function __construct()
    {
        $this->contacts = [];
    }

    public function addContact($newContact)
    {
        if (count($this->contacts) === 500) return "Contact limit has been reached";
            array_push($this->contacts, $newContact);

        return true;
    }

    public function searchContact($name)
    {
        foreach($this->contacts as $contact)
        {
            if ($contact->name == $name) {
                return $contact;
            }
        }

        return null;
    }

    public function getNumberOfContact()
    {
        return count($this->contacts);
    }
}