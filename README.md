<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Proyek Page</title>
</head>
<body>
    <div class="container2">
    <header>
        <h1>Selamat Datang</h1>
        <h5>Proyek by : Muhammad Tabroni</h5>
    </header>
    <section>
    <div class="data-container">
        <h2>Data Mahasiswa Pendidikan Matematika FKIP Unram</h2><br>
    <form action="tblmhs.php" method="POST">
        <button type="submit">Data Mahasiswa Aktif</button></form><br>
            <ul>
                <li>
                    <a href="#">Data Mahasiswa per Tahun</a>
                    <ul class="dropdown">
                    <li><a href="mhs2017.php">Data Mahasiswa Tahun 2017</a></li>
                    <li><a href="mhs2018.php">Data Mahasiswa Tahun 2018</a></li>
                    <li><a href="mhs2019.php">Data Mahasiswa Tahun 2019</a></li>
                    <li><a href="mhs2020.php">Data Mahasiswa Tahun 2020</a></li>
                    <li><a href="mhs2021.php">Data Mahasiswa Tahun 2021</a></li>
                    <li><a href="mhs2022.php">Data Mahasiswa Tahun 2022</a></li>
                    <li><a href="mhs2023.php">Data Mahasiswa Tahun 2023</a></li>
                    </ul>
                </li>
            </ul> 
        <ul>
                <li>
                    <a href="#">Tambahkan Data Mahasiswa</a>
                    <ul class="dropdown">
                    <li><a href="input2017.php">Tambahkan Data Tahun 2017</a></li>
                    <li><a href="input2018.php">Tambahkan Data Tahun 2018</a></li>
                    <li><a href="input2019.php">Tambahkan Data Tahun 2019</a></li>
                    <li><a href="input2020.php">Tambahkan Data Tahun 2020</a></li>
                    <li><a href="input2021.php">Tambahkan Data Tahun 2021</a></li>
                    <li><a href="input2022.php">Tambahkan Data Tahun 2022</a></li>
                    <li><a href="input2023.php">Tambahkan Data Tahun 2023</a></li>
                    </ul>
                </li>
            </ul> 
            <br><br>
        </form>
    <form action="pencarian.php" method="POST">
        <button type="submit">Cari Data Mahasiswa</button> <br>
        </form>
    </div>
    </section>

    <footer>
        <p> Data Mahasiswa Angkatan Tahun 2017 - 2023 </p>
    </footer>
    </div>
</body>
</html>
