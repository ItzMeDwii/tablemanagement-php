<?php
require_once './config.php';
$config = new Config();
?>

<html>
<head>
   <meta http-equiv="refresh" content="2; url=<?php echo $config->index; ?>">
</head>
<?php

$mysqli = new mysqli($config->db_host, $config->db_username, $config->db_password, $config->db_name);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$kode = $_POST['kodebarang'];
$nama = $_POST['namabarang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$addprocess = $mysqli->query("UPDATE storeman_items SET name='". $nama ."', price='". $harga ."', stock='". $jumlah ."' WHERE code='". $kode ."';");

if (!$addprocess) {
	echo '<p class="text-center">Error!</p>';
}
if ($addprocess) {
	echo '<p class="text-center">Done!</p>';
}

$mysqli->close();
?>

</html>
