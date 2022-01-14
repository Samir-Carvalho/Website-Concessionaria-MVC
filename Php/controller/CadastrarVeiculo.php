<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Veiculo.php';
    include_once '../persistence/VeiculoDAO.php';
	
    $id = $_POST['idVeiculo'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $precovenda = $_POST['precovenda'];
    $aluguel = $_POST['aluguel'];
    $marca = $_POST['marca'];
    $cor = $_POST['cor'];
    $anofabricacao = $_POST['anofabricacao'];
    $cpfProprietario = $_SESSION['cpfproprietario'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $veiculo = new Veiculo($id, $placa, $modelo, $precovenda, $aluguel, $marca, $cor, $anofabricacao, $cpfProprietario);

    $veiculoDAO = new VeiculoDAO();
    $veiculoDAO->salvar($veiculo, $conexao);
	
	
?>
