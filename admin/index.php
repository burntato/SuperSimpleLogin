<!DOCTYPE html>
<html>
<style>
body {
	background-color: black;
	/* galaxy background */
	background-repeat: no-repeat;
	background-size: cover;

}

/* white text on body */
body, h1, h2, h3, h4, h5, h6, .w3-wide {
	color: #fff;
}

/* white a */
a {
	color: #fff;
}

/* table */
table {
	border-collapse: collapse;
	width: 50%;
}

th, td {
	text-align: left;
	padding: 8px;
}

tr:nth-child(even){background-color: red}



</style>
<head>
	<title>Selamat datang di web HUMAN TRAFFICKING</title>
</head>
<body>
	<!-- title white bold h1 -->
	<h1>HUMAN TRAFFICKING</h1>


	<!-- <h2>JUAL BELI MANUSIA</h2> -->
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	<!-- User list -->
	<h3>User List</h3>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	<br/>
	<br/>

	<h2><b><a href="logout.php">LOGOUT</a></b></h2>


</body>
</html>