<?php
$cnim=$_POST['NIM'];
$cnama=$_POST['Nama'];
$csemester=$_POST['Semester'];
$cSKS=$_POST['SKS'];
$cIPK=$_POST['IPK'];
$cstatus=$_POST['Status'];
echo 'Data yang anda kirim adalah : <br>';
echo 'NIM :'.$cnim.'<br>';
echo 'Nama : '.$cnama.'<br>';
echo 'Semester: '.$csemester.'<br>';
echo 'SKS: '.$cSKS.'<br>';
echo 'IPK: '.$cIPK.'<br>';
echo 'Status: '.$cstatus.'<br>';
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="proyek";
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
$data2017 = "INSERT INTO mhs2017 (NIM, Nama, Semester, SKS, IPK, Status) VALUES ('$cnim', '$cnama', '$csemester', '$cSKS', '$cIPK', '$cstatus')";
$result = mysqli_query($conn, $data2017);
if ($result){
	echo 'data berhasil disimpan <br>';
}
else
{
echo 'data gagal disimpan';	
};
?>