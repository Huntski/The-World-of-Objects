<?php

class Person {
    private $userName;
    private $SSN;

    public function __construct($userName, $SSN)
    {
        $this->userName = $userName;
        $this->SSN = $SSN;
    }

    private function getSSN()
    {
        return $this->SSN;
    }

    private function getUserName()
    {
        return $this->userName;
    }

    public function isSamePerson($person)
    {
        if ($person->getId() === $this->getId()) return true;

        return false;
    }
}