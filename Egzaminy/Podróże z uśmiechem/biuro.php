<?php
if (!isset($_COOKIE['ciastko'])) {
    setcookie('ciastko',1);
    $info ="<p>Witaj! Nasza strona używa ciasteczek</p>";
}else{
    $info ="<p>Witaj ponownie na naszej stronie</p>";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Turystyka moja pasja</title>
</head>
<body>
    <section class="baner">
        <h1>Podróże z uśmiechem</h1>
    </section>
    <section class="blokcookie">
        <?php
        echo "$info";
        ?>
    </section>
    <section class="lewy">
        <h2>Nasze wycieczki</h2>
        <ol>
            <li>autkarowe</li>
            <ul>
                <li>po Polsce</li>
                <li>do Niemiec i Czech</li>
            </ul>
            <li>samolotem</li>
            <ul>
                <li>Grecja</li>
                <li>Barcelona</li>
                <li>Wenecja</li>
            </ul>
        </ol>
        <h2>Pobierz dokumenty</h2>
        <p><a href="regulamin.txt">Regulamin biura podróży</a></p>
        <p><a href="http://galeria.pl/">Zdjęcia z naszych wycieczek</a></p>
   </section>
    <section class="prawy">
        <table>
            <tr>
                <td><img src="polska.jpg" alt="Zwiedzanie Krakowa"></td>
                <td><img src="wlochy.jpg" alt="Wenecja i nie tylko"></td>
            </tr>
            <tr>
                <td><img src="grecja1.jpg" alt="Gorące greckie wyspy"></td>
                <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona"></td>
            </tr>
        </table>
    </section>
    <section class="stopka">
        Stronę przygotował: 00000000000
    </section>
</body>
</html>