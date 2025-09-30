<?php
require_once "./reverseAString.php";
function isPalindrome(string $word): void
{
    $reversedWord = reverseString($word);

    if ($reversedWord == $word) {
        echo "true";

    } else {
        echo "false";
    }

}

isPalindrome( "radar");