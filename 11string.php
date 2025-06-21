<?php
$string = "my name is Bhagyshri";
$s = 's';
$count = 0;

for ($i = 0; $i < strlen($string); $i++) 
{
    if (substr($string, $i, 1) == $s) 
    { 
        $count++;
    }
}
echo "count of '$s' = $count";
?>
