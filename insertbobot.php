<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idkriteria = $_POST['idkriteria'];
    $value = $_POST['value'];

    // Pastikan idkriteria tidak kosong
    if (empty($idkriteria)) {
        echo "Error: ID Kriteria tidak boleh kosong.";
    } else {
        // SQL untuk memasukkan data ke dalam tabel bobot
        $sql = "INSERT INTO bobot (idkriteria, value) VALUES ('$idkriteria', '$value')";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>


