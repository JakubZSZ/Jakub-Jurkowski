<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole trójkąta</title>
</head>
<body>
<form action="" method="post">
<p>a: <input type="number" name="a"></p>
<p>b: <input type="number" name="b"></p>
<select name="prostokąt">
    <option value="pole">Pole</option>
    <option value="obwód">Obwód</option>
</select>
<p><input type="submit" value="Oblicz"></p>
</form>
<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['prostokąt']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $prostokąt = $_POST['prostokąt'];
    
    switch($prostokąt){
        case 'pole':
            echo "Pole: $a * $b =" . $a * $b;
            break;
        case 'obwód':
            echo "Obwód: (2*$a) + (2*$b) =" . 2*$a + 2*$b;
            break;
        default:
            break;
    }

}
?>
</body>
</html>