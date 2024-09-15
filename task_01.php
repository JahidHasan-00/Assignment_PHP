<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Inheritance</title>
</head>
<body>
    <!-- **Task 1: Class Inheritance**
Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation. You can use the provided example code as a reference. -->

    <?php 
    // Area of the circle is pi * radius^2
    // Area of the rectangle is width * height

    function showArea(Shape $shape){
        echo"Area of the ". $shape->getName() . " is " . $shape->area();
    }

    $circle = new Circle(2.4);
    showArea($circle);

    ?>
</body>
</html>