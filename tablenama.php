<?php 
	include "koneksi.php";
 ?>

		<?php 
			$sukses = true;
			$pesan = '';
			$KODE = '';
				$qry = mysqli_query($koneksi,"SELECT * FROM user");
				if(mysqli_num_rows($qry)>0){
					$sukses = true;
					$pesan = "GOODD!!!!!!!";
					$KODE = 200;
				}
				else{
					$sukses = false;
					$pesan = "ERROR!!!!!!!";
					$KODE = 204;
				}
				$respon = array();
				$respon["suskses"] = $sukses;
				$respon["data"] = array();
				$respon["pesan("] = $pesan;
				$respon["kode"] = $KODE; 
			while($row = mysqli_fetch_assoc($qry)){
				$data['id'] = $row["Id"];
				$data['username'] = $row["Usernamse"];
				$data['password'] = $row["Password"];
				$data['level'] = $row["Level"];
				$data['fullname'] = $row["Fullname"];
				array_push($respon["data"],$data);
			}
			echo json_encode($respon);
		?>