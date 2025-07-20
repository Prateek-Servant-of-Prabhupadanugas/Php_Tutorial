<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings-in-Php</title>
</head>
<body>
    <h1>Strings in PHP - Hari Hari </h1>

    <h3> In Strings , we can use single quotes or double quotes to define a string </h3>
    <br>
    <h2>String Functions in PHP</h2>
    <h3>Strlen Function - Input -> String , Output -> length of string(number)</h3>
    <?php
    $string = "Hello, World!";
    $length = strlen($string); // write string inside parenthesis inside strlen function
    echo "my string is : $string <br>";
    echo "The length of the string is: $length <br>"; // Outputs: 13
    echo "function used is strlen() <br>";
    ?>

    <h3>Strpos Function -> Input (Larger String , Smaller String) , Output -> Position of smaller string inside Large String </h3>
    <?php

    $largerString = "Hare Krishna to all PHP Learners" ;
    $smallerString = "PHP";
    $position = strpos($largerString, $smallerString); // write larger string and smaller string inside parenthesis inside strpos function
    echo "Larger String is : $largerString <br>";
    echo "Smaller String is : $smallerString <br>";
    echo "The position of the smaller string in the larger string is: $position <br>"; // Outputs: 18
    ?>

    <h3> str_word_count Function -> Input -> String , Output -> Number of words in the string </h3>
    <?php
    $text = "Hare Krishna to all PHP Learners";
    $wordCount = str_word_count($text); // write string inside parenthesis inside str_word_count function
    echo "Text is : $text <br>";
    echo "The number of words in the string is: $wordCount <br>"; // Outputs: 6
    ?>

    <h2> String Modifying Functions in PHP </h2>
    <h3>Strtoupper Function -> Input -> String , Output -> String in Uppercase</h3>
    <?php
    $originalString = "Hare Krishna to all PHP Learners";
    $upperCaseString = strtoupper($originalString) ; 
    echo "Original String is : $originalString <br>";
    echo "String in Uppercase is : $upperCaseString <br>"; // Outputs: "HARE KRISHNA TO ALL PHP LEARNERS"


    ?>

    <h3>Strtolower Function -> Input -> String , Output -> String in Lowercase</h3>
    <?php
    $originalString = "Hare Krishna to all PHP Learners";
    $lowerCaseString = strtolower($originalString) ;
    echo "Original String is : $originalString <br>";
    echo "String in Lowercase is : $lowerCaseString <br>"; // Outputs: "hare krishna to all php learners"
    ?>

    <h3>str_replace Function -> Input -> (String to be replace , String to replace with , Original String)
    , Output -> Modified String</h3>

    <?php
    $originalString = "Hare Krishna to all PHP Learners";
    $stringToReplace = "Learners" ;
    $replaceWith = "Developers" ; 
    $modifiedString = str_replace($stringToReplace , $replaceWith , $originalString);
    echo "Original String is : $originalString <br>";
    echo "String to be replaced is : $stringToReplace <br>";
    echo "String to replace with is : $replaceWith <br>";
    echo "Modified String is : $modifiedString <br>"; // Outputs: "Hare Krishna to all PHP Developers"
    ?>

    <h3> strrev Function -> Input -> String , Output -> Reversed String</h3>
    <?php
    $originalString = "Hare Krishna";
    $reversedString = strrev($originalString);
    echo "Original String is : $originalString <br>";
    echo "Reversed String is : $reversedString <br>"; // Outputs: "anhsirK eraH"
    ?>

    <h3> trim Function -> Input -> String , Output -> String with Whitespace removed from both ends </h3>
    <?php
    $originalString ="            Hare Krishna to all PHP Learners     ";
    $trimmedString = trim($originalString);
    echo "Original String is : $originalString <br>";
    echo "Trimmed String is : $trimmedString <br>"; // Outputs: "Hare Krishna to all PHP Learners"
    ?>
</body>

</html>