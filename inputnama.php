<!DOCTYPE html>
<html>
<head>
	<title> Input nama</title>
</head>
<body>
<FORM  ACTION="simpan.php" METHOD="POST" NAME="Input">  
Id       : <input type="text" name="Id" placeholder="masukan id" required=""> <br>
Username : <input type="text" name="Usernamse" placeholder="Masukan Nama" required=""><br>
Password : <input type="Password" name="Password" placeholder="Masukan Password" required=""><br>
Level    :<br> <input  type="radio" name="Level" value="admin">Admin<br>
<input type="radio" name="Level" value="user">User<br>
<input type="radio" name="Level" value="guest">Guest<br>
Fullname : <input type="text" name="Fullname" placeholder="Masukan Nama Lengkap" required=""><br>

<td><button type="submit" value="simpan">tambah</button></td></FORM>  
</body>
</html> 