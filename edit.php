<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

	<h2>EDIT</h2>
	<br/>
	<a href="hapus.php">KEMBALI</a>
	<br/>
	<br/>


	<?php
	include 'koneksi.php';
	$id_user = $_GET['id_user'];
	$data = mysqli_query($koneksi,"select * from user where id_user='$id_user'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>ema</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>level</td>
					<td><input type="text" name="level" value="<?php echo $d['level']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>