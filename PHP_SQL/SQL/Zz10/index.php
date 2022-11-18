<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
    <style>
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost','root','','ahg');

    echo "<table>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Wiek</th>
                <th>Płeć</th>
                <th>Zainteresowanie</th>
                <th>Zamieszkanie</th>
            </tr>
            <tr>

            </tr>
        </table>
  ";

    ?>
</body>
</html>