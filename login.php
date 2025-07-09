<?php

session_start();
include "service/database.php";

$login_message = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username= 
       '$username' AND password='$password' ";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;


        header("location: home.php");
    } else {
        $login_message = "data tidak ditemukan";
    }
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arifsuriadi</title>

    <style>
        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: url(assets/background.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .container-dalam {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px;


        }

        .title {
            font-size: 20px;
            margin: auto;
            margin-left: 0;
            color: black;
            padding: 8px;
            font-weight: 800;
            font-family: sans-serif;
        }

        .ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 8px;
        }

        .li-navbar a:hover {
            background-color: rgb(0, 68, 255);
            padding: 8px;
            transition: .5 ease-in-out;
            transition-delay: .1;
            border-radius: 5px;

        }

        a {
            text-decoration: none;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            background-color: blue;
            color: white;
        }


        .container-login {
            height: 500px;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .container-masuk {
            text-align: center;
            margin-bottom: 15px;
            color: white;
        }

        .i-msg {
            margin-left: 35px;
            color: red;
            font-weight: 500;
        }

        .login {
            flex-direction: row;
            background-color: blue;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
        }

        .input {
            padding: 8px;
            margin: 10px;
            display: flex;
            flex-direction: column;
            border-radius: 5px;
            border: 1px solid white;
        }

        .input-label {
            margin-left: 10px;
            margin-bottom: 5px;
            color: white;
        }

        .btn {
            text-decoration: none;
            background-color: rgb(4, 192, 255);
            color: black;
            margin-top: 10px;
            margin-left: 5px;
            border-radius: 3px;
            padding: 5px;
            border: 1px solid rgb(4, 192, 255);

        }

        .container-footer {
            margin-top: 50px;
            text-align: center;
            height: 10px;
        }

        .i {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="container-dalam">
            <h3 class="title">Arif Suriadi</h3>
            <ul class="ul">
                <li class="li-navbar"><a href="index.php" class="navbar">Home</a></li>
                <li class="li-navbar"><a href="login.php" class="navbar">Login</a></li>
                <li class="li-navbar"><a href="register.php" class="navbar">Register</a></li>
            </ul>
        </header>
        <div class="container-login">
            <div class="login">
                <h3 class="container-masuk">MASUK AKUN</h3>
                <hr />
                <i class="i-msg"><?= $login_message ?></i>
                <form action="login.php" method="POST">
                    <label for="" class="input-label">username</label>
                    <input type="text" placeholder="username" name="username" class="input" />
                    <label for="" class="input-label">password</label>
                    <input type="password" placeholder="password" name="password" class="input" />
                    <button type="submit" name="login" class="btn">Masuk Sekarang</button>

                </form>
            </div>
        </div>

        <footer class="container-footer">
            <hr />
            <i class="i">dibuat oleh @arifsuriadi</i>
        </footer>
    </div>







</body>

</html>