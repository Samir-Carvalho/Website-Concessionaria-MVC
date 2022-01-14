<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Veiculo.php';
    include_once '../persistence/VeiculoDAO.php';

    $id = $_POST['idVeiculo'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $veiculoDAO = new VeiculoDAO();
    $veiculoDAO->remover($conexao, $id);
?>
