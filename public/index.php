<?php
require '$koneksi';

$IPK = query("SELECT * FROM ipk");
$result = mysqli_query($koneksi, $IPK);

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>IPK</title>
	<style>
		a {
			text-decoration: none;
			color: grey;
		}

		.tambah {
			color: black;
		}
	</style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
	<center>


		<div class="container">
			<div class="row">
				<div class="col-sm">
					<a href="home.php">Assesment 2</a>
				</div>
				<div class="col-sm">
					<a href="about.php">About</a>
				</div>
				<div class="col-sm">
					<a href="index.php">IPK</a>
				</div>
			</div>
		</div>
		<br>
		<h1>Daftar IPK</h1>


		<br><br>
		<a href="tambah.php" class="tambah"><button>Tambah Data Ipk</button></a>
		<br><br>


		<table border="1">

			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Semester</th>
				<th>IPK</th>

			</tr>
			<?php $i = 1; ?>
			<?php foreach ($IPK as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td>

						<a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
						<a href="hapus.php?id=<?= $row['id']; ?>">hapus
						</a>
					</td>

					<td><?php echo $row["semester"]; ?></td>
					<td><?php echo $row["ip"]; ?></td>

				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</table>
</body>

</html>