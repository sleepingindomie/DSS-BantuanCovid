<?php
include('config.php'); // Sesuaikan dengan file koneksi database Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idalternatif = $_POST['idalternatif'];

    // Loop untuk melakukan multi-insert
    for ($i = 1; $i <= 5; $i++) {
        $idbobot = $i; // idbobot dimulai dari 1 hingga 5
        $skala = $_POST['idskala'][$i - 1]; // Mengambil nilai skala sesuai index array

        // Lakukan query INSERT INTO untuk menambahkan multiple records ke dalam tabel matrixkeputusan
        $sql = "INSERT INTO matrixkeputusan (idalternatif, idbobot, idskala) VALUES ('$idalternatif', '$idbobot', '$skala')";

        // Lakukan eksekusi query
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close(); // Tutup koneksi ke database setelah selesai
}
?>

