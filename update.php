<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php

        //Include file koneksi, untuk koneksikan ke database
        include "service/database.php";

        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
        if (isset($_GET['id_peserta'])) {
            $id_peserta = input($_GET["id_peserta"]);

            $sql = "select * from peserta where id_peserta=$id_peserta";
            $hasil = mysqli_query($db, $sql);
            $data = mysqli_fetch_assoc($hasil);
        }

        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id_peserta = htmlspecialchars($_POST["id_peserta"]);
            $nama = input($_POST["nama"]);
            $sekolah = input($_POST["sekolah"]);
            $jurusan = input($_POST["jurusan"]);
            $email = input($_POST["email"]);
            $no_hp = input($_POST["no_hp"]);
            $alamat = input($_POST["alamat"]);
            $alasan_mengikuti = input($_POST["alasan_mengikuti"]);

            //Query update data pada tabel anggota
            $sql = "update peserta set
			nama='$nama',
			sekolah='$sekolah',
			jurusan='$jurusan',
            email='$email',
			no_hp='$no_hp',
			alamat='$alamat'
            alasan_mengikuti='$alasan_mengikuti'
			where id_peserta=$id_peserta";

            //Mengeksekusi atau menjalankan query diatas
            $hasil = mysqli_query($db, $sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($hasil) {
                header("Location:dashboard.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }

        ?>
        <h2>Update Data</h2>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

            </div>
            <div class="form-group">
                <label>Sekolah:</label>
                <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required />
            </div>
            <div class="form-group">
                <label>Jurusan :</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required />
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Email" required />
            </div>
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required></textarea>
            </div>
            <div class="form-group">
                <label>Alasan Mengikuti:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alasan Mengikuti Kegiatan" required></textarea>
            </div>

            <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>" />

            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>