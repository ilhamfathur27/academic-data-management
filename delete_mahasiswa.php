<?php
include_once"koneksi_db.php";
	

$nrp = $_GET['nrp'];

// Delete user from database based on id
$result = mysqli_query($connection,"DELETE FROM mahasiswa WHERE nrp='$nrp'");

header("location: index.php");
?>