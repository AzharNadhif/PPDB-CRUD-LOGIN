<?php
session_start();

require 'koneksi.php';

$users = read("SELECT * FROM tbl_admin");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin</title>
</head>

<body>
    <table class="table">
        <thead class="thead-dark">

            <tr>
                <th> Nama</th>
                <th> password</th>
            </tr>
        </thead>
        <?php foreach ($users as $u) : ?>
            <tbody class="table table-bordered">
                <tr>
                    <td><?= $u['nama'] ?></td>
                    <td><?= $u['password'] ?></td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</body>

</html>