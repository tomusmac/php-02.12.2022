<?php
    $conn = mysqli_connect("localhost", "root", "", "cw4-przychodnia");
    $query = "select id,imie,nazwisko from Pacjenci";
    $result = mysqli_query($conn, $query);
    $plik = fopen('get.txt','a');
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $imie = $row["imie"];
        $nazwisko = $row["nazwisko"];
        fwrite($plik,"ID: $id IMIE: $imie NAZWISKO: $nazwisko \n");
    }
    fclose($plik);
?>