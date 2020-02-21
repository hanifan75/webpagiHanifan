<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <?php
    include"header.php";
    ?>

<!-- css internal -->
<style>
  a{text-decoration: none; color: white;}
  a:hover{text-decoration: none; color: red;}
</style>

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#"><img src="html/img/logo.png" width="45px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari disini..." aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><img src="html/img/cari.png" width="20px"></button>
    </form>
  </div>
</nav>
<br>
<!-- Container -->
<div class="container-fluid">

<!-- Slider -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="html/img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="html/img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="html/img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<!-- tabel -->
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">NIM</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Lorem</td>
      <td>IF</td>
      <td>11</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ipsum</td>
      <td>MTK</td>
      <td>23</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dolor</td>
      <td>BIO</td>
      <td>45</td>
    </tr>
  </tbody>
</table>
<!-- teks -->
    <div class="row">
        <div class="col-md-3">
            <h1>Atribut 1</h1>
        </div>
        <div class="col-md-3">
            <h2>Atribut 2</h2>
        </div>
        <div class="col-md-3">
            <h3>Atribut 3</h3>
        </div>
        <div class="col-md-3">
            <h4>Atribut 4</h4>
        </div>
    </div> 
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-success">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Very long link 1</a>
            </li>
            <li>
              <a href="#!">Very long link 2</a>
            </li>
            <li>
              <a href="#!">Very long link 3</a>
            </li>
            <li>
              <a href="#!">Very long link 4</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
<!-- Copyright -->
</footer>








<?php
    include"footer.php";
    ?>
</body>
</html>