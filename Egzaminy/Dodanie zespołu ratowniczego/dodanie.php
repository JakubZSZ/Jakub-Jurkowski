<?php
    if (isset($_POST['nrkartetki']) && isset($_POST['pososba']) && isset($_POST['dososba']) && isset($_POST['tososba'])){

    $nrka = $_POST['nrkartetki'];
    $poso = $_POST['pososba'];
    $doso = $_POST['dososba'];
    $toso = $_POST['tososba'];
        
    $con = mysqli_connect('localhost','root','','ee09');
    $sql = "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ($nrka,'$poso','$doso','$toso');";
    echo "Do bazy zostało wysłane zapytanie: $sql";
    mysqli_query($con,$sql);

    }
    mysqli_close($con);
?>