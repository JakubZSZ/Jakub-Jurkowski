<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Opinie klientów</title>
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <?php
            $con = mysqli_connect('localhost','root','','hurtownia');
            $sql1 = "SELECT klienci.zdjecie, klienci.imie, opinie.opinia FROM `klienci`, `opinie`, `typy` WHERE klienci.id = opinie.Klienci_id AND typy.id = klienci.Typy_id AND typy.id IN(2,3);";
            $resul = mysqli_query($con,$sql1);
            while ($value1 = mysqli_fetch_row($resul)) {
                echo "<div class='option'>
                <img src='$value1[0]' alt='klient'></img>
                <blockquote>$value1[2]</blockquote>
                <h4>$value1[1]</h4>
                </div>";
            }
        ?>
    </main>
    <footer>
        <section class="f1">
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </section>
        <section class="f2">
            <h3>Nasi top klienci</h3>
            <ol>
                <?php
                    $sql2 = "SELECT imie, nazwisko, punkty FROM `klienci` ORDER BY punkty DESC LIMIT 3;";
                    $resul2 = mysqli_query($con,$sql2);
                    while ($value = mysqli_fetch_row($resul2)) {
                        echo "<li>$value[0] $value[1], $value[2] pkt.</li>";
                    }
                    mysqli_close($con);
                ?>
            </ol>
        </section>
        <section class="f3">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </section>
        <section class="f4">
            <h3>Autor: 00000000000</h3>
        </section>
    </footer>
</body>
</html>