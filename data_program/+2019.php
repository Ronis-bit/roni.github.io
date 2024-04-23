<!DOCTYPE html>
<html>
    <center>
    <head>
        <title>Data Mahasiswa</title>
</head>
<body style="background-color: #ffffcc;">
    <table border="1" style="background-color: whitesmoke;">
<?php
$cnim=$_POST['NIM'];
$cnama=$_POST['Nama'];
$csemester=$_POST['Semester'];
$cSKS=$_POST['SKS'];
$cIPK=$_POST['IPK'];
$cstatus=$_POST['Status'];
?>

<tr position="center">
<th width="100px" bgcolor="yellow"><p>NIM</p></th>
<th width="300px" bgcolor="yellow"><p>Nama</p></th>
<th width="70px" bgcolor="yellow"><p>Semester</p></th>
<th width="70px" bgcolor="yellow"><p>SKS</p></th>
<th width="60px" bgcolor="yellow"><p>IPK</p></th>
<th width="60px" bgcolor="yellow"><p>Status</p></th>
</tr>


<?php
echo"
<tr>
<h2>Data yang anda kirim adalah : <br></h2>
<td><h4>$cnim<br></h4></td>
<td><h4>$cnama<br></h4></td>
<td><h4>$csemester<br></h4></td>
<td><h4>$cSKS<br></h4></td>
<td><h4>$cIPK<br></h4></td>
<td><h4>$cstatus<br></h4></td>
";
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="datamahasiswa";
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
// mengecek koneksi
if (!$conn) {
    die("<br><br><br><br><br><br><br>Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
$data2019 = "INSERT INTO mhs2019 (NIM, Nama, Semester, SKS, IPK, Status) VALUES ('$cnim', '$cnama', '$csemester', '$cSKS', '$cIPK', '$cstatus')";
$result = mysqli_query($conn, $data2019);
if ($result){
	echo '<h4>(data berhasil disimpan)</h4>';
}
else
{
echo '<h4>(data gagal disimpan)</h4>';	
};
?>
</table>
</center>
</body>
</html>