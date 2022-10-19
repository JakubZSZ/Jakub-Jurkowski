<html lang="pl" class="php">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>SUMA</p>";
    $a=$_POST['a'];
    $b=$_POST['b'];
    $suma=$a+$b;
    echo "<p><h3>$a + $b = $suma</h3></p>";
    ?>
</body>
</html>