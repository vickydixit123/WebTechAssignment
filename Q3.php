<?php
/*
Q3.Create a PHP program for a fitness app. The program 
will take  the number of steps walked in a day as input 
and determine the fitness level based on the following 
rules:    
If the number of steps is less than 5000, the fitness level is  
'Beginner'.    
If the number of steps is between 5000 and 10000   
(inclusive),  the fitness level is  
'Intermediate'    
If the number of steps is greater than 10000, the fitness 
level is    
'Advanced".    
Provide a PHP code snippet for this program, including 
the  conditional statements to determine the fitness 
level based on the input number of steps.   
*/

function calcFitnessLevel($steps)
{
    if ($steps < 5000) {
        return "Beginner";
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return "Intermediate";
    } else {
        return "Advanced";
    }
}

$steps = 95000;
$fitnessLevel = calcFitnessLevel($steps);
echo 'Fitness Level: ' . $fitnessLevel;
