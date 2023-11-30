<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nmalternatif = $_POST['nmalternatif'];

    // SQL untuk memasukkan data ke dalam tabel alternatif
    $sql = "INSERT INTO alternatif (nmalternatif) VALUES ('$nmalternatif')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


