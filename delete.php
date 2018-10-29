<?php 
	include 'conn.php';

	$id=$_GET['id'];
	$query=mysqli_query($conn,"DELETE FROM tamu WHERE id='$id'");
	$data=mysqli_fetch_array($query);

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
 		
 ?>