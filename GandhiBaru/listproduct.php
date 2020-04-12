<?php
require 'functions.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" href="style2.css">
        <script type="text/javascript" src="html.js"> </script>
        <script type="text/javascript" src="toggleIcon.js"> </script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    </head>
<body>
    <h1>List Produk Data</h1>
    <a href="#" class="btn btn-primary btn-lg" role="button">Tambah Data</a>
    
        
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama Product</th>
                <th scope="col">Jenis Product</th><!--Statue, atau Jewel, atau sebagainya-->
                <th scope="col">Kategori Product</th><!--Ganesha atau Shiva atau sebagainya-->
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto Product Catalogue</th>
                <th scope="col">Foto Product Carousel1</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><a href="#" class="btn btn-primary btn-md" role="button">Edit Data</a><br>
                <a href="#" class="btn btn-warning btn-md" role="button">Hapus Data</a></td>
                <td>Ganesha</td>
                <td>Ganesha</td>
                <td>Statue</td>
                <td>Rp.1999999</td>
                <td>sdafasdsdgsdagasdsdagsd</td>
                <td><img src="Foto/Mask Group 6.png" style="width: 50%; height: auto; text-align: center;"></td>
                </tr>
                <?php while( $row = mysqli_fetch_assoc($result)):?>
                <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><a href="#" class="btn btn-primary btn-md" role="button">Edit Data</a><br>
                <a href="#" class="btn btn-warning btn-md" role="button">Hapus Data</a></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["jenis"]; ?></td>
                <td><?php echo $row["kategori"]; ?></td>
                <td>Rp.<?php echo $row["harga"]; ?></td>
                <td><?php echo $row["desc"]; ?></td>
                <td><img src="Foto/<?php echo $row["cata"]; ?>" style="width: 20vw; height: auto; text-align: center;"></td>
                <td><img src="Foto/<?php echo $row["caro1"]; ?>" style="width: 20vw; height: auto; text-align: center;"></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
        

</body>



</html>
