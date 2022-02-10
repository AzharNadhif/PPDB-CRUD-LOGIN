<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_casis');

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function register($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $tgllahir = htmlspecialchars($data["tgllahir"]);
    $wn = htmlspecialchars($data["wn"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $hp = htmlspecialchars($data["hp"]);
    $asal = htmlspecialchars($data["asal"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $penghasilan = htmlspecialchars($data["penghasilan"]);

    //upload foto
    $foto = upload();
    if (!$foto){
        return false;
    }


    $query = "INSERT INTO tbl_casis VALUES ('','$nama','$ttl','$tgllahir','$wn','$alamat','$email','$hp','$asal','$ayah','$ibu','$penghasilan','$foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if( $error === 4){
        echo"<script>
            alert('silakan pilih gambar terlebih dahulu !'); 
        </script>";

        return false;
    }

    //cek apakah yang di upload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo"<script>
            alert('yang anda upload bukan file gambar'); 
        </script>";

        return false;
    }

    //cek jika ukuran berlebih
    if($ukuranFile > 2000000){
        echo"<script>
            alert('ukuran gambar terlalu besar !'); 
        </script>";

        return false;
    }

    //lolos pengecekan
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'gambar/' . $namaFileBaru);

    return $namaFileBaru;
}



function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_casis WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $tgllahir = htmlspecialchars($data["tgllahir"]);
    $wn = htmlspecialchars($data["wn"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $hp = htmlspecialchars($data["hp"]);
    $asal = htmlspecialchars($data["asal"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $penghasilan = htmlspecialchars($data["penghasilan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah pilih gambar baru/tidak
    if ( $_FILES ['foto']['error']=== 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE tbl_casis SET
            nama = '$nama',
            ttl = '$ttl',
            tgllahir = '$tgllahir',
            wn = '$wn',
            alamat = '$alamat',
            email = '$email',
            hp = '$hp',
            asal = '$asal',
            ayah = '$ayah',
            ibu = '$ibu',
            penghasilan = '$penghasilan',
            foto = '$gambar'
        WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
