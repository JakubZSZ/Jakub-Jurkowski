<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form acrion="" method="post">
        a <input type="number" name="a"><br><br>
        b <input type="number" name="b"><br><br>
        + <input type="radio" value="+" name="liczby">
        - <input type="radio" value="-" name="liczby">
        * <input type="radio" value="*" name="liczby"><br>
          <input type="submit" value="oblicz">
</form>
<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['liczby']))
{
    $a = $_POST['a']; 
    $b = $_POST['b'];
    $działania = $_POST['liczby'];

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
        default:
        break;   
    }
}


?>
</body>
</html>