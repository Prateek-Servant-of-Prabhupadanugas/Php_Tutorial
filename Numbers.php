<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    Different types of numbers in PHP are:
    <ul>
        <li>Integer</li>
        <li>Float</li>
        <li>Numbered String</li>
        <li>INfinity</li>
        <li>NaN (Not a Number)</li>
    </ul>
    <h2>Integers in PHP</h2>
    <p>Integers are whole numbers without a decimal point. They can be positive or negative.</p>
    Computer Space -> 4 bytes (32 bits)
    <p>Example of Integer: 42, -7, 0</p>
    Range of Integers in php : -2,147,483,648 to 2,147,483,647 (on a 32-bit system)
    2^31 - 1 = 2,147,483,647
    -2^31 to 2^31 - 1 = -2,147,483,648 to 2,147,483,647

    1 bit -> 0 or 1 (2 values)
    2 bits -> 00, 01, 10, 11 (4 values)
    3 bits -> 000, 001, 010, 011, 100, 101, 110, 111 (8 values)
    .
    .
    .
    31 bits -> 2^31 values (2,147,483,648 values)
<?php
echo "PHP Integer Maximum and Minimum Values:<br>";
echo PHP_INT_MAX; // Outputs the maximum integer value - 2^63 - 1 = 9,223,372,036,854,775,807
echo "<br>";
echo PHP_INT_MIN; // Outputs the minimum integer value -2^63 = -9,223,372,036,854,775,808
echo "<br>";
echo PHP_INT_SIZE; // Outputs the size of an integer in bytes (8 bytes on a 64-bit system)
echo "<br>";


echo "Similar Such exist for Float, Numbered String, Infinity, NaN etc.<br>";
echo "PHP Float Maximum and Minimum Values:<br>";
echo PHP_FLOAT_MAX; // Outputs the maximum float value - 1.79 * 10^308
echo "<br>";
echo PHP_FLOAT_MIN; // Outputs the minimum float value
echo "<br>";
echo "PHP Float Digits:" , PHP_FLOAT_DIG; // Outputs the number of significant digits for float
echo "<br>";

$x = 2.0e309 ;
echo "Example of Float: $x <br>"; // Outputs "INF" because 2.0e309 exceeds the maximum float value

$y = sqrt(-1);
echo "Example of Nan Value: $y <br>"; // Outputs "INF" because division by zero results in infinity

echo "<h1> Some Functions to Check: </h1>";
echo "is_int(42): " . true . "<br>"; // true
echo "is_float(3.14): " . true . "<br>"; // true
echo "is_numeric('123'): " .true . "<br>"; // true
echo "is_numeric('abc'): " . false . "<br>"; // false
echo "is_infinite(INF): " . true  . "<br>"; // true
echo "is_nan(NAN): " . true . "<br>"; // true
echo "is_finite(1.0): " . true . "<br>"; // true


?>
</body>
</html>