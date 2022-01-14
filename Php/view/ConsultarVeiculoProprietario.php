<!DOCTYPE html>
<html lang="pt">


<?php
// Inicia sessões 
session_start();


// Verifica se existe os dados da sessão de login 
if (!isset($_SESSION['cpfproprietario'])) {
    // Usuário não logado! Redireciona para a página de login 
    header('location: ../view/AreaLogin.php');
    exit;
}
?>


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon">
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
                        <a class="nav-link " href="AreaProprietario.php">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item"><a class="nav-link" href="CadastrarVeiculo.php">Cadastrar Veiculo</a></li>
                    <li class="nav-item active"><a class="nav-link" href="ConsultarVeiculoProprietario.php">Consultar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="RemoverVeiculo.php">Remover Veiculo</a></li>


                    <?php

                    if (isset($_SESSION['cpfproprietario'])) {

                        echo "<li class='nav-item'><a class='nav-link' href=\" ../controller/sair.php\"> Sair  </a></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Header Area End -->

  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-03">
        <div class="text-content">
          <h4>CONCESSIONARIA JLSV</h4>
          <h2>Seu carro está aqui !</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->


  <!-- Contact Form Area Start -->
  <div class="roberto-contact-form-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
            <br>
            <h2>Digite a marca do veículo que deseja encontrar</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <!-- Form -->
          <form action="..\controller\ConsultarVeiculo.php" method="post">
            <div class="row">
              <div class="col-12 col-lg-20 wow fadeInUp">
                <input type="text" class="form-control mb-50" placeholder="Entre com a marca do veículo " name="marca"><br>
              </div>
              <div class="contact-form">
                <button type="submit" style="margin: 0 15px;" value="Enviar" class="filled-button btn-block">Buscar</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Contact Form Area End -->
  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-form">
            <form action="#">
              <label>Usado/Novo:</label>

              <select class="form-control">
                <option value="">Todos</option>
                <option value="new">Veículo Novo</option>
                <option value="used">Veículo Usado</option>
              </select>

              <label>Tipo do Veículo:</label>

              <select class="form-control">
                <option value="">--Todos --</option>
                <option value="">--Camionete --</option>
                <option value="">--Picap --</option>
                <option value="">--4x4 --</option>

              </select>

              <label>Marca:</label>

              <select class="form-control">
                <option value="">-- Todos --</option>
                <option value="">-- Ford --</option>
                <option value="">-- Renout --</option>
                <option value="">-- Wolksvagem --</option>
                <option value="">-- BMW --</option>
                <option value="">-- Ferrari --</option>
                <option value="">-- Fiat --</option>
              </select>

              <label>Modelo:</label>

              <select class="form-control">
                <option value="">-- Todos --</option>
                <option value="">-- 4x4 --</option>
                <option value="">-- S.U.V --</option>
              </select>

              <label>Preço:</label>

              <select class="form-control">
                <option value="">-- Todos --</option>
                <option value="">-- Menos que 10 Mil --</option>
                <option value="">-- Entre 10 Mil e 25 Mil --</option>
                <option value="">-- Entre 25 Mil e 50 Mil --</option>
                <option value="">-- Mais que 50 Mil --</option>
              </select>


              <label>Força:</label>

              <select class="form-control">
                <option value="">-- Todos --</option>
                <option value="">-- 1.0 --</option>
                <option value="">-- 1.4 --</option>
                <option value="">-- 1.6 --</option>
                <option value="">-- 1.8 --</option>
                <option value="">-- 2.0 --</option>
                <option value="">-- Maior que 2.0 --</option>
                <option value="">-- Automático --</option>
              </select>

              <label>Tipo de Combustível:</label>

              <select class="form-control">
                <option value="">-- Todos --</option>
                <option value="">-- Álcool --</option>
                <option value="">-- Gasolina --</option>
                <option value="">-- Dísel --</option>

              </select>

            </form>
          </div>
        </div>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-1-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-2-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-3-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-4-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-5-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-6">
              <div class="product-item">
                <a href="car-details.html"><img src="../assets/images/product-6-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="car-details.html">
                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>
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

            <div class="col-md-12">
              <ul class="pages">

                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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