<?php
$koneksi = mysqli_connect("localhost","root","","php-api");
$id = $_GET['id']; //$id merupakan varaibel,'id' merupakan pengambilan setelah user mengkelik hapus pada tabelname.php
$sql_delete=("DELETE FROM user WHERE Id='$id' ");
mysqli_query($koneksi,$sql_delete)or die(mysqli_error($koneksi));
echo '<script>
alert("Datamu Berhasil Dihapus");
location="tablenama.php?"
</script>';
?>

