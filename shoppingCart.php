<?php

$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 3],
    ["name" => "Mouse", "price" => 10, "quantity" => 6],
    ["name" => "Keyboard", "price" => 20, "quantity" => 2]
];

function getTotal(array $cart): float
{

    $finalTotal = 0;

    foreach ($cart as $item) {
        $total = $item["price"] * $item["quantity"];

        if ($item["quantity"] >= 5) {
            $total -= 0.05 * $total;
        }

        $finalTotal += $total;

    }


    if ($finalTotal >= 100) {

        $finalTotal -= 0.1 * $finalTotal;

    }


    return  $finalTotal;
}

echo getTotal($cart);