<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
<form action="" method="post">
        a: <input type="text" name="wypisz"><br>
        Ile razy: <input type="number" name="ilosc"><br>
        <input type="submit" value="Wypisz">
</form>
<?php
if (isset($_POST['wypisz']) && isset($_POST['ilosc'])) {

    $x = $_POST['wypisz'];
    $y = $_POST['ilosc'];
    for ($i=1; $i<=$y; $i++) { 
        echo "$x * $i = ".($x*$i)."<br>";
    }
}
?>
</body>
</html>