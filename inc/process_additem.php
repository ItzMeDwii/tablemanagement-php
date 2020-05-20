<html>
<head>
   <meta http-equiv="refresh" content="1; url=https://dwii.me/project3/">
</head>
<?php
require_once './config.php';
$config = new Config();

$mysqli = new mysqli($config->db_host, $config->db_username, $config->db_password, $config->db_name);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$kode = $_POST['kodebarang'];
$nama = $_POST['namabarang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

if (!$kode || $kode <= 0) {
   echo '<p class="text-center">Error!</p>'; 
} else {
$addprocess = $mysqli->query("INSERT INTO storeman_items (code,name,price,stock) VALUES ('$kode', '$nama', '$harga', '$jumlah')");

if (!$addprocess) {
	echo '<p class="text-center">Error!</p>';
}
if ($addprocess) {
	echo '<p class="text-center">Done!</p>';
}
}
$mysqli->close();
?>

</html>
