<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
    <style>
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th colspan='2'>Dane</th>
            </tr>
            <tr>
                <td>Imie:</td>
                <td><input type="text" name="imie"></td>
            </tr>
            <tr>
                <td>Nazwisko:</td>
                <td><input type="text" name="nazwisko"></td>
            </tr>
            <tr>
                <td>Wiek:</td>
                <td><input type="number" name="wiek"></td>
            </tr>
            <tr>
                <td>Płeć:</td>
                <td>M:<input type="radio" name="plec" value="Mężczyzna">
                K:<input type="radio" name="plec" value="Kobieta">
                Brak danych:<input type="radio" name="plec" value="Brak danych"></td>
            </tr>
            <tr>
                <td>Zainteresowania:</td>
                <td>Sport<input type="checkbox" name="sport" value="Sport">
                Muzyka<input type="checkbox" name="muzyka" value="Muzyka">
                Turystyka<input type="checkbox" name="turystyka" value="Turystyka"></td>
            </tr>
            <tr>
                <td>Zamieszkanie:</td>
                <td><select name="zam"><option>Wieś</option><option>Miasto</option></select>
            </tr>
            <tr>
                <td colspan='2'><input type="submit" value="Zapisz"></td>
            </tr>
        </table>
    <?php
    if (isset($_POST['imie']) &&
        isset($_POST['nazwisko']) &&
        isset($_POST['wiek']) &&
        isset($_POST['plec']) &&
        isset($_POST['zam'])){

        $i = $_POST['imie'];
        $n = $_POST['nazwisko'];
        $w = $_POST['wiek'];
        $p = $_POST['plec'];
        $zam = $_POST['zam'];
        $zain = " ";

        if (isset($_POST['sport'])) {
            $zain = $zain." ".$_POST['sport'];
        }
        if (isset($_POST['muzyka'])) {
            $zain = $zain." ".$_POST['muzyka'];
        }
        if (isset($_POST['turystyka'])) {
            $zain = $zain." ".$_POST['turystyka'];
        }
        
        $conn = mysqli_connect('localhost','root','','agh');

        $sql = "INSERT INTO `typ` (`Imie`, `Nazwisko`, `Wiek`, `Płeć`, `Zainteresowania`, `Zamieszkanie`) VALUES ('$i','$n','$w','$p','$zam','$zain')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);

        echo "<table>
                <tr>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Wiek</th>
                    <th>Płeć</th>
                    <th>Zainteresowanie</th>
                    <th>Zamieszkanie</th>
                </tr>
                <tr>
                    <td>$i</td>
                    <td>$n</td>
                    <td>$w</td>
                    <td>$p</td>
                    <td>$zain</td>
                    <td>$zam</td>
                </tr>
              </table>
              ";

    
    }
    ?>
</body>
</html>