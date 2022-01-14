<!DOCTYPE html>
<html lang="pt">

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
              <a class="nav-link" href="../view/AreaCliente.php">Home
                <span class="sr-only">(current)</span>
              </a>

            </li>
            <li class="nav-item active"><a class="nav-link" href="../view/ConsultarVeiculo.php">Consultar Veículo</a></li>


          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-03">
        <div class="text-content">
          <h4>CONCESSIONARIA JLSV</h4>
          <h2>Resultado da Busca</h2>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Breadcrumb Area Start -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/17.jpg);">
    <div class=" container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-content text-center">
            <div class="breadcrumb-post-content">
              <br><br>
              <h2 class="post-title">Resultado da busca </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include_once '../persistence/Connection.php';
  include_once '../persistence/VeiculoDAO.php';


  $marca = $_POST['marca'];

  $conexao = new Connection();
  $conexao = $conexao->getConnection();

  $veiculoDAO = new VeiculoDAO();
  $resultado = $veiculoDAO->consultar($marca, $conexao);

  if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
      echo "
			
			<div class='products'>
				<div class='container'>
					<div class='row'>
						<div class='col-md-6'>
						  <div>
							  <img src='../assets/images/product-details-1-740x540.jpg' alt='' class='img-fluid wc-image'>
							</div>
							<br>  
              
              <div class='row'>
                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-1-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>
                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-2-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>
                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-3-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>

                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-4-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>
                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-5-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>
                <div class='col-sm-4 col-6'>
                  <div>
                    <img src='../assets/images/product-6-370x270.jpg' alt='' class='img-fluid'>
                  </div>
                  <br>
                </div>
              </div>
                </div>
                  <div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
                      Placa<input type='text' class='form-control mb-30' value = '" . $linha['placa'] . "' name='placa' readonly='true'><br>
                      Modelo:<input type='text' class='form-control mb-30' value = '" . $linha['modelo'] . "' name='modelo' readonly='true'><br>
                      Preco para Venda:<input type='text' class='form-control mb-30' value = '" . $linha['precovenda'] . "' name='precovenda' readonly='true'><br>
                      Aluguel:<input type='text' class='form-control mb-30' value = '" . $linha['aluguel'] . "' name='aluguel' readonly='true'><br>
                      Marca:<input type='text' class='form-control mb-30' value = '" . $linha['marca'] . "' name='marca' readonly='true'><br>
                      Cor:<input type='text' class='form-control mb-30' value = '" . $linha['cor'] . "' name='cor' readonly='true'><br>
                      Ano de Fabricacao do carro:<input type='text' class='form-control mb-30' value = '" . $linha['anofabricacao'] . "' name='anofabricacao' readonly='true'><br>		
                </div>
					  </div>								
					</div>
				</div>
			</div>";
    }
    echo "<a href='../view/ConsultarVeiculo.php' style='margin: 0 125px;' class=''>Voltar</a><br>";
  } else {
    echo "<script>alert('Não tem veiculo dessa marca cadastrado')</script>";
  }
  ?>
  <br><br>

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