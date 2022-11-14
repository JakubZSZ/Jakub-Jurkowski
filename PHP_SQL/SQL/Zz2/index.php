<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
    <form action="" method="post">
        <p>Baza Danych</p>
        Nazwa bazy <input type="text" name="nazwa_bazy"><br>
        <input type="submit" value="Utwórz">
</form>
    <?php
if (isset($_POST['nazwa_bazy'])) {
    $do_bazy = mysqli_connect('localhost','root','');
    if (!$do_bazy) 
        exit("Błąd połączenia z serwerem MySQL");
    
    $baza_sql = "CREATE DATABASE " . $_POST['nazwa_bazy'];

    if (mysqli_query($do_bazy, $baza_sql)) 
        echo "Baza została utworzona";
    else 
        echo "Błąd! Nie można utworzyć bazy";
    
    mysqli_close($do_bazy);
}
    ?>
</body>
</html>