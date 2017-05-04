<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(8, 4);
echo "The area of this rectangle is: " . $rectangle->area() . PHP_EOL;
echo "The perimiter of this square is: " . $rectangle->perimeter() . PHP_EOL;

$square = new Square(5);
echo "The area of this square is: " . $square->area() . PHP_EOL;
echo "The perimiter of this square is: " . $square->perimeter() . PHP_EOL;





?>