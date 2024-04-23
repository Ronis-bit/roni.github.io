<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <form action="buat.php" method="POST">
        <fieldset>
        <legend>Input Data Mahasiswa</legend>
        <p>   
            <label>NIM:</label>
            <input type="text" name="NIM" placeholder="Masukkan NIM anda" />
        
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="Nama" placeholder="Masukkan Nama Anda" />
        </p>
        <p>
            <label>Semester:</label>
            <input type="text" name="Semester" placeholder="Masukkan Alamat Anda" />
        </p>
        <p>
            <label>SKS:</label>
            <input type="text" name="SKS" placeholder="Masukkan Alamat Anda" />
        </p>
        <p>
            <label>IPK:</label>
            <input type="text" name="IPK" placeholder="Masukkan Alamat Anda" />
        </p>
        <p>
            <label>Status:</label>
            <input type="text" name="Status" placeholder="Masukkan Alamat Anda" />
        </p>
        <p>
            <input type="submit" name="submit" value="Simpan" />
        </p>
        </fieldset>
    </form>
</body>
</html>