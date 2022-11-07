<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    echo "I pętla: <br>";
    for ($i=5; $i <= 15; $i++) { 
        echo "$i, ";
    }
    
    echo "<br><br>";
    echo "II pętla: <br>";
    for ($i=0; $i <= 100 ; $i+=10) { 
        echo "$i, ";
    }
    echo "<br><br>";
    echo "III pętla: <br>";
    for ($i=100; $i >= 0 ; $i-=5) { 
        echo "$i, ";
    }

    echo "<br><br>";
    echo "IV pętla: <br>";
    for ($i=0; $i <= 10 ; $i++) { 
        echo "2 * $i = ".(2*$i)."<br>";
    }

    echo "<br>";
    echo "V pętla: <br>";
    for ($i=1; $i <= 10 ; $i++) {
        for ($x=1; $x <=10 ; $x++) { 
            echo "$i * $x = ".($i*$x)."<br>"; 
        } 
        echo "<br>";
    }
?>

</body>
</html>