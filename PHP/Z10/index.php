<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        p: <input type="number" name="p"><br>
        k: <input type="number" name="k">
</from>
<p><input type="submit" value="Wypisz"></p>
<?php
if (isset($_POST['p']) && isset($_POST['k'])){
    $p = $_POST['p'];
    $k = $_POST['k'];

    for ($i = $p; $i<=$k; $i++) { 
        echo "$i <br>";
    }
}else {
    echo "Brak danych";
}
?>

</body>
</html>