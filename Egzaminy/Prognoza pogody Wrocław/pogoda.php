<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <div class="blewy">
        <img src="logo.png" alt="meteo" height="80px">
    </div>
    <div class="srodek">
        <h1>Prognoza dla Wrocławia</h1>
    </div>
    <div class="bprawy">
        <p>maj, 2019 r.</p>
    </div>
    <div class="glowny">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $conn = mysqli_connect('localhost','root','','prognoza');
                $sql = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC;";
                $result = mysqli_query($conn,$sql);
                while($value = mysqli_fetch_row($result)) {
                    echo "<tr>
                    <td>$value[2]</td>
                    <td>$value[3]</td>
                    <td>$value[4]</td>
                    <td>$value[5]</td>
                    <td>$value[6]</td>
                    </tr>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław" height="200px">
    </div>
    <div class="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>