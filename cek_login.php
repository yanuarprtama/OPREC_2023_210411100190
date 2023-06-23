<?php
include('koneksi.php');

session_start();

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

$sql = "SELECT * FROM penggguna where $_SESSION['email']";
$query = mysql_fetch_assoc($koneksi, $sql);
$data = mysql_fetch_array($query);

while ($data > 0) {
	if ($email == 'admin@email.com') {
		$_SESSION['email'] = 
	}
}

?>