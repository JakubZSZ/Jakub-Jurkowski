<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOWA BAZA</title>
    <style>
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="post">
    ID: <input type="number" name="id"><br>
    Marka: <input type="text" name="marka"><br>
    Model: <input type="text" name="model"><br>
    Paliwo: ON<input type="radio" name="paliwo" value="ON">
            95/98<input type="radio" name="paliwo" value="95/98"><br>
    <input type="submit" value="Zapisz">
</form>
<?php

/* Tworzenie bazy
    $do_bazy = mysqli_connect('localhost','root','');
    if (!$do_bazy) {
        exit("Błąd połączenia z serwerem MySQL");
    }
    $baza_sql = "CREATE DATABASE Szkoła";
    if (mysqli_query($do_bazy, $baza_sql)) {
        echo "Baza została utworzona";
    } else {
        echo "Błąd! Nie można utworzyć bazy";
    }
    mysqli_close($do_bazy);
*/

if (isset($_POST['id']) && isset($_POST['marka']) 
&& isset($_POST['model']) && isset($_POST['paliwo'])){

$id = $_POST['id'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$paliwo = $_POST['paliwo'];

$conn = mysqli_connect('localhost','root','','Szkoła');

$sql = "INSERT INTO persons VALUES ($id, '$marka', '$model', '$paliwo')";

mysqli_query($conn, $sql);
mysqli_close($conn);
}
?>
<?php
    $conn = mysqli_connect('localhost','root','','Szkoła');

    $zapytanie = mysqli_query($conn, 'SELECT Marka, Model FROM persons');

    echo "<table>
         <tr>
         <th>Marka</th>
         <th>Model</th>
         </tr>";
    while ($rekord = mysqli_fetch_assoc($zapytanie)) {
        echo "<tr><td>".$rekord['Marka'].'</td> <td>'.$rekord['Model']."</td></tr>";
    }
    echo "</table>";

    mysqli_close($conn);
?>
</body>
</html>