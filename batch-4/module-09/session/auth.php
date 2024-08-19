<?php
session_start([
    session_name('sinlge_user_login'),
    'cookie_lifetime' => 300, // 5 minutes
]);
//error
$error = false;

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'admin' && md5($_POST['password']) == '74b87337454200d4d33f80c4663dc5e5') {
        $_SESSION['loggedin'] = true;
    } else {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_destroy();
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Session Login</title>

    <style>
        .gradient-custom-2 {
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4 text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">

                            <h4 class="mt-1"> Single user login form </h4>
                            <?php
                            if($error){
                                echo "<strong style='color:red;'> Username and password didn't mathed!! </strong> <br>";
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo "Hello Admin! Welcome";
                            } else {
                                echo "Hello stranger! Login below";
                            }
                            ?>

                            <?php
                            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false):
                            ?>

                                <form method="POST">
                                    <div class="form-outline mb-3">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" />
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <button class="btn btn-primary btn-block gradient-custom-2 mb-3" type="submit">Log in</button>
                                </form>

                            <?php
                            else:
                            ?>
                                <form method="GET">
                                    <input type="hidden" name="logout" value="true">
                                    <button class="btn btn-primary btn-block gradient-custom-2 mb-3" type="submit">Logout</button>
                                </form>

                            <?php
                            endif;
                            ?>

                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">We are more than just a company</h4>
                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>