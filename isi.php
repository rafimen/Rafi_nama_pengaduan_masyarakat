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
<form action="isi_pengaduan.php" method="POST" enctype="multipart/form-data">
  <label for="exampleFormControlTextarea1" class="form-label">laporan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="laporan"></textarea>
 
  <div class="mb-3">
    <label for="formFile" class="form-label">foto</label>
    <input class="form-control" type="file" id="formFile" name="foto">
  </div>

  <button  class="btn btn-primary" type="submit">laporkan</button>

  </form>
  </div>
</div>
</div>
</body>
</html>