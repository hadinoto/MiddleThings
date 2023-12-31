<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <?php
                // var_dump($_GET);
                // die;
                if ($_GET['error']) {
                    // echo "Naga";
                    echo "<div class='alert alert-danger alert-dismissible small' style='border-radius: 0%;'>
                                            <button type='button' class='close small' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                            Username / Password Salah
                                          </div>";
                }
                ?>


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="../command/login_admin.php" method="post">
                                        <div class="form-group">
                                            <input style="border-radius: 0;" type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="username" placeholder="Enter Usename..." required>
                                        </div>
                                        <div class="form-group">
                                            <input style="border-radius: 0;" type="password" class="form-control form-control-user" id="myInput" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="small">
                                                <input type="checkbox" onclick="showPassword()"> <span>Show Password</span>
                                            </div>
                                        </div>
                                        <button style="border-radius: 0;" class="btn btn-primary btn-user btn-block" name="login_admin">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-left">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        function showPassword() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>