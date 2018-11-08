<!DOCTYPE html>
  <head>
    <title></title>
  </head>
  <body>
    <h3>Edit Data</h3>
    <?php
$koneksi = mysqli_connect("localhost","root","","php-api");
$id = $_GET['id'];
$qry = mysqli_query($koneksi,"SELECT * FROM user WHERE Id='$id'"); //Id merupakan database
$row = mysqli_fetch_array($qry);
function radio($value, $input) {
$result = $value==$input?'checked':'';
return $result;
}
?>
     <form action="baru.php" method="POST" name>
        <table>

          <tr>
            <td>ID</td>
            <td><input type="text" name="Id" value="<?php echo $row['Id']; ?>"></td>

          </tr>

          <tr>

            <td>Username</td>
            <td><input type="text" name="Usernamse" value="<?php echo $row['Usernamse']; ?>"></td>
          </tr>

          <tr>
            <td>Password</td>
            <td><input type="Password" name="Password" value="<?php echo $row['Password']; ?>"></td>
          </tr>

          <tr>
            <td style="vertical-align: top">Level</td>
            <td>
              <input type="radio" name="Level" value="admin" <?php echo radio("admin", $row['Level']) ?>>Admin<br>
              <input type="radio" name="Level" value="user" <?php echo radio("user", $row['Level']) ?>>User<br>
              <input type="radio" name="Level" value="guest" <?php echo radio("guest", $row['Level']) ?>>guest
            </td>
          </tr>

          <tr>
            <td>Fullname</td>
            <td><input type="text" name="Fullname" value="<?php echo $row['Fullname']; ?>"></td>
          </tr>
          <tr>
            <td><button type="submit" value="Simpan">SIMPAN</button>
          </tr>
        </table>
      </form>
  </body>
</html>

