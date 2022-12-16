<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>
<body>
    <section class="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </section>
    <section class="mecze">
        <?php
            $con = mysqli_connect('localhost','root','','egzamin1');
            $sql = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM `rozgrywka` WHERE zespol1 = 'EVG';";
            $result = mysqli_query($con,$sql);
            while ($value = mysqli_fetch_row($result)) {
                echo "<div class='meczebaner'>
                        <h3>$value[0] - $value[1]</h3>
                        <h4>$value[2]</h4>
                        <p>w dniu: $value[3]</p>
                </div>";
            }
        ?>
    </section>
    <section class="glowny">
        <h2>Reprezentacja Polski</h2>
    </section>
    <section class="lewy">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy)</p>
        <form action="futbol.php" method="post">
            <input type="number" name="liczba">
            <input type="submit" value="Sprawdź">
        </form>
        <ul>
            <?php
                if (isset($_POST['liczba'])) {
                    $liczba = $_POST['liczba'];

                    $sql = "SELECT imie, nazwisko FROM `zawodnik` WHERE pozycja_id = '$liczba';";
                    $result = mysqli_query($con,$sql);
                    while ($value = mysqli_fetch_row($result)) {
                        echo "<p><li>$value[0] $value[1]</li></p>";
                    }
                }
                mysqli_close($con);
            ?>
        </ul>
    </section>
    <section class="prawy">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 00000000000</p>
    </section>
</body>
</html>