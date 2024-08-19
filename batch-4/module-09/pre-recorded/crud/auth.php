<?php
session_start([
    session_name('single_user_login'),
    'cookie_lifetime' => 300, // 5 minutes
]);
$error = false;
session_destroy();

$fileName = "I:\\ostad_nama\\ostad_module\\batch-4\\module-09\\pre-recorded\\crud\\data\\users.txt";
$fp = fopen($fileName, 'r');

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == md5($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            header('Location:index.php');
        } else {
            $error = true;
            $_SESSION['loggedin'] = false;
        }
    }
    if(!$_SESSION['loggedin']){
        $error =true;
    }
    
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    session_destroy();
    header('Location:index.php');
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
            <h2>CRUD</h2>

            <?php
            if ($error) {
                echo "<strong style='color:red' > Username and password didn't matched!! </strong>";
            }
            ?>

            <?php
            if($_SESSION['loggedin'] == false):
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
            endif;
            ?>
        </div>
    </div>
</body>

</html>