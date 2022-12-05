<?php
if (!isset($_COOKIE['moje'])) {
    setcookie('moje','ciacho1',time()+7200);
    $info = "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
}else{
    $info = "<p><i>Witaj ponownie na stronie lotniska</i></p>";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Port lotniczy</title>
</head>
<body>
    <section class="baner1">
        <img src="zad5.png" alt="logo lotnisko">
    </section>
    <section class="baner2">
        <h1>Przyloty</h1>
    </section>
    <section class="baner3">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz...</a>
    </section>
    <section class="glowny">
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <?php
            $con = mysqli_connect('localhost','root','','egzamin');
            $sql ="SELECT czas, kierunek, nr_rejsu, status_lotu FROM `przyloty` ORDER BY czas ASC;";
            $result = mysqli_query($con,$sql);
            while ($value = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$value[0]</td>";
                echo "<td>$value[1]</td>";
                echo "<td>$value[2]</td>";
                echo "<td>$value[3]</td>";
                echo "</tr>";
            }
            mysqli_close($con);
            ?>
        </table>
    </section>
    <section class="stopka1">
        <?php
        echo "$info";
        ?>
    </section>
    <section class="stopka2">
        Autor: 00000000000
    </section>
</body>
</html>