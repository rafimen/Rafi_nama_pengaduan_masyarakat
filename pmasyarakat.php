<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="pmas.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form action="proses_login.php" method="POST">
                <div class="mb-3">
                <label>Username</label><br>
                <input type="username" class="form-control" id="username" name="username"><br>
                </div>

                <div class="mb-3">
                <label>Password</label><br>
                <input type="password" class="from-control" id="password" name="password"><br>
                </div>
                <button type="submit" class="btn btn-primary" >Login</button>
                <div>
            </form>
            <div class="daftar">
                <p>daftar akun? <a href="halaman.php">daftar</a></p>
            </div>
        </div>     
    </body>
</html>