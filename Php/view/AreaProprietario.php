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
                        <a class="nav-link active" href="AreaProprietario.php">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item"><a class="nav-link" href="CadastrarVeiculo.php">Cadastrar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="ConsultarVeiculoProprietario.php">Consultar Veiculo</a></li>
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
                    <h2>Escolha a operação que deseja realizar</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact Form Area Start -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Form -->
            <div style="text-align:center;">
                <div class="contact-form">
                    <form action="CadastrarVeiculo.php" method="post">
                        <button type="submit" style="margin: 0 15px;" class="filled-button">Cadastrar Veículo</button>
                    </form>
                    <br>
                    <form action="ConsultarVeiculoProprietario.php" method="post">
                        <button type="submit" style="margin: 0 15px;" class="filled-button">Consultar Veículo</button>
                    </form>

                    <br>
                    <!--
                    <form action="../controller/AtualizarVeiculo.php" method="post">
                        <button type="submit" style="margin: 0 15px;" class="filled-button">Atualizar Veículo</button>
                    </form>
                    <br>
                    -->
                    <form action="RemoverVeiculo.php" method="post">
                        <button type="submit" style="margin: 0 15px;" class="filled-button">Remover Veículo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Area End -->


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