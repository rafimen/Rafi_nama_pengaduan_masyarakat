<?php

include "koneksi.php";
$id = $_GET['id'];

$query = $koneksi->query("SELECT * FROM pengaduan WHERE id_pengaduan ='$id'");
$data = $query->fetch();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>

<?php include "nav.php"?> 

<br>

<div class="container">
<form action="proses_update.php?id=<?= $data['id_pengaduan']?>" method="POST">
<table>
  <label for="exampleFormControlTextarea1" class="form-label">laporan</label>
  <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="laporan" value="<?php echo $data
  ['isi_laporan']?>"></input>
 
  

  <button  class="btn btn-primary" type="submit">laporkan</button>
  </table>
  </form>
  </div>
</div>
</div>
</body>
</html>