<?php
    session_start([
        'cookie_lifetime' => '300',
    ]);

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if('admin' == $_POST['username'] && '1111' == $_POST['password']){
            $_SESSION['LoggedIN'] = true;
        }else{
            $_SESSION['LoggedIN'] = true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

    <div class="container">

    <?php 
        if(isset($_SESSION['LoggedIN']) && $_SESSION['LoggedIN'] == true){
            echo 'Hello Admin, Welcome';
        } else {
            echo 'Hello Stranger, Login Below';
        }
    ?>

        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="#">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
            </form>
        </div>
    </div>

</body>

</html>
