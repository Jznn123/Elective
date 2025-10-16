<?php

// Retrieves all posted form data from the registration form (register.html)
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$quote = $_POST['quote'];

$msg = "You are " . $firstname . ", a " . $age . "-year-old " . $gender . ". Your motto in life is: " . $quote;

// Displays the final message
echo $msg;
?>