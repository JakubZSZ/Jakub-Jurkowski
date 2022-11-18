<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
    <style>
        table{
            border: 2px solid black;
            border-collapse: collapse;
            margin-top: 2rem;
        }
        th, td{
            border:2px solid blue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    Wiek: <input type="number" name="wiek">
    <input type="submit" value="Wypisz">
    </form>
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
    if (isset($_POST['wiek'])) {

        $wiek = $_POST['wiek'];

            $conn = mysqli_connect('localhost','root','','agh');
                
            $sql = "SELECT * FROM `typ` WHERE wiek = $wiek;";
                    
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
        }
?>
    </table>
</body>
</html>