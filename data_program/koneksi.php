<?php
$hostname= "localhost";
$username= "root";
$password= "";
$dbname= "datatotal1";
$conn= mysqli_connect($hostname, $username, $password, $dbname);
if ($conn){
    $buka = mysqli_select_db($conn, $dbname);

if (!$buka){
    echo "database tidak terhubung";
    }
    else
    {
        echo "Mysql Tidak Terhubung";
    }
}
?>