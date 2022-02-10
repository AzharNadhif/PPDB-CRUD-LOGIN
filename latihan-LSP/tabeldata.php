<?php

require 'koneksi.php';
$users = read("SELECT * FROM tbl_casis");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tabel Data</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Tampilan Data</title>
    </head>

    <body>
        <h1>Data Calon Siswa</h1>
        <table class="table">
            <thead class="thead-dark">

                <tr>
                    <th> No</th>
                    <th> Nama</th>
                    <th> Kota Kelahiran</th>
                    <th> Tanggal lahir</th>
                    <th> Warga Negara</th>
                    <th> Alamat</th>
                    <th> Email</th>
                    <th> Nomor Telepon</th>
                    <th> Asal Sekolah</th>
                    <th> Nama Ayah</th>
                    <th> Nama Ibu</th>
                    <th> Penghasilan Orang tua</th>
                    <th> Foto</th>
                    <th>Edit | Hapus</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($users as $u) : ?>
                <tbody class="table table-bordered">
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['ttl'] ?></td>
                        <td><?= $u['tgllahir'] ?></td>
                        <td><?= $u['wn'] ?></td>
                        <td><?= $u['alamat'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['hp'] ?></td>
                        <td><?= $u['asal'] ?></td>
                        <td><?= $u['ayah'] ?></td>
                        <td><?= $u['ibu'] ?></td>
                        <td><?= $u['penghasilan'] ?></td>
                        <td><img src="gambar/<?= $u['foto']; ?>" width="100" alt=""></td>
                        <td>
                            <a href="ubah.php?id=<?= $u["id"]; ?> "class="btn btn-info" style="color: white;">Ubah</a> |
                            <a href="hapus.php?   id=<?= $u["id"]; ?>" onclick="return confirm ('yakin ?')" ; class="btn btn-danger style="color: white;">Hapus</a>
                        </td>

                    </tr>
                </tbody>
                <?php $i++ ?>
            <?php endforeach ?>


        </table>
    </body>

    </html>
</body>

</html>