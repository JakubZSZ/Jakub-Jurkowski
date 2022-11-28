<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Forum o psach</title>
</head>
<body>
    <header>
        <h1>Forum miłośników psów</h1>
    </header>
    <main>
        <section class="lewy">
            <img src="Avatar1.png" alt="Użytkownik forum">
            <?php
            $con = mysqli_connect('localhost','root','','forumpsy');
            $sql = "SELECT konta.nick, konta.postow, pytania.pytanie FROM `konta`, `pytania` WHERE konta.id = pytania.konta_id AND pytania.id = 1;";
            $result = mysqli_query($con,$sql);
            while ($value = mysqli_fetch_row($result)) {
                echo "<h4>Użytkownik $value[0]</h4>
                      <p>$value[1] postów na forum</p>
                      <p>$value[2]</p>
                ";
            }
            ?>
            <video src="video.mp4" controls loop></video>
        </section>
        <section class="prawy">
            <form action="" method="post">
                <textarea name="dane" rows="4" cols="40"></textarea><br>
                <input type="submit" value="Dodaj odpowiedź">
            </form>
            <?php
            if (isset($_POST["dane"])) {
                $dane = $_POST['dane'];
                $sql1 = "INSERT INTO `odpowiedzi`(`Pytania_id`, `konta_id`, `odpowiedz`) VALUES (1, 5,'$dane');";
                mysqli_query($con,$sql1); 
            }
            ?>
            <h2>Odpowiedzi na pytanie</h2>
            <ol>
                <?php
                $sql2 = "SELECT odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi, konta WHERE odpowiedzi.konta_id = konta.id AND odpowiedzi.Pytania_id = 1;";
                $result2 = mysqli_query($con,$sql2);
                while ($value2 = mysqli_fetch_row($result2)) {
                    echo "<li>$value2[0] <em>$value2[1]</em></li><hr/>";
                }
                mysqli_close($con);
                ?>  
            </ol>
        </section>
    </main>
    <footer>
        Autor: 00000000000 <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
    </footer>
</body>
</html>