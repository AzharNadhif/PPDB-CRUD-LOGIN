<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {



    //cek data berhasil atau tidak
    if (register($_POST) > 0) {
        echo "
            <script>
                alert('Terima Kasih Data Anda Berhasil ditambahkan !');
                document.location.href = 'index.html';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
            document.location.href = 'index.html';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>


    <!-- FORM -->
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for=" nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required="">
            </li>
            </ul>
            <ul>
                <li>
                    <label for="ttl">Kota Kelahiran</label>
                    <input type="text" id="ttl" name="ttl" class="form-control" placeholder="Masukkan Nama Kota" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="ttl">Tanggal Lahir</label>
                    <input type="date" id="tgllahir" name="tgllahir" class="form-control" placeholder="Tanggal-Bulan-Tahun" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="wn">Warga Negara</label>
                    <input type="text" id="wn" name="wn" class="form-control" placeholder="Contoh : Indonesia" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="contoh@gmail.com" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="hp">Nomor Telepon</label>
                    <input type="text" id="hp" name="hp" class="form-control" placeholder="Masukkan No Telepon" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="asal">Asal Sekolah</label>
                    <input type="text" id="asal" name="asal" class="form-control" placeholder="Masukkan Asal Sekolah" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="ayah">Nama Ayah</label>
                    <input type="text" id="ayah" name="ayah" class="form-control" placeholder="Masukkan Nama Ayah" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="ibu">Nama Ibu</label>
                    <input type="text" id="ibu" name="ibu" class="form-control" placeholder="Masukkan Nama Ibu" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="penghasilan">Penghasilan Orang Tua</label>
                    <input type="text" id="penghasilan" name="penghasilan" class="form-control" placeholder="Masukkan Nominal Penghasilan Orang Tua /Bulan" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="foto">Masukkan Foto </label>
                    <input type="file" class="foto" name="foto" id="foto" required="">
                </li>
            </ul>

            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>