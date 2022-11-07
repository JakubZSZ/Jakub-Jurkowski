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
        Nazwa tabeli <input type="text" name="nazwa_tabeli"><br>
        Nazwa pola1 <input type="text" name="nazwa_pola1"><br>
        Nazwa pola2 <input type="text" name="nazwa_pola2"><br>
        <input type="submit" value="Utwórz">
</form>
    <?php
if (isset($_POST['nazwa_tabeli']) && isset($_POST['nazwa_pola1']) && isset($_POST['nazwa_pola2'])) {
    $do_bazy = mysqli_connect('localhost','root','','test');
    if (!$do_bazy) 
        exit("Błąd połączenia z serwerem MySQL");
    
        $nazwa_tabeli = $_POST['nazwa_tabeli'];
        $pola1 = $_POST['nazwa_pola1'];
        $pola2 = $_POST['nazwa_pola2'];

    $baza_sql = "CREATE TABLE $nazwa_tabeli (ID int, $pola1 varchar(255), $pola2 varchar(255))";

    if (mysqli_query($do_bazy, $baza_sql)) 
        echo "Baza została utworzona";
    else 
        echo "Błąd! Nie można utworzyć bazy";
    
    mysqli_close($do_bazy);
}
    ?>
</body>
</html>