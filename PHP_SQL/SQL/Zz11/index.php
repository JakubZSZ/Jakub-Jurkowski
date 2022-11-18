<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Wiek</th>
            <th>Płeć</th>
            <th>Zainteresowanie</th>
            <th>Zamieszkanie</th>
        </tr>
        <?php

            $conn = mysqli_connect('localhost','root','','agh');
                
            $sql = "SELECT * FROM `typ`;";
                    
            $result = mysqli_query($conn,$sql);

            $iberator = mysqli_num_rows($result);
            while ($iberator > 0) {
                echo "<tr>";
                foreach (mysqli_fetch_assoc($result) as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
                $iberator--;
            }      
            mysqli_close($conn);
?>
    </table>
</body>
</html>