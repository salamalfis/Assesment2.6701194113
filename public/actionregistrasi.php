<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

	$password = password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO user VALUES('', '$username', '$password')";

	mysqli_query($koneksi,$sql);
	if ($koneksi->query($sql) === TRUE) {
    echo "<script> document.location='login.php' </script>";;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

	return mysqli_affected_rows($koneksi);

}

}
?>
