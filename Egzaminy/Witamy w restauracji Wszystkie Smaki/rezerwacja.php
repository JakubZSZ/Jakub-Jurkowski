<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost','root','','baza');

    $data = $_POST['data'];
    $ile = $_POST['ile_osób'];
    $tel = $_POST['telefon'];

    $sql = "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('$data','$ile','$tel');";

    if (mysqli_query($conn,$sql)) {
        echo "Dodano rezerwację do bazy";
    }
    
    mysqli_close($conn);
    ?>
</body>
</html>