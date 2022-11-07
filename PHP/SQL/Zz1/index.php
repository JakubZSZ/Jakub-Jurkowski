<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
    <?php
    $do_bazy = mysqli_connect('localhost','root','');
    if (!$do_bazy) {
        exit("Błąd połączenia z serwerem MySQL");
    }
    $baza_sql = "CREATE DATABASE moje_kino";
    if (mysqli_query($do_bazy, $baza_sql)) {
        echo "Baza została utworzona";
    } else {
        echo "Błąd! Nie można utworzyć bazy";
    }
    mysqli_close($do_bazy);
    ?>
</body>
</html>