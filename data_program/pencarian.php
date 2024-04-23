<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian data</title>
</head>
<body style="background-color: #ffffcc;">
<center>
<form method="GET" action="pencarian.php" style="text-align :center">
    <label> Pencarian : </label>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
    <button type="submit">cari</button>
</form>
    <table border="1" style="background-color: whitesmoke;">
<?php

	$hostname="localhost";	$username="root";	$password="";	$dbname="datamahasiswa";
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$conn) {die("Koneksi gagal: " . mysqli_connect_error());}
    $data = "select * from mhstotal";
    $result = mysqli_query($conn, $data);
?>
    <tr position="center">
            <th width="30px" bgcolor="yellow">No.</th>
            <th width="100px" bgcolor="yellow">NIM</th>
            <th width="300px" bgcolor="yellow">Nama</th>
            <th width="70px" bgcolor="yellow">Semester</th>
            <th width="70px" bgcolor="yellow">SKS</th>
            <th width="60px" bgcolor="yellow">IPK</th>
            <th width="60px" bgcolor="yellow">Status</th>
        </tr>
        <tr>
<?php
            if(isset($_GET['cari'])){
                $pencarian= $_GET['cari'];
                $query = "select * from mhstotal where Nama like '%".$pencarian."%' or NIM like '%".$pencarian."%' or Status like '%".$pencarian."%'";
            } 
            else{
                $query="select * from mhstotal";
            }
            $tampil = mysqli_query($conn, $query);
            $banyak_data = mysqli_num_rows($tampil);
            for ($i=1; $i<=$banyak_data; $i++)
            {$row = mysqli_fetch_row($tampil);
                echo"
            <tr>
            <td>"."$i"."</td>
            <td>"."$row[0]"."</td>
            <td>"."$row[1]"."</td>
            <td>"."$row[2]"."</td>
            <td>"."$row[3]"."</td>
            <td>"."$row[4]"."</td>
            <td>"."$row[5]"."</td>
</tr>";
            };
?>
        </tr>

    </table>
</center>
</body>
</html>