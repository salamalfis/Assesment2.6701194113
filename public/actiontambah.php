<?php
function tambah($data)
{
    include 'koneksi.php';
    $id =
    $semester = htmlspecialchars($data["semester"]);
    $ipk =  htmlspecialchars($data["ip"]);


    $query =
        mysqli_query($koneksi, "INSERT INTO ipk
                             VALUES
                            ('','$semester','$ipk')");
    return mysqli_affected_rows($koneksi);
}
