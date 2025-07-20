<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $marks=40;
    if($marks>90){
        echo"A";
    }
    elseif($marks>80){
        echo"B";
    }
    elseif($marks>70){
        echo"C";
    } 
    else{
        echo "fail" ;
    }
    ?>
</body>
</html>