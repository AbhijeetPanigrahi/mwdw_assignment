<?php
echo "Swapping using third variable <br>";
echo "<br>";
$a=2;
$b=3;
echo "Before swapping the 1st number is $a and the 2nd number is $b <br>";
$temp=$a;
$a=$b;
$b=$temp;
echo "After swapping the 1st number is $a and the 2nd number is $b <br>";
echo "<br>";
echo "Swapping without using third variable <br>";
echo "<br>";
echo "Before swapping the 1st number is $a and the 2nd number is $b <br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "After swapping the 1st number is $a and the 2nd number is $b <br>";
echo "<br>";
echo "Swapping using arithmetic operators (* and /) <br>";
echo "<br>";
echo "Before swapping the 1st number is $a and the 2nd number is $b <br>";
$a=$a*$b;
$b=$a/$b;
$a=$a/$b;
echo "After swapping the 1st number is $a and the 2nd number is $b <br>";
?>