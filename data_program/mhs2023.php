<!DOCTYPE html>
<html>
    <center>
    <head>
        <title>Data Mahasiswa</title>
</head>
<body style="background-color: #ffffcc;">
    <table border="1" style="background-color: whitesmoke;">
<?php
	$hostname="localhost";	$username="root";	$password="";	$dbname="datamahasiswa";
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$conn) {die("Koneksi gagal: " . mysqli_connect_error());}
    $data = "select * from mhs2023";
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
<?php
        $banyak_data = mysqli_num_rows($result);
        for ($i=1; $i<=$banyak_data; $i++)
        {$row = mysqli_fetch_row($result);        
        echo "
        <tr>
            <td>"."$i"."</td>
            <td>"."$row[0]"."</td>
            <td>"."$row[1]"."</td>
            <td>"."$row[2]"."</td>
            <td>"."$row[3]"."</td>
            <td>"."$row[4]"."</td>
            <td>"."$row[5]"."</td>
        </tr>";};
        ?> </table> </body>
</center>
</html>