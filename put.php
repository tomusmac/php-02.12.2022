<?php
    $conn = mysqli_connect("localhost", "root", "", "cwmsql");
    $plik = fopen('put.txt','r');
    while (!feof($plik)) 
    {
        $linijka = fgets($plik);
        $przecinek = explode(",",$linijka);
        list($imie,$nazwisko) = $przecinek;
        $query = "INSERT INTO `klienci` (`imie`, `nazwisko`) VALUES ('$imie', '$nazwisko');";
        mysqli_query($conn,$query);
    }
    fclose($plik);
?>
