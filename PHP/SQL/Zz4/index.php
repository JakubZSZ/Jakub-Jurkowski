<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
    <form action="" method="post">
    ID: <input type="number" name="id"><br>
    Imie: <input type="text" name="imie"><br>
    Nazwisko: <input type="text" name="nazwisko"><br>
    Wiek: <input type="number" name="wiek"><br>
    <input type="submit" value="Zapisz">
</form>
    <?php
    if (isset($_POST['id']) && isset($_POST['imie']) && isset($_POST['nazwisko'])
    && isset($_POST['wiek']))
    {
    
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];

    $conn = mysqli_connect('localhost','root','','daneosobowe');
    if (!$conn) {
        die("Błąd połączenia z serwerem MySQL");
    }

    $sql = "INSERT INTO uczen (ID, Imie, Nazwisko, Wiek) VALUES ($id, '$imie', '$nazwisko', '$wiek');";

    if (mysqli_query($conn, $sql)) {
        echo "Działa";
    }else {
        echo "Nie działa";
    }
    mysqli_close($conn);
}
    ?>
</body>
</html>