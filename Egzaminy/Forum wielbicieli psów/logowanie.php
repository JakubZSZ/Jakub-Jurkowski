<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Forum o psach</title>
</head>
<body>
    <div class="baner">
        <h1>Forum wielbicieli psów</h1>
    </div>
    <div class="blewy">
        <img src="obraz.jpg" alt="foksterier">
    </div>
    <div class="bprawy">
        <h2>Zapisz się</h2>
        <form action="" method="post">
            login: <input type="text" name="login"><br>
            hasło: <input type="password" name="haslo"><br>
            powtórz hasło: <input type="password" name="phaslo"><br>
            <input type="sumbit" value="Zapisz">
            <?php 
                if (isset($_POST['login']) && 
                    isset($_POST['haslo']) && 
                    isset($_POST['phaslo'])) {
                    
                    $log = $_POST['login'];
                    $hasl = $_POST['haslo'];
                    $phasl = $_POST['phaslo'];
                    
                    $con = mysqli_connect('localhost','root','','psy');

                    if ($log ==""  || $hasl =="" || $phasl =="") {
                        echo "<p>wypełnij wszystkie pola</p>";
                    }

                    $sql = "SELECT login FROM `uzytkownicy` WHERE $log;";
                    $result = mysqli_query($con,$sql);
                    while ($value = mysqli_num_row($result)) {
                        if ($value > 0) {
                            echo "<p>login występuje w bazie danych</p>"; 
                        }                   
                    }
                    
                    if ($hasl != $phasl) {
                        echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                    }

                    

                    

                    mysqli_close($con);
                }
            ?>
        </form>
    </div>
    <div class="prawy">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div class="stopka">
        Stronę wykonał: 00000000000
    </div>
</body>
</html>