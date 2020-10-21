<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/signin.css">
    <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">
    <div class="form-signin">

        <form class="" action="../controller/signup.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
            <label class="sr-only">Username</label>
            <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
            <label class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox mb-3">
                <!-- <label>
				<input type="checkbox" value="remember-me"> Remember me
			</label> -->
            </div>
            <p class="mt-5 mb-3 text-muted">2017-2019</p>
        </form>
        <a href="signup.php"><button class="btn btn-lg btn-dark" value="SIGNUP">Sign up</button></a>
    </div>

</body>

</html>