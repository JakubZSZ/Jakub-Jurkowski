<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Portal społecznościowy</title>
</head>
<body>
    <section class="blewy">
        <h2>Nasze osiedle</h2>
    </section>
    <section class="bprawy">
        <?php
            $con = mysqli_connect('localhost','root','','portal');
            $sql = "SELECT COUNT(*) FROM `dane`;";
            $result = mysqli_query($con,$sql);
            while ($value = mysqli_fetch_row($result)) {
                echo "<h5>Liczba użtykowników portalu: $value[0]</h5>";
            }
        ?>
    </section>
    <section class="lewy">
        <h3>Logowanie</h3>
        <form action="" method="post">
            login <br><input type="text" name="login"><br>
            hasło <br><input type="password" name="hasło"><br>
            <input type="submit" value="Zaloguj">
        </form>
    </section>
    <section class="prawy">
        <h3>Wizytówka</h3>
        <?php
            if (isset($_POST['login']) && isset($_POST['hasło'])) {
                $log = $_POST['login'];
                $has = $_POST['hasło'];

                $sql = "SELECT haslo FROM `uzytkownicy` WHERE login='$log';";
                $result = mysqli_query($con,$sql);
                if (mysqli_num_rows($result) == 1) {
                    $sql = "SELECT haslo FROM `uzytkownicy` WHERE login='$log';";
                    $result = mysqli_query($con,$sql);
                    while ($value = mysqli_fetch_row($result)) {
                        $szyfr = sha1($has);
                        if ($szyfr == $value[0]) {
                            $sql = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM `uzytkownicy`, `dane` WHERE uzytkownicy.login='$log' AND dane.id = uzytkownicy.id;";
                            $result = mysqli_query($con,$sql);
                            while ($value = mysqli_fetch_row($result)) {
                                echo "<div class='wizytówka'>";
                                echo "<img src='$value[4]' alt='osoba' />";
                                $wiek = DATE("Y") - $value[1];
                                echo "<h4>$value[0] ($wiek)</h4>";
                                echo "<p>hobby: $value[3]</p>";
                                echo "<h1><img src='icon-on.png' /> $value[2]</h1>";
                                echo "<a href='dane.html'><input type='submit' value='Więcej informacji'></a>";
                                echo "</div>";
                            }
                        } else echo "hasło nieprawidłowe";
                    }
                } else echo "login nie istnieje";


            }
            mysqli_close($con);
        ?>
    </section>
    <section class="stopka">
        Stronę wykonał: 00000000000
    </section>
</body>
</html>