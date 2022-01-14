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
              <a class="nav-link" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item "><a class="nav-link" href="AreaLogin.php">Login</a></li>
            <li class="nav-item active"><a class="nav-link" href="AreaCadastro.php">Cadastrar</a></li>
            <li class="nav-item"><a class="nav-link" href="Grupo5.php">Grupo 5</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(../assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">

            <h4>Área de Cadastro</h4>
            <h2>Faça seu Cadastro</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Form Area Start -->

  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Section Heading -->
        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
          <br>
          <h2 class="page-title">Digite os dados para realizar o cadastro</h2>
        </div>
      </div>
    </div>

    <div class="col-12">
      <!-- Form -->
      <div style="text-align:center;">
        <form action="../controller/CadastrarCliente.php" method="post">
          <div class="row">
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" class="form-control mb-30" placeholder="Entre com o nome" name="nome" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" class="form-control mb-30" placeholder="Entre com o CPF" name="cpf" required pattern="[0-9]{11}"><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="date" class="form-control mb-30" name="nascimento" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" class="form-control mb-30" placeholder="Entre com o email" name="email" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" class="form-control mb-30" placeholder="Entre com o telefone" name="telefone" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="password" class="form-control mb-30" placeholder="Entre com a senha" name="senha" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="password" class="form-control mb-30" placeholder="Confirmação de senha" name="confirmacaoSenha" required><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              <input type="checkbox" checked="checked" name="remember">Lembrar-me <br><br>
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
              Criando uma conta, você concorda com nossa <a href="#" style="color:dodgerblue">Política de privacidade</a>.
            </div>
            <div class="contact-form">
              <button type="submit" style="margin: 0 15px;" class="filled-button">Cadastrar</button>
              <button type="button" style="margin: 0 15px;" class="filled-button">Cancelar</button><br>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
          $(function() {
            $("#inputSubmit").click(function() {
              var senha = $("#password").val();
              var senha2 = $("#confirm_password").val();
              if (senha != senha2) {
                event.preventDefault();
                alert("As senhas são diferentes!");
              }
            });
          });
        </script>
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