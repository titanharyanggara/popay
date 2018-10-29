<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
textarea{
	margin-left: 40px;
}
button{
	margin-left: 485px;
	background-color:#ffcccc;
	width: 85px;
	height: 40px;
	border-radius: 5px;
}
button:hover{
	background-color:#ffbb99;
}
h1{
	font-family: Blackadder ITC;
	color: #d5b08f;
}
input{
	width: 370px;
	height: 30px;
	margin-left:39px;
}
body{
	background-image: url(thought-catalog-709624-unsplash.jpg);
	background-size : cover;	
}
.content{
	margin-left:30px;
	width: 1300px;
	height: 650px;
	background-color: rgba(245, 238, 238, 0.8);
	border-radius: 5px;
}</style>
<body>
	<div class ="content">
	<br><br><center><h1>Uang Pernikahan</h1></center>
	<a href="next.php" style="font-family:Curlz MT;color:#d5b08f; margin-left: 40px">LIHAT NAMA</a>
		<center><table><br><br><br>
			<form method="post" action="">
		<tr>
		<td><input type="text" name="nama" placeholder="Nama" required></td>
		</tr>
		<tr>
		<td><input type="number" name="jumlah" placeholder="Jumlah" required min="25000" max="1000000"></td>
	</tr>
	<tr>
		<td><textarea rows="8" cols="50" placeholder="Alamat" required name="alamat"></textarea></td>
	</tr>
	</table></center>
	<tr>
		<button type="submit" name="btn-save">Save</button>
	</tr>
	</form>
</div>
</body>
</html>
<?php 
 	include'conn.php';
 	if (isset($_POST['btn-save'])) {
 		$nama=addslashes($_POST['nama']);
 		$jumlah=$_POST['jumlah'];
 		$alamat=$_POST['alamat'];
 		$query=mysqli_query($conn,"INSERT INTO tamu VALUES ('','$nama','$jumlah','$alamat')");
 		if ($query) {
 ?>
 		<script type="text/javascript">
 			alert('data berhasil');
 			window.location='next.php';
 		</script>
 <?php
 		}
 		else{
 			 ?>
 		<script type="text/javascript">
 			alert('data gagal');
 			window.location='';
 		</script>
 <?php
 		}

 	}
 ?>