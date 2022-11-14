<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        table{
            border: 2px solid black; 
        }
        td{
            border: 2px solid black; 
            width: 60px;
        }
        th{
            border: 2px solid red; 
            width: 60px;
        }
    </style>
</head>
<body>
<form action="" method="post">
        T1: <input type="number" name="tabela1"><br>
        T2: <input type="number" name="tabela2"><br>
        <input type="submit" value="Generuj">
    </form>
    <?php
    function tabela($wiersze){
        echo "Pętla II <br>";
        echo "<table>";
        echo "<tr><th>Imie</th><th>Nazwisko</th></tr>";
        $x=1;
        for ($i=1; $i <= $wiersze; $i++) { 
            echo "<tr>
                    <td>".$x++."</td> <td>".$x++."</td>
                </tr>";
                }
        echo "</table>";
    }
    tabela($_POST['tabela1']);
    tabela($_POST['tabela2']);
    ?>
</body>
</html>