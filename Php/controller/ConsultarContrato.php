<!DOCTYPE html>
<html lang="pt">

<?php
// Inicia sessões 
session_start();


// Verifica se existe os dados da sessão de login 
if (!isset($_SESSION['cpffuncionario'])) {
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
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Concessionária | JLSV</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/owl.css">

</head>

<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <h2>Concessionaria <em>JLSV</em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="../view/AreaFuncionario.php">Home</a></li>

          <li class="nav-item"><a href="../view/Grupo5.php">Grupo 5</a></li>


          <li class="nav-item">

            <?php

            if (isset($_SESSION['cpffuncionario'])) {

              echo " <a   href=\"sair.php\"> Sair  </a>";
            }
            ?>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Header Area End --><!-- Header -->
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
                        <a class="nav-link " href="../view/ConsultarContrato.php">Voltar
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    
                    <?php

                    if (isset($_SESSION['cpffuncionario'])) {

                        echo "<li class='nav-item'><a class='nav-link' href=\" ../controller/sair.php\"> Sair  </a></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(../assets/images/heading-1-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Escolha uma ação</h4>
          <h2>Área dos Funcionários</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="best-features about-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Resultado da consuta dos contratos</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once '../persistence/Connection.php';
include_once '../persistence/ContratoDAO.php';

$idContrato = $_POST['idContrato'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$contratoDAO = new ContratoDAO();
$resultado = $contratoDAO->consultar($idContrato, $conexao);

if ($resultado->num_rows > 0) {
  while ($linha = $resultado->fetch_assoc()) {
    echo "
					
						<div class='container'>
							<div class='row'>
								<div class='col-12'>
									<!-- Section Heading -->
									<div class='section-heading text-center wow fadeInUp' data-wow-delay='100ms'>
									</div>
									<div class='section-heading text-center wow fadeInUp' data-wow-delay='100ms'>
										<h2>Informação do contrato</h2>
									</div>
								</div>
							</div>

							<div class='row'>
								<div class='col-12'>
									
											<div class='row'>			
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													CPF do Cliente<input type='text' class='form-control mb-30' value = '" . $linha['cpfCliente'] . "'  readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													ID do Veiculo<input type='text' class='form-control mb-30' value = '" . $linha['idVeiculo'] . "'' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													CPF do Proprietário:<input type='text' class='form-control mb-30' value = '" . $linha['cpfProprietario'] . "'  readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Nome do Proprietário:<input type='text' class='form-control mb-30' value = '" . $linha['nomeProprietario'] . "'  readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Nome do Cliente :<input type='text' class='form-control mb-30' value = '" . $linha['nomeCliente'] . "'  readonly='true'><br>
												</div>
											</div>
									
								</div>
							</div>
						
					  </div>";
  }
  echo "<a href='../view/ConsultarContrato.php' style='margin: 0 125px;' class='filled-button'>Voltar</a><br>";
} else {
  echo "<script>alert('Não existe contrato cadastrado com esse ID')</script>";
}
?>
<br><br>



<!-- Footer -->
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