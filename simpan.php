<?php
$koneksi = mysqli_connect("localhost","root","","php-api");
$id = $_POST['Id'];
$username = $_POST['Usernamse'];
$password = $_POST['Password'];
$level = $_POST['Level'];
$fullname = $_POST['Fullname'];


$query = "INSERT INTO user  SET Id='$id', Usernamse='$username', Password='$password', Level='$level', Fullname='$fullname'"; // seteelah set nama databasenta Id,Usernamse,dll

mysqli_query($koneksi, $query);
header("location:tablenama.php");
?>
