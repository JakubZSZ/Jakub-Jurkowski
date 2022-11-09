<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        Imie: <input type="text" name="a"><br>
        Nazwisko: <input type="text" name="b"><br>
        Płeć: M<input type="radio" name="p" value="M">
        K<input type="radio" name="p" value="K"><br>
        <input type="submit" value="Sprawdź">
</form>
</body>
<?php
if (isset($_POST['a']) && isset($_POST['b'])  && isset($_POST['p'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $p = $_POST['p'];

    switch ($p) {
        case 'M':
            echo "Pan $a $b.";
            break;
        case 'K':
                echo "Pani $a $b.";
            break;
        default:
            break;
    }
}
?>
</html>