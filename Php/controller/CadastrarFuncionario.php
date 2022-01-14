<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Funcionario.php';
    include_once '../persistence/FuncionarioDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $funcionario = new Funcionario($cpf, $nome, $email, $telefone, $nascimento, $endereco, $senha);

    $funcionarioDAO = new FuncionarioDAO();
    $funcionarioDAO->salvar($funcionario, $conexao);
	
	header('Location: ../index.php');
?>
