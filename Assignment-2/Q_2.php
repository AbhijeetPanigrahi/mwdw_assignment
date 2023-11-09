<?php
function calculateTriangleArea($base, $height) {
    echo "Area of the triangle: ";
    echo 0.5 * $base * $height ."<br>"; 
}
function calculateRectangleArea($length, $width) {
    echo "Area of the rectangle: ";
    echo $length * $width ."<br>";
}
function calculateSquareArea($side) {
    echo "Area of the square: ";
    echo $side * $side ."<br>";
}
function calculateCircleArea($radius) {
    echo "Area of the circle: ";
    echo pi() * $radius * $radius ."<br>";
}

calculateTriangleArea(6, 8);
calculateRectangleArea(4, 10);
calculateSquareArea(2);
calculateCircleArea(3);
?>
