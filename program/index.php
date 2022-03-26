<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap 5 Alpha CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <!-- <p class="copyright">Design with <i class="fa fa-heart" style="color: red;"></i> by Andika Pangestu <br>
        <a href="github.com/andikatuluspangestu" style="color: white;"><i class="fa fa-github"></i></a> &nbsp;
        <a href="instagram.com/andhikatuluspangestu" style="color: white;"><i class="fa fa-instagram"></i></a> &nbsp;
        <a href="dribbble.com/andikatulusp" style="color: white;"><i class="fa fa-dribbble"></i></a>
    </p> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card login-content shadow-lg border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="logo" src="https://cdn3.iconfinder.com/data/icons/galaxy-open-line-gradient-i/200/account-256.png">
                        </div>
                        <h3 class="text-logo">Sign In</h3>
                        <br>
                        <form class="text-center" action="./script/logincustomer.php" method="POST">
                            <input class="form-control border-0" type="text" name="cname" placeholder="Type Your Username">
                            <br>
                            <input class="form-control border-0" type="password" name="cpass" placeholder="Type Your Password">
                            <br>
                            <input class="btn btn-primary btn-sm border-0 " type="submit" name="submituser" value="Customer Sign In"></input>
                            <p class="forgot"><a href="">Forgot Password?</a></p>
                        </form>
                        <form class="text-center" action="./script/loginseller.php" method="POST">
                            <input class="form-control border-0" type="text" name="sname" placeholder="Type Your Username" required>
                            <br>
                            <input class="form-control border-0" type="password" name="spass" placeholder="Type Your Password" required>
                            <br>
                            <input class="btn btn-primary btn-sm border-0 " type="submit" name="submitseller" value="Seller Sign In"></input>
                            <p class="forgot"><a href="">Forgot Password?</a></p>
                        </form>
                    </div>
                    <div class="nomember">
                        <p class="text-center">Not a member? <a href="register.php">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 Alpha JavaScript Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>

</html>