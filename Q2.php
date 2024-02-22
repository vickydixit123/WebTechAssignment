<?php
// Q2.
// Simulate a traffic light system using if-else statements. 
// Log the appropriate message for each colour of the traffic light  

$lightColor = "Green";

if ($lightColor == "Red") {
    echo "Stop";
} elseif ($lightColor == "Yellow") {
    echo "Slow Down";
} elseif ($lightColor == "Green") {
    echo "Go";
} else {
    echo "Invalid input";
}
