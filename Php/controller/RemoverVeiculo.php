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
                        <a class="nav-link " href="../view/AreaProprietario.php">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item "><a class="nav-link" href="../view/CadastrarVeiculo.php">Cadastrar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="../view/ConsultarVeiculoProprietario.php">Consultar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="../view/AtualizarVeiculo.php">Atualizar Veiculo</a></li>
                    <li class="nav-item active"><a class="nav-link" href="../view/RemoverVeiculo.php">Remover Veiculo</a></li>


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


<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(../assets/images/heading-1-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Escolha uma ação</h4>
                    <h2>Área dos Proprietários</h2>
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
                    <h2>Preencha os campos para remover o veículo</h2>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include_once '../persistence/Connection.php';
include_once '../model/Veiculo.php';
include_once '../persistence/VeiculoDAO.php';

$conexao = new Connection();
$conexao = $conexao->getConnection();

$veiculoDAO = new VeiculoDAO();
$resultado = $veiculoDAO->consultarTodos($conexao);

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
										
										<h2>Veículo</h2>
									</div>
								</div>
							</div>

							<div class='row'>
								<div class='col-12'>
									
									
										 <form action='RemoverVeiculoDefinitivo.php' method='post'>
											<div class='row'>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													ID: <input type='text' class='form-control mb-30' value = '" . $linha['id'] . "'  name='idVeiculo' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Logradouro<input type='text' class='form-control mb-30' value = '" . $linha['logradouro'] . "' name='logradouro' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Número:<input type='text' class='form-control mb-30' value = '" . $linha['numero'] . "' name='numero' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Bairro:<input type='text' class='form-control mb-30' value = '" . $linha['bairro'] . "' name='bairro' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Aluguel:<input type='text' class='form-control mb-30' value = '" . $linha['aluguel'] . "' name='aluguel' readonly='true'><br>
												</div>
											  
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													CPF do Proprietário:<input type='text' class='form-control mb-30' value = '" . $linha['cpfProprietario'] . "' name='cpfProprietario' readonly='true'><br>
												</div>

												<button type='submit' style='margin: 0 15px;' class='btn roberto-btn mt-15'>Remover</button>
												
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>";
    }
    echo "<a href='../view/AreaProprietario.php' style='margin: 0 125px;' class='filled-button'>Voltar</a><br>";
} else {
    echo "<script>alert('Não possui veículo cadastrado com essa placa')</script>";
}
?>
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