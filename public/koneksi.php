<?php
$koneksi = mysqli_connect("localhost", "root", "", "assesment");


if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function ubah($data){
	global $koneksi;

	$id = $data["id"];
	$semester = htmlspecialchars($data["semester"]);
	$IPK = htmlspecialchars($data["ip"]);

	$query = "UPDATE ipk SET
				semester = '$semester',
				ip = '$IPK'
			WHERE id = $id;
			";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM ipk WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
