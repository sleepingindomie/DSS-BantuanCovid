<?php
include('config.php');

// Mengambil data dari tabel kriteria
$sql = "SELECT * FROM kriteria";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kriteria</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            padding-top: 100px;
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
                    <li><a class="nav-link scrollto active" href="dtkriteria.php">Kriteria</a></li>
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

    <div class="container mt-5">
        <h2>Data Kriteria</h2>
        <table class="mt-3">
            <thead>
                <tr>
                    <th>ID Kriteria</th>
                    <th>Nama Kriteria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan data dari hasil query
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['idkriteria'] . "</td>";
                    echo "<td>" . $row['nmkriteria'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

   <!-- ======= Footer ======= -->
   <footer id="footer" class="fixed-bottom">
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

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
