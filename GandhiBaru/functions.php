<?php
//Koneksi ke database//
$conn = mysqli_connect("localhost", "root","","frangipani");
$result = mysqli_query($conn,"SELECT * FROM products");

function tambah($post){
    //ambil data dari tiap elemen dalam form//
  global $conn;
  $name = $post["name"];
  $jenis = $post["jenis"];
  $kategori = $post["kategori"];
  $harga = $post["harga"]; 
  $desc = $post["desc"];

  //upload gambar
  $cata = uploadcata();
  if (!$cata) {
    return false;
  }
  $caro1 = uploadcaro1();
  if (!$caro1) {
    return false;
  }

  
  //query insert data
  $query = "INSERT INTO products 
            VALUES
            ('','$name','$jenis','$kategori','$harga','$desc','$cata','$caro1')
  
          ";
  mysqli_query($conn,$query);
  //check apakah data berhasil ditambahkan atau tidak
  return mysqli_affected_rows($conn);
}

function uploadcata(){
  $namaFile = $_FILES['cata']['name'];
  $ukuranFile = $_FILES['cata']['size'];
  $error = $_FILES['cata']['error'];
  $tmpName = $_FILES['cata']['tmp_name'];
  
  //cek apakah tidak ada cata yang diupload
  if($error === 4){
    echo "
        <script>
          alert('cata gak keupload woe!');
        </script>
    ";
    return false;
  }
  //cek apakah itu cata atau bukan
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
     alert('yang anda upload bukan cata!');
     </script>";
    return false;
  }
  //generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  //lolos pengecheckan gambar siap diupload
  move_uploaded_file($tmpName, 'Foto/'.$namaFileBaru);

  return $namaFileBaru;
}
function uploadcaro1(){
  $namaFile = $_FILES['caro1']['name'];
  $ukuranFile = $_FILES['caro1']['size'];
  $error = $_FILES['caro1']['error'];
  $tmpName = $_FILES['caro1']['tmp_name'];
  
  //cek apakah tidak ada caro1 yang diupload
  if($error === 4){
    echo "
        <script>
          alert('caro1 gak keupload woe!');
        </script>
    ";
    return false;
  }
  //cek apakah itu caro1 atau bukan
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
     alert('yang anda upload bukan caro1!');
     </script>";
    return false;
  }
  //generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  //lolos pengecheckan gambar siap diupload
  move_uploaded_file($tmpName, 'Foto/'.$namaFileBaru);

  return $namaFileBaru;
}

?>