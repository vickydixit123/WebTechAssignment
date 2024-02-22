<?php
// Q10.
// Scenario: You are developing a blog platform where 
// users can    
// publish articles. However, you want to implement a 
// feature that    
// Limits the length of article titles to 50 characters. Write a 
// PHP    
// script that checks the length of the article title and 
// truncates it to    
// 50 characters if it exceeds the limit.

$articleTitle = "Hello Guys this is my very long title,
                 Hello Guys this is my very long title,
                 Hello Guys this is my very long title";

if (strlen($articleTitle) > 50) {
    $truncated = substr($articleTitle, 0, 50);
    echo $truncated;
} else {
    echo $articleTitle;
}
