<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting - Type Changing</title>
</head>
<body>
    <h5>
        <pre>
            (string)
            $a = 5 ; // Integer
            $a = (string) $a ; 
        </pre>
        <?php 
        $a = 5 ; 
        echo "<br>" ; 
        var_dump($a) ;
        echo "<br>" ;  
        $a = (string) $a;
        var_dump($a);

        $a = 4 ; 
        $b = 4.56 ; 
        $c = "hare krishna" ; 
        $d = true ; 
        $e = NULL ; 

        $a = (string) $a ; 
        $b = (string) $b ; 
        $c = (string) $c ; 
        $d = (string) $d ; 
        $e = (string) $e ; 

        echo "<br><br>", $a , "<br>" , $b , "<br>" , $c , "<br>" , $d , "<br>" , $e ; 

        
        ?>

    </h5>
</body>
</html>