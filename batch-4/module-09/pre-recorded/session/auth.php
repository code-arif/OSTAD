<?php
session_start([
    session_name('single_user_login'),
    'cookie_lifetime' => 300, // 5 minutes
]);
$error = false;

if(isset($_POST['username']) && $_POST['password']){
    if($_POST['username'] == 'master' && md5($_POST['password']) == '74b87337454200d4d33f80c4663dc5e5'){
        $_SESSION['loggedin'] = true;
    }else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    session_destroy();
    header("Location: " . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session login</title>

    <style>
        body {
            background-color: #e5e8e8;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main_container {
            background-color: #d5f5e3;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .container p {
            color: #666;
            font-size: 15px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            display: block;
            color: #333;
            font-size: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #58d68d;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
        }

        button:hover {
            background-color: #28b463;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <div class="container">
            <h2>Single User Static Login Form</h2>

            <?php
            if($error){
                echo "<strong style='color:red' > Username and password didn't matched!! </strong>";
            }
            ?>

            <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                echo "<p> Hello Admin. Welcome </p>";
            }else{
                echo "<p>Hello Stranger. Login to the form below</p>";
            }
            ?>

            <?php
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false):
            ?>

            <form action="" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>

            <?php
            else:
            ?>

            <form action="" method="GET">
                <div>
                    <input type="hidden" name="logout" value="true">
                    <button type="submit">Logout</button>
                </div>
            </form>

            <?php
            endif;
            ?>
        </div>
    </div>
</body>

</html>