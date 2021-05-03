<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <center>
        <h1>Registrasi</h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">


                    <table border=0 align=”center”>
                        <form action="" method="POST">

                            <tr>
                                <div class="form-group">
                                    <td><label for="nama">Nama</label></td>
                                    <td><input class="form-control" type="text" name="nama" placeholder="Nama " /></td>
                                </div>
                            </tr>
                            <tr>

                                <div class="form-group">
                                    <td><label for="username">Username</label></td>
                                    <td><input class="form-control" type="text" name="username" id="username" placeholder="username" /></td>
                                </div>
                            </tr>
                            <tr>

                                <div class="form-group">
                                    <td><label for="nohp">No hp</label></td>
                                    <td><input class="form-control" type="text" name="nohp" id="nohp" placeholder="No HP" /></td>
                                </div>
                            </tr>
                            <tr>

                                <div class="form-group">
                                    <td><label for="password">Password</label></td>
                                    <td><input class="form-control" type="password" name="password" id="password" placeholder="Password" /></td>
                                </div>
                            </tr>

                            <tr>
                                <div class="form-group">
                                    <td><label for="password2">Konfirmasi Password</label></td>
                                    <td><input class="form-control" type="password" name="password2" id="password2" placeholder="Konfirmasi Password" /></td>
                                </div>
                            </tr>

                            <tr>
                                <td colspan=2>
                                    <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
                                </td>
                            </tr>


                            <tr>
                                <td colspan=2>
                                    <center>
                                        <input type="submit" class="btn btn-success btn-block" name="register" value="register" />
                                    </center>
                                </td>
                            </tr>

                        </form>

                </div>

                <div class="col-md-6">
                    <!-- isi dengan sesuatu di sini -->
                </div>

            </div>
        </div>
    </center>
    <table>
</body>

</html>