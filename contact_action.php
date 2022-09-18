<?php

require_once 'config/Database.php';
require_once 'class/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

if(isset($_POST["submit"])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $contact->name = $_POST['name'];
        $contact->email = $_POST['email'];
        $contact->subject = $_POST['subject'];
        $contact->message = $_POST['message'];
        $contact->insert();
        if($contact->insert()){
            header('location: index.php?success=message sent succesfully');
        }
    } else {
        header('location: index.php?error=please fill all field');
    }
} else {
    echo "invalid";
}