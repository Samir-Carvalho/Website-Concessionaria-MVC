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
                        <a class="nav-link " href="AreaProprietario.php">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item active"><a class="nav-link" href="CadastrarVeiculo.php">Cadastrar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="ConsultarVeiculoProprietario.php">Consultar Veiculo</a></li>
                    <li class="nav-item"><a class="nav-link" href="RemoverVeiculo.php">Remover Veiculo</a></li>




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
                    <h2>Preencha os campos para cadastrar um novo veículo</h2>
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
            <form action="../controller/CadastrarVeiculo.php" method="post">
                <div class="row">
                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <input type="text" class="form-control mb-30" placeholder="Entre com o ID" name="idImovel" required><br>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <input type="text" class="form-control mb-30" placeholder="Entre com o logradouro" name="logradouro" required><br>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <input type="text" class="form-control mb-30" placeholder="Entre com o numero" name="numero" required><br>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <input type="text" class="form-control mb-30" placeholder="Entre com o bairro" name="bairro" required><br>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <input type="text" class="form-control mb-30" placeholder="Entre com o aluguel" name="aluguel" required><br>
                    </div>

                    <!--<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input name="uploads[]" class="form-control mb-30" type=file multiple />
                                </div>-->
                    <div class="contact-form">
                        <button type="submit" style="margin: 0 15px;" class="filled-button">Cadastrar</button>
                    </div>
            </form>
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