<?php

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        .container-form {
            width: 100%;
            height: auto;
            background-color: #0000FF;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #eaeaea;
        }

        .form {
            text-align: center;
            padding: 15px;
        }

        .form a {
            background-color: tomato;
            padding: 8px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
        }

        .form a:hover {
            background-color: #002D62;
            transition: all .5s ease-in-out;
        }

        .form-deskripsi {
            margin-bottom: 10px;
            font-family: Helvetica;
        }

        .sosialMedia {
            width: 100%;
            height: 100%;
            background-image: url(assets/foto1.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .container-sosial {
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            padding: 200px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .media {
            align-items: center;
            flex-direction: column;
            background-color: #eaeaea;
            color: black;
            margin: 20px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            box-shadow: 4px 4px 0px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 4px 4px 0px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 4px 4px 0px 0px rgba(0, 0, 0, 0.75);
        }

        .icon-media {
            text-align: center;
            width: 50px;
            height: 50px;
        }


        .media-a {
            background-color: blue;
            text-decoration: none;
            color: white;
            margin: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .media-a:hover {
            text-decoration: none;
            color: white;
            background-color: rgb(0, 95, 249);
            transition: all 0.5s ease-in-out;
        }

        .proses {
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.8);
            font-size: 20px;
            padding: 5px;
        }

        .container-footer {
            width: 100%;
            height: auto;
            background-color: rgb(0, 0, 0);
            color: white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        @media only screen and (max-width: 500px) {
            .lomba {
                margin-left: 50px;
            }

            .container-sosial {
                flex-direction: row;
            }

        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-info shadow">
        <span class="navbar-brand mb-0 h1 ">Arif Suriadi UAS</span>
        <form action="dashboard.php" method="POST">
            <a href="home.php" class="bg-primary text-light border-primary rounded p-2 text-decoration-none m-2">Home</a>
            <a href="dashboard.php" class="bg-primary text-light border-primary rounded p-2 text-decoration-none m-2">Table</a>
            <button type="submit" name="logout" class="bg-danger text-light border-danger rounded">log out</button>
        </form>
    </nav>

    <div class="jumbotron text-center">
        <img src="assets/Arif.jpg" alt="arif.jpg" style="border-radius: 50%; width: 150px;">
        <h1 class="display-4">ARIF SURIADI</h1>
        <p class="lead">
            Identitas</p>
        <p>Npm: 230305020 <br> Prodi: Pendidikan Informatika</p>

        <hr class="my-4">
        <p>Untuk mengetahui data informasi bisa scroll kebawah ini </p>
    </div>

    <div class="container-form" id="formDaftar">
        <div class="form">
            <h2 class="form-deskripsi">Form Tabel dibawah ini</h2>
            <a href="dashboard.php" class="daftar-form">Masuk</a>
        </div>
    </div>

    <div class="sosialMedia" id="media1">
        <div class="container-sosial">
            <div class="media">
                <img src="assets/ig.png" alt="Instagram" class="icon-media">
                <h4 class="media-h4">Instagram</h4>
                <p>Follow instagram kami</p>

                <a href=" https://www.instagram.com/arifsuriadi77/. " class="media-a">Masuk</a>
            </div>
            <div class="media">
                <img src="assets/tiktok.png" alt="tiktok" class="icon-media">
                <h4>Tiktok</h4>
                <p>follow tiktok kami</p>

                <a href="www.tiktok.com" class="media-a">Masuk</a>
            </div>
            <div class="media">
                <img src="assets/fb.png" alt="facebook" class="icon-media">
                <h4>Facebook</h4>
                <p>Ikuti facebook kami</p>

                <a href="https://www.facebook.com/" class="media-a">Masuk</a>
            </div>
        </div>
        <div class="proses">
            <i>@arifsuriadi</i>
        </div>
    </div>


</body>

</html>