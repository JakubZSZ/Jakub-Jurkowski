<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka publiczna</title>
</head>
<body>
        <section class="baner">
            <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
        </section>
        <section class="lewy">
            <h2>Dodaj czytelinka</h2>
            <form action="biblioteka.php" method="post">
                imię: <input type="text" name="imie"><br>
                nazwisko: <input type="text" name="nazwisko"><br>
                rok urodzenia: <input type="number" name="data"><br>
                <input type="submit" value="DODAJ">
            </form>
            <?php
            $con = mysqli_connect('localhost','root','','biblioteka');
            if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['data'])) {
            
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok = $_POST['data'];
                $kod =  $imie[0].$imie[1].$rok[-2].$rok[-1].$nazwisko[0].$nazwisko[1];
                $kod = strtolower($kod);
                $sql = "INSERT INTO `czytelnicy` VALUES (NULL,'$imie','$nazwisko','$kod');";
                mysqli_query($con,$sql);
                echo "Czytelnik: $nazwisko został dodany do bazy danych";
            }
            ?>
        </section>
        <section class="srodek">
            <img src="biblioteka.png" alt="biblioteka">
            <h4>ul. Czytelnicza 25<br>
                12-120 Książkowice<br> 
                tel.: 123123123<br> 
                e-mail: <a href="biuro@bib.pl">biuro@bib.pp</a>
            </h4>
        </section>
        <section class="prawy">
            <h3>Nasi czytelnicy</h3>
            <ul>
                <?php
                    $sql = "SELECT imie, nazwisko FROM `czytelnicy`;";
                    $result = mysqli_query($con,$sql);
                    while ($value = mysqli_fetch_row($result)) {
                        echo "<li>$value[0] $value[1]</li>";
                    }
                    mysqli_close($con);
                ?>
            </ul>
        </section>
        <section class="stopka">
            <p>Projekt witryny: 00000000000</p>
        </section>
</body>
</html>
