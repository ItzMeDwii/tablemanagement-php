<?php
require_once './inc/config.php';
$config = new Config();
?>

<html lang="en" class="full-height">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title><?php echo $config->name; ?></title>

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">
<link href="https://assets.azalelnation.com/bootstrap-material-design/css/addons/datatables.min.css" rel="stylesheet">
<link rel="stylesheet" href="inc/css/index.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
<script type="text/javascript" src="https://assets.azalelnation.com/font-awesome/js/all.min.js"></script>
<script src="https://assets.azalelnation.com/bootstrap-material-design/js/addons/datatables.min.js"></script>
<script src="inc/js/index.js"></script>
	
  </head>

  <body>
      
      <div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
      
 <div
      class="modal fade"
      id="addItem"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-notify modal-success"
        role="document"
      >
        <form autocomplete="off" class="text-center" name="form1" method="post" action="inc/process_additem.php">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="heading lead font-weight-bold" id="myModalLabel"><i class="fas fa-plus text-white"></i> Add Item</h4>
            <button
              type="button"
              class="close white-text"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body white-text">
<table align="center">
<tr>
      <td width="155" class="text-white">Kode Barang</td>
      <td width="319"><input class="form-control" type="number" name="kodebarang" required></td>
    </tr>
    <tr>
      <td class="text-white">Nama Barang</td>
      <td><input class="form-control" type="text" name="namabarang" required></td>
    </tr>
    <tr>
      <td class="text-white">Harga Barang</td>
      <td><input class="form-control" type="text" name="harga" required></td>
    </tr>
    <tr>
      <td class="text-white">Jumlah</td>
      <td><input class="form-control" type="text" name="jumlah" required></td>
    </tr>
</table>
          </div>
          <div class="modal-footer white-text">
            <button class="btn btn-outline-white btn-md" type="submit" name="Submit">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    
<div
      class="modal fade"
      id="editItem"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-notify modal-warning"
        role="document"
      >
        <form class="text-center" autocomplete="off" name="form2" method="post" action="inc/process_edititem.php">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="heading lead font-weight-bold" id="myModalLabel"><i class="fas fa-pen"></i> Edit Item</h4>
            <button
              type="button"
              class="close white-text"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body white-text">
<table align="center">
<tr>
      <td width="155" class="text-white">Kode Barang</td>
      <td width="319"><div class="autocomplete" style="width:319px;">
          <input class="form-control" type="number" id="kode" name="kodebarang" required>
          </div></td>
    </tr>
    <tr>
      <td class="text-white">Nama Barang</td>
      <td><input class="form-control" type="text" name="namabarang" required></td>
    </tr>
    <tr>
      <td class="text-white">Harga Barang</td>
      <td><input class="form-control" type="text" name="harga" required></td>
    </tr>
    <tr>
      <td class="text-white">Jumlah</td>
      <td><input class="form-control" type="text" name="jumlah" required></td>
    </tr>
</table>
          </div>
          <div class="modal-footer white-text">
            <button class="btn btn-outline-white btn-md" type="submit" name="Submit">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>


    <div
      class="modal fade"
      id="about"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-notify modal-info"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="heading lead font-weight-bold" id="myModalLabel">About Me</h4>
            <button
              type="button"
              class="close white-text"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body white-text">
            <img
              src="https://dwii.me/css/DwiiUnknown.webp"
              width="128px"
              alt=""
              class="rounded mx-auto d-block"
            />
            <br />
<p class="text-center">
Aplikasi ini dibuat oleh Satya Bagus Dwiatmaja.
<br>Website ini menggunakan <a href="https://www.php.net/" target="_blank">PHP 7.4</a> + <a target="_blank" href="https://www.mysql.com/">MySQL 5.7</a> dan juga <a href="https://mdbootstrap.com/" target="_blank">MDBootstrap 4.14.0 (Based on Bootstrap 4.4.1)</a>.
<br>Text editor yang dipakai: <a href="https://www.jetbrains.com/phpstorm/" target="_blank">PhpStorm</a>
<br>
<br><a href="https://n12.dwii.me/" target="_blank">© 2020 DwiiUnknown</a>
</p>
          </div>
          <div class="modal-footer white-text">
            <a href="mailto:dwii5359@azalelnation.com"
              ><i class="far fa-envelope fa-lg white-text mr-3"></i
            ></a>
            <a href="https://github.com/ItzMeDwii"
              ><i class="fab fa-github fa-lg white-text mr-3"></i
            ></a>
            <a href="https://n12.dwii.me/"
              ><i class="fas fa-external-link-alt fa-lg white-text mr-3"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
      
<main>
<nav class="navbar navbar-expand-lg navbar-dark black fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><strong><?php echo $config->name; ?></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav my-2 my-lg-0 mr-auto">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#addItem"href="#"><i class="fas fa-plus text-white"></i> Add Item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#editItem"href="#"><i class="fas fa-pen"></i> Edit Item</a>
      </li>
    </ul>
    
    <ul class="navbar-nav my-2 my-lg-0 ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#about"><i class="fas fa-info-circle"></i> About</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<br><br>
<div class="mask flex-center container text-white" id="con">

<div class="card">
  <h3 class="card-header text-center font-weight-bold">
    Item List
  </h3>
  <div class="card-body">
<table id="list" class="table table-striped btn-table table-responsive-lg text-white">
<thead>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Harga Barang</th>
<th>Jumlah Stock</th>
<th>Options</th>
</thead>
<tbody>
<?php
$mysqli = new mysqli($config->db_host, $config->db_username, $config->db_password, $config->db_name);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$result = $mysqli->query("SELECT * FROM `storeman_items` ORDER BY `storeman_items`.`code` ASC");

if (!$result) {
echo "<tr><td>Empty</td></tr>";
}

if ($result) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["code"]. "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["stock"] . "</td> 
<td><a href='inc/process_deleteitem.php?id=" . $row["code"] . "' class='text-danger'><i class='fas fa-trash'></i> Delete</a>
</td></tr>";
}
}

$mysqli->close();
?>
</tbody>
</table>
  </div>
</div>
<script>
$(document).ready(function () {
  $('#list').DataTable({
    "pagingType": "simple_numbers",
	columnDefs: [{
	orderable: false,
	targets: 4
	}]
  });
  $('.dataTables_length').addClass('bs-select');
});

var ids = [<?php
$mysqli = new mysqli($config->db_host, $config->db_username, $config->db_password, $config->db_name);
$result = $mysqli->query("SELECT * FROM `storeman_items` ORDER BY `storeman_items`.`code` ASC");

if ($result) {
while($row = $result->fetch_assoc()) {
echo '"' . $row["code"] . '",';
}
}
$mysqli->close();
?>];
</script>
<script>
autocomplete(document.getElementById("kode"), ids);
</script>
</div>
<br>
</main>
<footer class="page-footer font-small black">
     <div class="footer-copyright text-center py-3">
       © 2020 <a href="https://github.com/ItzMeDwii/" target="_blank"> DwiiUnknown </a>
    </div>
</footer>  
  </body>
</html>
