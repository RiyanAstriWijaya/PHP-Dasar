<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($data["nim"]) ;
    $nama = htmlspecialchars($data["nama"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $gambar = htmlspecialchars($data["gambar"]);
    $email = htmlspecialchars($data["email"]);
    
    //query insert data
    $query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$jurusan','$gambar','$email')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]) ;
    $nama = htmlspecialchars($data["nama"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $gambar = htmlspecialchars($data["gambar"]);
    $email = htmlspecialchars($data["email"]);
    
    //query update data
    $query = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                jurusan = '$jurusan',
                gambar = '$gambar',
                email = '$email',
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
                WHERE 
                    nim LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' 
    ";

    return query($query);
}

?>