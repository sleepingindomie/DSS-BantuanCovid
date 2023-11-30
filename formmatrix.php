<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Matrix</title>
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
            padding-top: 0px;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            position: absolute-top;
            top: 0;
            width: 100%;
            background-color: #fff;
            z-index: 1000;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        #navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #navbar ul li {
            margin-right: 20px;
        }

        #navbar ul li a {
            text-decoration: none;
            color: #000;
        }

        .logo a {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 300px;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            position: fixed-bottom;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
        }

        footer a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="absolute-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">CovidAn</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="formalternatif.php">Input Alternatif</a></li>
                    <li><a class="nav-link scrollto" href="formkriteria.php">Input Kriteria</a></li>
                    <li><a class="nav-link scrollto" href="formbobot.php">Input Bobot</a></li>
                    <li><a class="nav-link scrollto" href="formskala.php">Input Skala</a></li>
                    <li><a class="nav-link scrollto active" href="formmatrix.php">Input Matrix</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="index.php#topsis" class="appointment-btn scrollto"><span class="d-none d-md-inline">Metode TOPSIS</a>
        </div>
    </header>
    <!-- End Header -->

    <div class="container">
        <br>
        <h2>Input Data Matrix Keputusan</h2>
        <form action="insertmatrix.php" method="POST">

            <label for="idalternatif">Pilih Alternatif:</label><br>
            <select id="idalternatif" name="idalternatif" required>
                <!-- Options for selecting alternatif from the database -->
                <?php
                include('config.php');
                $result = mysqli_query($conn, "SELECT idalternatif FROM alternatif");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['idalternatif'] . "'>" . $row['idalternatif'] . "</option>";
                }
                ?>
            </select><br>

            <!-- Kolom untuk menyimpan kelima variabel ke dalam idbobot -->
            <input type="hidden" id="idbobot" name="idbobot[]" required>

           <!-- Bagian "Masukkan Skala" -->
           <label for="idskala">Masukkan Skala:</label><br>
<div>
    <label for="idskala1">Skala Pertama:</label>
    <select id="skala1" name="idskala[]" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>

<div>
    <label for="idskala2">Skala Kedua:</label>
    <select id="skala2" name="idskala[]" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>

<div>
    <label for="idskala3">Skala Ketiga:</label>
    <select id="skala3" name="idskala[]" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>

<div>
    <label for="idskala4">Skala Keempat:</label>
    <select id="skala4" name="idskala[]" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>

<div>
    <label for="idskala5">Skala Kelima:</label>
    <select id="skala5" name="idskala[]" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<!-- End of "Masukkan Skala" -->

<br>

            <input type="submit" value="Simpan">
        </form>
    </div>


    <footer>
        <div class="container">
            <p>
                &copy; Copyright <strong><span>CovidAn</span></strong> | 
                Designed by <a href="https://siakad.uin-malang.ac.id/2.0/home">Daffa Pramuditya</a>
            </p>
        </div>
    </footer>
</body>

</html>
