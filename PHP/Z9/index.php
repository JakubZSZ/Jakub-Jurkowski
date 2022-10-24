<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź</title>
</head>
<body>
    <form action="" method="post">
    a: <input type="number" name="a">
    <input type="submit" value="Sprawdź">
</form>
<?php
if (isset($_POST['a'])){
    $a = $_POST['a'];

    if ($a>0){
        echo "$a > 0";
        }
    if ($a<0){
        echo "$a < 0";
    }
    if ($a==0){
        echo "$a = 0";
    }
}
?>
</body>
</html>