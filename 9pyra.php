<?php
function triangle($n)
{
  $k = 2 * $n - 2;
  for ($i = 0; $i< $n; $i++)
  {
    for ($j = 0; $j < $k; $j++)
    {
     echo "&nbsp;";
     }
   for ($j = 0; $j <= $i; $j++) 
    {
     echo "*";
    }
    echo "<br>";
    $k = $k - 1;
 }
}
$n = 5;
triangle($n);
?>
 