<?php
// Q11.
// Scenario: Suppose you are developing a quiz 
// application where  users can attempt multiple-choice 
// questions. You want to    
// implement a feature that calculates the user's score based 
// on the    
// number of correct answers. Write a PHP script that 
// calculates the user's score and displays it at the end of the 
// quiz.

$correctAns = 17;
$totalQuest = 20;

$score = ($correctAns / $totalQuest) * 100;
echo "Your score is: " . $score . "%";
