<html lang="pl" class="php">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>Imie</th>
                <th>Nazwsiko</th>
                <th>Wiek</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<p>Dane Osobowe</p>";
            $imie=$_POST['a'];
            $nazwisko=$_POST['b'];
            $wiek=$_POST['wiek'];

            echo "<tr>";
            echo "<td>$imie</td>";
            echo "<td>$nazwisko</td>";
            echo "<td>$wiek</td>";
            echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>