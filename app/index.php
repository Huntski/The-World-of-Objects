<?php

require 'Contactmanager.php';
require 'contact.php';

$ContactsManager = new ContactsManager;

$contactAmount = 4;

for ($i = 0; $i < $contactAmount; $i++) {
    $Contact = new Contact;
    $ContactsManager.addContact($newContact);
}