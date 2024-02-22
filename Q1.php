<?php
// Q1.
// Create a program for a shopping cart. If the total price
// is over Rs. 5000, apply a 10% discount; otherwise, log
// the original price.

function totalPrize($items)
{
    $totalPrice = 0;
    foreach ($items as $item) {
        $totalPrice += $item["price"];
    }
    if ($totalPrice > 5000) {
        $discountedPrice = $totalPrice * 0.9;
        return $discountedPrice;
    } else {
        return $totalPrice;
    }
}

$items = array(
    array("item" => "hoddy", "price" => 2000),
    array("item" => "jaket", "price" => 2500),
    array("item" => "shoe", "price" => 1500),
);
$finalPrice = totalPrize($items);
echo "FinalPrice is: " . $finalPrice;
