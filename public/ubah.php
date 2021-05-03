<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

$ipk = query("SELECT * FROM ipk WHERE id = $id")[0];



if (isset($_POST["submit"])) {


	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert ('Data berhasil diubah :D');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert ('Maaf data gagal diubah :(');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Update IPK</title>
</head>

<body>

	<h1>Update Data IPK</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $ipk["id"]; ?>">

		<table>
			<tbody>
				<tr>
					<th><label for="semester">Semester: </label></th>
					<td><input type="text" name="semester" id="semester" required value="<?= $ipk["semester"]; ?>"></td>
				</tr>
				<tr>
					<th><label for="ipk">IPK: </label></th>
					<td><input type="text" name="ipk" id="ipk" value="<?= $ipk["ipk"]; ?>"></td>
				</tr>


				<tr>
					<td><button type="submit" name="submit">Ubah</button></td>
				</tr>
			</tbody>
		</table>
	</form>

</body>

</html>