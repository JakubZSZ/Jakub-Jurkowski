<?php
if (!isset($_COOKIE['moje'])) {
    setcookie('moje','ciacho1');
    $info = "Ciasteczko nie jest ustawione";
}else{
    $info = "Ciasteczko jest ustawione, a jego wartością jest ".$_COOKIE['moje'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
    echo "$info";
    ?>
</body>
</html>