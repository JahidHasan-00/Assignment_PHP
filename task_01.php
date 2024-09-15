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

    abstract class Shape{
        abstract public function areaMethod();
    }

    class Rectangle extends Shape{

        private $rectWidth;
        private $rectHeight;
        public function __construct($rectWidth, $rectHeight){
            $this->rectWidth = $rectWidth; 
            $this->rectHeight = $rectHeight;
        }
        public function areaMethod(){
            return $this->rectWidth * $this->rectHeight;
        }
    }

    class Circle extends Shape{

        private $shapeRadius;
        public function __construct($shapeRadius){
            $this->shapeRadius = $shapeRadius;
        }
        public function areaMethod(){
            return pi() * pow($this->shapeRadius,2);
        }
    }
    function showArea(Shape $shape){
        echo"Area of the  is " . $shape->areaMethod();
    }

    $circle = new Circle(5.8);
    showArea($circle);

    $rectangle = new Rectangle(5.8, 2.5);
    showArea($rectangle);

    ?>
</body>
</html>