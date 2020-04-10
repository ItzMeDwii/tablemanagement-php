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

$kode = $_GET['id'];

if (!kode){
	echo "INVALID CODE!";
}
if ($kode) {
$addprocess = $mysqli->query("DELETE FROM storeman_items WHERE code='". $kode ."';");

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
