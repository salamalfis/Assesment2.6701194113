<?php
require 'koneksi.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
		<script>
			alert ('Data berhasil dihapus :D');
			document.location.href = 'index.php';
		</script>
	";
} else {
    echo "
		<script>
			alert ('Data gagal dihapus :(');
			document.location.href = 'index.php';
		</script>
	";
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM ipk WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
