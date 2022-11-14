<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <input type="number" name="liczba">
        <input type="submit" value="Generuj">
    </form>
    <?php
    echo "Pętla I <br>";
    for ($i=1; $i <= 4; $i++) { 
        for ($x=1; $x <= 4; $x++) { 
            echo "*";
        }
        echo "<br>";
        }
        if (isset($_POST['liczba'])){

        echo "Pętla II <br>";
        echo "<table>";
        echo "<tr><th>Imie</th><th>Nazwisko</th></tr>";
        $x=1;
        $l=$_POST['liczba'];
        for ($i=1; $i <= $l; $i++) { 
            echo "<tr>
                    <td>".$x++."</td> <td>".$x++."</td>
                </tr>";
                }
        echo "</table>";
            }
    ?>
</body>
</html>