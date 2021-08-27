<?php 
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];



 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Luffi Hut</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
        <a class="nav-link " aria-current="page" href="#">Piza</a>
        <a class="nav-link " aria-current="page" href="#">Pasta</a>
        <a class="nav-link " aria-current="page" href="#">Nasi</a>
        <a class="nav-link " aria-current="page" href="#">Minuman</a>
      </div>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<div class="container">
  <div class="row mt-3">
    <div class="col">
      <h1>All Menu</h1>
    </div>
  </div>

  <div class="row">
    <?php foreach($menu as $row) : ?>
  <div class="col-md-4">
    <div class="card mb-3">
      <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?= $row["nama"]; ?></h5>
        <p class="card-text"><?= $row["deskripsi"] ?>.</p>
        <h5 class="card-title">Rp. <?= $row["harga"] ?></h5>
        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
      </div>
    </div>
  </div>
    <?php endforeach; ?>
</div>
</div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <!-- <script src="js/script1.js"></script> -->
    <script>
      const navlink = document.querySelectorAll('.nav-link');
      navlink.class.remove('active');

      // $(document).ready(function(){
      //   $('.nav-link').removeClass('active');
      //   $(this).addClass('active');

      // })
    </script>
  </body>
</html>