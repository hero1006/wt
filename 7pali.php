

<?php
function Palindrome($str)
{
    if (strrev($str) == $str) {
        return 1;
    } else {
        return 0;
    }
}

$original = "nayan";
echo "String to check: " . $original . "<br>";

if (Palindrome($original)) {
    echo $original . " is a Palindrome";
} else {
    echo $original . " is not a Palindrome";
}
?>
