<html lang="pl" class="php">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=$_POST['a'];
    $b=$_POST['b'];

    $wynik=($a*$b)/2;
    echo "<p>Pole Trójątka</p>";
    echo "<p>0,5 * ".$a."cm * ".$b."cm = ".$wynik."cm<sup>2</sup></p>";
    
    
    
    ?>
</body>
</html>