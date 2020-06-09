<?php
$connection = mysqli_connect("localhost:3307", "root", "", "academic_data_management");

if ($connection) {
	echo "Sukses terhubung ke MySQL";
} else {
	echo "Gagal terhubung ke MySQL" . PHP_EOL;
}
?>