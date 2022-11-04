<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black; 
        }
        td{
            border: 1px solid black; 
            width: 30px;
        }
    </style>
</head>
<body>
    
    <?php
    echo "Pętla I <br>";
    for ($i=1; $i <= 4; $i++) { 
        for ($x=1; $x <= 4; $x++) { 
            echo "*";
        }
        echo "<br>";
        }

        echo "Pętla II <br>";
        $x=1;
        for ($i=1; $i <= 5; $i++) { 
            echo "<table>
            <tr>
               <td>".$x++."</td> <td>".$x++."</td>
            </tr>
         </table>";
                }
    ?>
</body>
</html>