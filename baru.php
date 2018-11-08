<?php
$koneksi = mysqli_connect("localhost","root","","php-api");
$id = $_POST['Id'];
$username = $_POST['Usernamse'];
$password = $_POST['Password'];
$level = $_POST['Level'];
$fullname = $_POST['Fullname'];

mysqli_query($koneksi, "UPDATE user SET Usernamse='$username', Password='$password', Level='$level', Fullname='$fullname' WHERE Id='$id'");

header("location:tablenama.php");

?>

