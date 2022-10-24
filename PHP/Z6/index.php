<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz zgłoszeniowy</title>
    <style>
        table{
            width: 30%;
            height: 300px;  
            background-image: url("tło.png");
            margin: auto;
        }
        input[type="submit"]{
            background-color: #777777;
            color: white;
            font-family: Verdana;
            height: 40px;
        }
        #forlumarz{
            width: 400px;
            height: 300px;
            margin: auto;
        }
        #wynik{
            width: 400px;
            height: 400px;
            margin: auto;
            border: 2px groove #666666;
            text-align: center;
        }
        h3{
            color: blue;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="folrumarz">
        <form action="" method="post">
            <table>
                <tr>
                    <td colspan="2"><h2>Formularz zgłoszeniowy</h2></td>
                </tr>
                <tr>
                    <td>Imię:</td>
                    <td><input type="text" name="imie"></td>
                </tr>
                <tr>
                    <td>Nazwisko:</td>
                    <td><input type="text" name="nazwisko"></td>
                </tr>
                <tr>
                    <td>Wykształcenie:</td>
                    <td><select name="wiedza">
                        <option>wyższe</option>
                        <option>średnie</option>
                        <option>podstawowe</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Wiek:</td>
                    <td><input type="number" name="wiek"></td>
                </tr>
                <tr>
                    <td>Płeć:</td>
                    <td>M:<input type="radio" name="płec" value="Mężczyzna">K:<input type="radio" name="płec" value="Kobieta"></td>
                </tr>
                <tr>
                    <td>Zainteresowania:</td>
                    <td>Sport:<input type="radio" name="zain" value="Sport">Muzyka:<input type="radio" value="Muzyka" name="zain"></td>
                </tr>
                <tr>
                    <td>Adres e-mail:</td>
                    <td><input type="email" name="mail"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;"><input type="submit" value="Zapisz"></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="wynik">
        <?php
        if
        (!empty($_POST['imie']) && !empty($_POST['nazwisko'])
        && !empty($_POST['mail']) && !empty($_POST['wiedza'])
        && !empty($_POST['wiek']) && !empty($_POST['płec'])
        && !empty($_POST['zain']))
        {

        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $wiedza=$_POST['wiedza'];
        $mail=$_POST['mail'];
        $wiek=$_POST['wiek'];
        $płec=$_POST['płec'];
        $zain=$_POST['zain'];

        echo "<p>Zapisaliśmy użytkownika o następujących danych:</p>";
        echo "<h3>$imie $nazwisko</h3>";
        echo "<h4>Wykształcenie: $wiedza</h4>";
        echo "<h4>E-mail: $mail</h4>";
        echo "<h4>Wiek: $wiek lat</h4>";
        echo "<h4>Płeć: $płec</h4>";
        echo "<h4>Zainteresowania: $zain</h4>";
        }
        ?>
    </div>
</body>
</html>