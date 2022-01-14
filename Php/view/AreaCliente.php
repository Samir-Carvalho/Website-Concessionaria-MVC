<!DOCTYPE html>
<html lang="pt">

<?php
// Inicia sessões 
session_start();
// Verifica se existe os dados da sessão de login 
if (!isset($_SESSION['cpfcliente'])) { // Usuário não logado! Redireciona para a página de login 
  header('location: ../view/AreaLogin.php');
  exit;
}
?>


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" >
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Concessionária | JLSV</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/owl.css">

</head>

<body>

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>Concessionaria <em>JLSV</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="AreaCliente.php">Home
                <span class="sr-only">(current)</span>
              </a>

            </li>
            <li class="nav-item"><a class="nav-link" href="ConsultarVeiculo.php">Consultar Veículo</a></li>

            <?php

            if (isset($_SESSION['cpfcliente'])) {

              echo "<li class='nav-item'><a class='nav-link' href=\" ../controller/sai  r.php\"> Sair  </a></li>";
            }
            ?>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>CONCESSIONARIA JLSV</h4>
          <h2>Seu carro está aqui !</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->S

  <!--  -->
  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Carros </h2>
            <form method="post">
              <a href="ConsultarVeiculo.php" type="submit">Consultar veiculos <i class="fa fa-angle-right"></i></a>
            </form>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-1-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>S.U.V</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-2-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>BMW</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-3-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>MERCEDES</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-4-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>MERCEDES</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-5-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>BMW</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details.html"><img src="../assets/images/product-6-370x270.jpg" alt=""></a>
            <div class="down-content">
              <a href="car-details.html">
                <h4>FORD</h4>
              </a>
              <h6><small><del> $11199.00</del></small> $11179.00</h6>
              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Form Area End -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Template Bootstrap by: PHPJabbers.com</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>
</body>

</html>