<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel TOPSIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            padding-top: 150px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        .btn-home {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">CovidAn</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="dtalternatif.php">Alternatif</a></li>
                    <li><a class="nav-link scrollto" href="dtkriteria.php">Kriteria</a></li>
                    <li><a class="nav-link scrollto" href="dtbobot.php">Bobot</a></li>
                    <li><a class="nav-link scrollto" href="dtskala.php">Skala</a></li>
                    <li><a class="nav-link scrollto" href="dtmatrix.php">Matrix</a></li>
                    <li class="dropdown"><a><span>Input Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="formalternatif.php">Input Alternatif</a></li>
                            <li><a href="formkriteria.php">Input Kriteria</a></li>
                            <li><a href="formbobot.php">Input Bobot</a></li>
                            <li><a href="formskala.php">Input Skala</a></li>
                            <li><a href="formmatrix.php">Input Matrix</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="index.php#topsis" class="appointment-btn scrollto"><span class="d-none d-md-inline">Metode TOPSIS</a>
        </div>
    </header><!-- End Header -->

    <div class="container">
        <h2>Data Tabel TOPSIS</h2>

        <section id="normalisasi">
            <h3>Tabel Normalisasi</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM topsis_normalisasi");

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                // Tampilkan header tabel Normalisasi
                echo "<thead><tr><th>ID Matrix</th><th>ID Alternatif</th><th>Nama Alternatif</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>ID Bobot</th><th>Value</th><th>Nilai</th><th>Keterangan</th><th>Normalisasi</th></tr></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data sesuai dengan struktur tabel Normalisasi
                    echo "<tr>";
                    echo "<td>" . $row['idmatrix'] . "</td>";
                    echo "<td>" . $row['idalternatif'] . "</td>";
                    echo "<td>" . $row['nmalternatif'] . "</td>";
                    echo "<td>" . $row['idkriteria'] . "</td>";
                    echo "<td>" . $row['nmkriteria'] . "</td>";
                    echo "<td>" . $row['idbobot'] . "</td>";
                    echo "<td>" . $row['value'] . "</td>";
                    echo "<td>" . $row['nilai'] . "</td>";
                    echo "<td>" . $row['keterangan'] . "</td>";
                    echo "<td>" . $row['normalisasi'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Tidak ada data yang ditampilkan.</p>";
            }
            ?>
        </section>

        <section id="maxmin">
            <h3>Tabel Max Min</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM topsis_maxmin");

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                // Tampilkan header tabel Max Min
                echo "<thead><tr><th>ID Matrix</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>Maximum</th><th>Minimum</th></tr></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data sesuai dengan struktur tabel Max Min
                    echo "<tr>";
                    echo "<td>" . $row['idmatrix'] . "</td>";
                    echo "<td>" . $row['idkriteria'] . "</td>";
                    echo "<td>" . $row['nmkriteria'] . "</td>";
                    echo "<td>" . $row['maximum'] . "</td>";
                    echo "<td>" . $row['minimum'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Tidak ada data yang ditampilkan.</p>";
            }
            ?>
        </section>

        <section id="sipsin">
            <h3>Tabel SipSin</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM topsis_sipsin");

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                // Tampilkan header tabel SipSin
                echo "<thead><tr><th>ID Alternatif</th><th>D+</th><th>D-</th></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data sesuai dengan struktur tabel SipSin
                    echo "<tr>";
                    echo "<td>" . $row['idalternatif'] . "</td>";
                    echo "<td>" . $row['dplus'] . "</td>";
                    echo "<td>" . $row['dmin'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Tidak ada data yang ditampilkan.</p>";
            }
            ?>
        </section>


        <section id="terbobot">
            <h3>Tabel Normalisasi Terbobot</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM topsis_terbobot");

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                // Tampilkan header tabel Terbobot
                echo "<thead><tr><th>ID Matrix</th><th>ID Alternatif</th><th>Nama Alternatif</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>ID Bobot</th><th>Value</th><th>Nilai</th><th>Keterangan</th><th>Normalisasi</th><th>Terbobot</th></tr></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data sesuai dengan struktur tabel Terbobot
                    echo "<tr>";
                    echo "<td>" . $row['idmatrix'] . "</td>";
                    echo "<td>" . $row['idalternatif'] . "</td>";
                    echo "<td>" . $row['nmalternatif'] . "</td>";
                    echo "<td>" . $row['idkriteria'] . "</td>";
                    echo "<td>" . $row['nmkriteria'] . "</td>";
                    echo "<td>" . $row['idbobot'] . "</td>";
                    echo "<td>" . $row['value'] . "</td>";
                    echo "<td>" . $row['nilai'] . "</td>";
                    echo "<td>" . $row['keterangan'] . "</td>";
                    echo "<td>" . $row['normalisasi'] . "</td>";
                    echo "<td>" . $row['terbobot'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Tidak ada data yang ditampilkan.</p>";
            }
            ?>
        </section>

        <section id="nilaiv">
        <h3>Tabel NilaiV</h3>

<?php
$result = mysqli_query($conn, "SELECT n.idalternatif, a.nmalternatif, n.dplus, n.dmin, n.nilaiv 
                                FROM topsis_nilaiv n 
                                JOIN alternatif a ON n.idalternatif = a.idalternatif
                                ORDER BY n.nilaiv DESC"); // Mengurutkan berdasarkan Nilai V dari yang tertinggi ke terendah

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table>";
    // Tampilkan header tabel NilaiV
    echo "<thead><tr><th>Nama Alternatif</th><th>D+</th><th>D-</th><th>Nilai V</th><th>Rangking</th></tr></thead>";
    echo "<tbody>";
    $ranking = 1; // Inisialisasi peringkat awal
    while ($row = mysqli_fetch_assoc($result)) {
        // Tampilkan data sesuai dengan struktur tabel NilaiV
        echo "<tr>";
        echo "<td>" . $row['nmalternatif'] . "</td>"; // Menampilkan nama alternatif
        echo "<td>" . $row['dplus'] . "</td>";
        echo "<td>" . $row['dmin'] . "</td>";
        echo "<td>" . $row['nilaiv'] . "</td>";
        echo "<td>" . $ranking . "</td>"; // Menampilkan peringkat
        echo "</tr>";
        $ranking++; // Tingkatkan peringkat setiap kali menampilkan baris baru
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Tidak ada data yang ditampilkan.</p>";
}
?>
</section>


<section id="pembagi">
            <h3>Tabel Pembagi</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM topsis_pembagi");

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                // Tampilkan header tabel pembagi
                echo "<thead><tr><th>ID Kriteria</th><th>Nama Kriteria</th><th>Bagi</th></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data sesuai dengan struktur tabel pembagi
                    echo "<tr>";
                    echo "<td>" . $row['idkriteria'] . "</td>";
                    echo "<td>" . $row['nmkriteria'] . "</td>";
                    echo "<td>" . $row['bagi'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Tidak ada data yang ditampilkan.</p>";
            }
            ?>
        </section>



    </div>
 <!-- ======= Footer ======= -->
   <footer id="footer" class="fixed">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>CovidAn</span></strong>
                </div>
                <div class="credits">
                    Designed by <a href="https://siakad.uin-malang.ac.id/2.0/home">Daffa Pramuditya</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


 <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>