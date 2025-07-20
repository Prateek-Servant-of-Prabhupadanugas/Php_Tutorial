<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $button="Off";
    if($button=="On"){
        //If-block
    } else {
        //else-block
    }

    switch($button){
        case "On":
            echo "<h1>This is my God</h1>";
            break;
        case "Off":
            echo "Code Became False";    
            break;
        default:
            echo "This will run always -Hare Krishna" ;   
    }

    ?>
</body>
</html>