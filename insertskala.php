<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST['value'];
    $keterangan = $_POST['keterangan'];

    // SQL untuk memasukkan data ke dalam tabel skala
    $sql = "INSERT INTO skala (value, keterangan) VALUES ('$value', '$keterangan')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
