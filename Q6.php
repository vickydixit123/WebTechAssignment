<?php
// Q6.
// Scenario: You are building a login system for a web 
// application.    
// After users submit their username and password, you need 
// to    
// verify if the credentials are correct before granting 
// access. Write   a PHP script that checks if the provided 
// username and password  match the stored credentials. If 
// they match, echo "Login successful"; otherwise, echo 
// "Invalid  
// credentials"

$inputUsername = "Vaibhav Singh";
$inputPassword = "vaibhav123";


$actualUsername = "Vaibhav Singh";
$actualPassword = "vaibhav123";
if ($inputUsername == $actualUsername && $inputPassword == $actualPassword) {
    echo "Login Successfuly";
} else {
    echo "Invalid Credentials";
}
