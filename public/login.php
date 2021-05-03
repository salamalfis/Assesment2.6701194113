<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">
    <center>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">


                    <table border=0 align=”center”>
                        <h1>Login</h1>

                        <form method="POST" action="actionlogin.php">
                            <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="username">Username</label>
                                    </td>
                                    <td><input class="form-control" type="text" name="username" placeholder="Username" /></td>
                                </div><br>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td><label for="password">Password</label></td>
                                    <td><input class="form-control" type="password" name="password" placeholder="Password" /></td>
                                </div>
                            </tr>
                            <br>
                            <tr>
                                <td colspan="2">
                                    <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
                                </td>
                            </tr>


                            <tr>
                                <td colspan="2">
                                    <center>
                                        <input type="submit" class="btn btn-success btn-block" name="login" value="LOGIN" />
                                    </center>

                                </td>
                            </tr>

                        </form>
                    </table>
                </div>

                <div class="col-md-6">
                    <!-- isi dengan sesuatu di sini -->
                </div>

            </div>
        </div>
    </center>
</body>

</html>