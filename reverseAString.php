<?php
function reverseString(string $string): string
{

    $arrayString = str_split($string);

    $reversed = array_reverse($arrayString);

    return implode($reversed);
}

