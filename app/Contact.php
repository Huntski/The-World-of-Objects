<?php

class Contact {

    private $userInfo;

    public $name;
    public $phoneNumber;

    public function __construct($name = null, $phoneNumber = null)
    {
        $api = 'https://uinames.com/api/?ext';
        $this->$userInfo = json_decode(file_get_contents($api), JSON_PRETTY_PRINT);

        $this->name = $this->userInfo->name;
        $this->email = $this->userInfo->phone;

        if ($name) $this->name = $name;
        if ($phoneNumber) $this->phoneNumber = $phoneNumber;
    }

}