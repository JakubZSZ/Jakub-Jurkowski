<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section class="lewy">
            <h3>Ryby zamieszkujące rzeki</h3>
            <ol>
            <?php
            $con = mysqli_connect('localhost','root','','wedkowanie');
            $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM `ryby`, `lowisko` WHERE ryby.id = lowisko.Ryby_id AND lowisko.rodzaj = 3;";
            $result = mysqli_query($con,$sql);
            while ($value = mysqli_fetch_row($result)) {
                echo "<li>$value[0] pływa w rzece $value[1], $value[2],</li>";
            }
            ?>
            </ol>
        </section>
        <section class="prawy">
            <img src="ryba1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
        <section class="llewy">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <?php
                $sql1 = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1;";
                $result1 = mysqli_query($con,$sql1);
                while ($value1 = mysqli_fetch_row($result1)) {
                    echo "<tr>
                            <td>$value1[0]</td>
                            <td>$value1[1]</td>
                            <td>$value1[2]</td>
                            </tr>";
                }

                mysqli_close($con);
                ?>
            </table>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>