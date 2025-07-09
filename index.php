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
            background-color: none;
            padding: 8px;
        }

        .title {
            font-size: 20px;
            margin: auto;
            margin-left: 0;
            padding: 8px;
            color: black;
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

        a {
            text-decoration: none;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            background-color: blue;
            color: white;

        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        .h1 {
            margin-top: 80px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;

        }

        h4 {
            font-size: 20px;
        }

        .footer {
            margin-top: 300px;
            text-align: center;

        }

        .i {
            font-weight: 600;
        }
    </style>
</head>


<body>

    <div class="container">
        <div class="container-navbar">
            <header class="container-dalam">
                <h3 class="title">Arif Suriadi</h3>
                <ul class="ul">
                    <li class="li-navbar"><a href="index.php" class="">Home</a></li>
                    <li class="li-navbar"><a href="login.php" class="">Login</a></li>
                    <li class="li-navbar"><a href="register.php" class="">Register</a></li>
                </ul>
            </header>
        </div>

        <div class="main-navbar">
            <main class="main">
                <h1 class="h1">Hallo selamat datang</h1>
                <h4 class="h4">Silahkan login terlebih dahulu</h4>
                <a href="login.php">Masuk</a>
            </main>
            <footer class="footer">
                <hr />
                <i class="i">dibuat oleh @arifsuriadi</i>
            </footer>
        </div>
    </div>







</body>

</html>