<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="" method="post">
<p>a: <input type="number" name="a"></p>
<p>b: <input type="number" name="b"></p>
<p>Dizałanie:</p>
<p>+ <input type="radio" name="działanie" value="+">
- <input type="radio" name="działanie" value="-">
* <input type="radio" name="działanie" value="*">
/ <input type="radio" name="działanie" value="/"></p>
<p><input type="submit" value="Oblicz"></p>
</form>
<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['działanie']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $działania = $_POST['działanie'];

    switch($działania){
        case '+':
        echo "$a + $b =" . $a + $b;
        break;
        case '-':
        echo "$a - $b =" . $a - $b;
        break;
        case '*':
        echo "$a * $b =" . $a * $b;
        break; 
        case '/':
        echo "$a / $b =" . $a / $b;
        break;
        default:
        break;   
    }
}
?>
</body>
</html>