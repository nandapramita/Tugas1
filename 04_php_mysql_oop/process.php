<?php
include "dbconfig.php";
include "form_handler.php";

// Checking the form
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $formHandler = new FormHandler($pdo, $name, $email);
    $formHandler->saveData();
    $formHandler->displayData();} 

else{
    // Redirect to index.html
    header("Location: form.html");
    exit;
}
?>