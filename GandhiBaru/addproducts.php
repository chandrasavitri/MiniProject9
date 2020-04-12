<?php

require 'functions.php';
//Sudah di submit atau belum

if( isset($_POST["submit"])){
  //check berhasil ditambahkan atau tidak
  if (tambah($_POST)>0){
    echo "
        <script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'listproduct.php'
        </script>
    ";
  } else {
    echo"    
    <script>
    alert('data gagal!');
    </script>
    ";

  }
};
?>
<!DOCTYPE html>
<html>
<head>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" href="style2.css">
        <script type="text/javascript" src="html.js"> </script>
        <script type="text/javascript" src="toggleIcon.js"> </script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
</head>
<body class="px-5">
    <h1> Masukan Data </h1>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
        
        <label for="jenis">Jenis:</label>
        <input type="text" class="form-control" id="jenis" name="jenis" required>
        
        <label for="kategori">Kategori:</label>
        <select class="form-control" id="kategori" name="kategori">
          <option>Statue</option>
          <option>Jewel</option>
        </select>
        
        <label for="harga">Harga:</label>
        <input type="text" class="form-control" id="harga" name="harga" required>
        
        <label for="desc">Deskripsi Product:</label>
        <textarea class="form-control" rows="5" id="desc" name="desc" required></textarea>

        <label for="cata">Foto Katalog:</label>
        <input type="file" class="form-control" id="cata" name="cata">

        <label for="caro1">Foto Product Deskripsi:</label>
        <input type="file" class="form-control" id="caro1" name="caro1">
        
        <button class="btn btn-primary" type="submit" name="submit">Tambah Product</button>
    </div>
    </form>
</body>
</html>