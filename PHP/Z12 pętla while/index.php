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
    $x = 1;
    while ($x <= 5) {
        echo "$x, ";
        $x++;
    }

    echo "<br><br>";
    echo "II pętla: <br>";
    $x = 10;
    while ($x >= 0) {
        echo "$x, ";
        $x-=2;
    }

    echo "<br><br>";
    echo "III pętla: <br>";
    $x = 1;
    do {
        echo "$x, ";
        $x++;
    } while ($x <= 5)

    
?>

</body>
</html>