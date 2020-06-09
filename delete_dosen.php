<?php
include_once"koneksi_db.php";
	

$nip = $_GET['nip'];

// Delete user from database based on id
$result = mysqli_query($connection,"DELETE FROM dosen WHERE nip='$nip'");

header("location: index.php");
?>