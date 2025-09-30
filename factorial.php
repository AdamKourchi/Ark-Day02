<?php
function factorial(int $num): void
{
    

    if ($num < 0) {

        echo "Input a positive number";
        return;
    }

        if ($num == 0) {

        echo "1";
        return;
    }

 $result = $num;

    for ($i = $num - 1; $i > 1; $i--) {

        $result *= $i;

    }

    echo  $result;
    return;
}



factorial(5);//120