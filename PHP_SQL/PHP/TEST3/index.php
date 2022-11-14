<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        <input type="submit" value="Sprawdź">
</form>
</body>
<?php
if (isset($_POST['a']) && isset($_POST['b'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a==$b){
        echo "$a = $b";
    }
    if ($a>$b){
        echo "$a > $b";
    }
    if ($a<$b){
        echo "$a < $b";
    }
}
?>
</html>