<?php
include "service/database.php";

session_start();

$register_message = "";
$kosong_message = "";


if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($username) || empty($password)) {
        header("location: register.php");
        $kosong_message = "Username dan password tidak boleh kosong";

        exit;
    }
}


if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$password')";

        if ($db->query($sql)) {
            $register_message = "daftar akun berhasil";
        } else {
            $register_message = "daftar akun gagal";
        }
    } catch (mysqli_sql_exception) {
        $register_message = "username sudah digunakan, silahkan coba lagi";
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
            font-family: Arial, Helvetica, sans-serif;
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

        .navbar {

            text-decoration: none;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            background-color: blue;
            color: white;
        }

        .register {
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

        .container-register {
            flex-direction: row;
            background-color: blue;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: 7px 7px 6px -2px rgba(0, 0, 0, 0.33);
        }

        .i-msg {
            margin-left: 30px;
            color: greenyellow;
            font-weight: 500;
        }

        .input {
            padding: 8px;
            margin: 10px;
            display: flex;
            flex-direction: column;
            border-radius: 5px;
            border: 1px solid white;
        }

        .label-input {
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
        <div class="register">
            <div class="container-register">
                <h3 class="container-masuk">DAFTAR AKUN</h3>
                <hr />
                <i class="i-msg"> <?= $register_message ?> </i>
                <i class="kosong"> <?= $kosong_message ?> </i>
                <form action="register.php" method="POST">
                    <label for="" class="label-input">username</label>
                    <input type="text" placeholder="username" name="username" class="input" />
                    <label for="" class="label-input">password</label>
                    <input type="password" placeholder="password" name="password" class="input" />
                    <button type="submit" name="register" class="btn">Daftar Sekarang</button>
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