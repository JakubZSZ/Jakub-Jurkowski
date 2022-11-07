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
    tabela(4);
    ?>
</body>
</html>