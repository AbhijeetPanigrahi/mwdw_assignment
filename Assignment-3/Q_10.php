<?php
$n = 4; // Number of rows

$num = 1; // Initialize the starting number

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>"; // Move to the next line after each row
}
?>
