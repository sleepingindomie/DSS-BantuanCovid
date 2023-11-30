<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nmkriteria = $_POST['nmkriteria'];

    // SQL untuk memasukkan data ke dalam tabel kriteria
    $sql = "INSERT INTO kriteria (nmkriteria) VALUES ('$nmkriteria')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


