<?php
// Q7.
// Scenario: Imagine you are developing a weather 
// application.    
// Depending on the current temperature, the application 
// provides    
// Different recommendations. Write a PHP script that takes 
// he    
// current temperature as input and outputs a 
// recommendation. For   example, if the temperature is 
// above 25°C, echo "It's a sunny  day!"; otherwise, echo 
// "Consider taking an umbrella"

$currentTemp = 50;

if ($currentTemp > 25) {
    echo "Its a Sunny day!";
} else {
    echo "Consider taking an umbrella";
}
