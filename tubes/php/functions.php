<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('Connections_failed') ;

    return $conn;
}


function query ($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die (mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah ($data) {
    $conn = koneksi();

        //jika user tidak memilih gambar
        if($_FILES["gambar"]["error"] === 4) {
            $gambar = 'default.jpg' ;
        } else {
            //jalankan fungsi upload gambar
            $gambar = upload();
            // cek jika upload gagal
            if (!$gambar) {
                return false;
            }
        }

    $nama = htmlspecialchars($data["nama"]);
    $genre = htmlspecialchars($data["genre"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $rating = htmlspecialchars($data["rating"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO entertainment VALUES
                (null, '$nama', '$genre', '$deskripsi', '$rating', '$gambar')";
            mysqli_query($conn, $query) or die (mysqli_error($conn));

            return mysqli_affected_rows($conn);
}


function hapus($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $ent = query("SELECT * FROM entertainment WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($ent["gambar"] !== 'default.jpg') {
        unlink('../img/' . $ent["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM entertainment WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = $data ["id"];
    $nama = htmlspecialchars ($data ['nama']);
    $genre = htmlspecialchars ($data ['genre']);
    $deskripsi = htmlspecialchars ($data ['deskripsi']);
    $rating = htmlspecialchars ($data ['rating']);
    $gambar = htmlspecialchars ($data ['gambar']);

    $query = "UPDATE entertainment SET 
                nama = '$nama',
                genre = '$genre',
                deskripsi = '$deskripsi',
                rating = '$rating',
                gambar = '$gambar'
             WHERE id = $id ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username yang dipilih sudah terdaftar!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
}

function upload() {
    //siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file yg diupload bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script> alert('File Tidak Mendukung!'); </script>" ;

        return false;
    }

    //cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script> alert('file terlalu besar'); </script>" ;
        return false;
    }
    //lolos pengecekan
    $newfilename = uniqid() . $filename;

    move_uploaded_file($filetmpname, '../img/'. $filename);

    return $filename;
}