<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="alok.css">
    </head>

    <body>
        <div class="container">
          <h1><center>Register</center></h1>
            <form method="POST" action="proses_daftar.php">
            <label>nik</label>
            <input type="text" name="nik" id="nik"  >
                <br>
                <label>nama</label>
                <input type="text" name="nama" id="nama">
                <br>
                <label>Username</label>
                <input type="text" name="username" id="username">
                <br>
                <label>Password</label>
                <input type="text" name="password" id="password">
                <br>
                <label>telp</label>
                <input type="tel" name="telp" id="telp">
                <br>
                <button type="submit" >Register</button>
                <p> Sudah punya akun?
                  <a href="pmasyarakat.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
