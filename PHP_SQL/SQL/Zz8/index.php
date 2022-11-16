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
    Imie: <input type="text" name="imie"><br>
    Nazwisko: <input type="text" name="nazwisko"><br>
    Płeć: <select name="plec">
        <option value="Mężczyzna">M</option>
        <option value="Kobieta">K</option>
        <option value="Brak">Brak</option>
    </select>
    <input type="submit" value="Zapisz">
</form>
<?php
if (isset($_POST['id']) && isset($_POST['imie']) 
&& isset($_POST['nazwisko']) && isset($_POST['plec'])){

$id = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$plec = $_POST['plec'];

$conn = mysqli_connect('localhost','root','','OG');

$sql = "INSERT INTO ag VALUES ($id, '$imie', '$nazwisko', '$plec')";

mysqli_query($conn, $sql);
}
$conn = mysqli_connect('localhost','root','','OG');
$zapytanie = mysqli_query($conn, 'SELECT id, imie, nazwisko, pleć  FROM ag');

    echo "<table>
         <tr>
         <th>ID</th>
         <th>Imie</th>
         <th>Nazwisko</th>
         <th>Pleć</th>
         </tr>";
    while ($rekord = mysqli_fetch_assoc($zapytanie)) {
        echo "<tr>
                <td>".$rekord['id'].'</td> 
                <td>'.$rekord['imie']."</td>
                <td>".$rekord['nazwisko'].'</td> 
                <td>'.$rekord['pleć']."</td> 
             </tr>";
    }
    echo "</table>";
    mysqli_close($conn);

?>
</body>
</html>