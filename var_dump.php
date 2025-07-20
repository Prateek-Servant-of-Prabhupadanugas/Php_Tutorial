<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hare Krishna to All PHP Learners</title>
</head>
<body>
    <h1>Hare Krishna to All PHP Learners</h1>
    <div class="container">
        Var Dump Examples
    </div>    
    Var dump in String <br> 
    <code>
    <?php
    $greeting = "<br><br>My String Variable" ; 
    var_dump($greeting);
    // echo "<br> The value of the variable is: $greeting";
    ?>
    </code>

    <br><br>
    Float Variable Example <br>
    <code>
    <?php
    $PIE= 3.14159265358979323846; // Example of a float variable
    var_dump($PIE);
?> </code>

<br><br>
    Integer Variable Example <br>
    <code>
    <?php
    $number = 42; // Example of an integer variable
    var_dump($number);
    ?>
    </code>

    <br><br>
    Boolean Variable Example <br>
    <code>
    <?php
    $isTrue = true; // Example of a boolean variable
    var_dump($isTrue);
    ?>
    </code>

    <br><br>
    Array Variable Example <br>
    <?php
    $fruits = array("Apple", "Banana", "Cherry"); // Example of an array variable
    var_dump($fruits);
    ?>
    <br><br>
    Object Variable Example <br>
    <?php
    class Car {
        public $brand;
        public $model;

        function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }
    }
    $myCar = new Car("Toyota", "Corolla"); // Example of an object variable
    var_dump($myCar);
    ?>
    <br><br>
    Null Variable Example <br>
    <?php
    $nothing = null; // Example of a null variable
    var_dump($nothing); 
    ?>
    <br><br>
    Resource Variable Example <br>
    <?php
    $file = fopen("example.txt", "w"); // Example of a resource variable
    if ($file) {
        var_dump($file);
        fclose($file); // Close the file resource
    } else {
        echo "Failed to open file.";
    }
    ?>
    <br><br>
    <div class="container">
        <p>Thank you for learning PHP with us!</p>
    
</body>
</html>