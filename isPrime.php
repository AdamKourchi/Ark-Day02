<?php
function isPrime(int $num): void
{

    if ($num <= 1) {

        echo "false";
        return;
    }

    for ($i = $num - 1; $i > 1; $i--) {

        if ($num % $i == 0) {
            echo "false";
            return;
        }
    }

    echo "true";
    return;
}



isPrime(283);