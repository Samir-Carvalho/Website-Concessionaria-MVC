<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Cliente.php';
    include_once '../persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

	$cliente = new Cliente($cpf, $nome, $email, $telefone, $nascimento, $endereco, $senha);
	
    $conexao = new Connection();
    $conexao = $conexao->getConnection();


    $clienteDAO = new ClienteDAO();
    $clienteDAO->salvar($cliente, $conexao);

	header('Location: ../index.php');
?>
