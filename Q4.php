<?php
/*
Q4.
Develop a PHP program for a grading system. The 
program will  take a student's score as input and 
determine the grade based on the following rules:    
If the score is less than 60, the grade is 'F    
If the score is between 60 and 70 (inclusive), the grade is   
'D'.    
If the score is between 71 and 80 (inclusive), the grade is 
'C".    
If the score is between 81 and 90 (inclusive), the grade is   
'B'.    
If the score is greater than 90, the grade is 'A'.    
Provide a PHP code snippet for this program, including 
the  conditional statements to determine the grade based 
on the input score   
*/

function getGrade($score)
{
    if ($score < 60) {
        return "F";
    } elseif ($score > +60 && $score <= 70) {
        return "D";
    } elseif ($score > 70 && $score <= 80) {
        return "C";
    } elseif ($score > 80 && $score <= 90) {
        return "B";
    } else {
        return "A";
    }
}

$score = 85;
$grade = getGrade($score);
echo "Grade is: " . $grade;
