<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	h1{
		font-family: Blackadder ITC;
		color: #d5b08f;
	}
	.content{
		margin-left:30px;
		width: 1300px;
		height: 650px;
		background-color: rgba(245, 238, 238, 0.8);
		border-radius: 5px;
	}
	body{
		background-image: url(thought-catalog-709624-unsplash.jpg);
		background-size : cover;	
	}
	table, th, td {
    	border: 1px;
    	border-collapse: collapse;
    	text-align: center;
	}
	th, td {
    	padding: 5px;
	}
	th{
		background-color: pink;
		border: 1px solid white;
	}
	form{
		text-align: left;
		border-color:#d5b08f;
	}
</style>
<body>
<div class="content">
	<br><br><center><h1>Uang Pernikahan</h1></center>
		<h3><a href="tampil.php" style="font-family:Curlz MT; color:#d5b08f; margin-left: 40px">DATA BARU</a></h3>
		<br>
		<form action="cari.php" method="post">
		<div class="cari">
			<input type="text" name="search" placeholder="cari....">
			<button type="submit" name="cari">cari</button>
		</div>
	<table style="width: 100%">
		<thead>
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<?php 
		include 'conn.php';

		$search=$_POST['search'];
		$query=mysqli_query($conn,"SELECT * FROM tamu WHERE nama LIKE '%$search%' OR alamat LIKE '%$search%' ");
		foreach ($query as $data ) {
	?>
		<tbody>
			<tr>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['alamat']; ?></td>
				<td><a href="delete.php?id=<?= $data['id']; ?>">delete</a>

			</tr>
		</tbody>
	<?php
		}
	 ?>
</table>
</div>
</body>
</html>