<?php
    //inicia sessões
    session_start();

    class VeiculoDAO {
        function __construct() {}

        function salvar($veiculo, $conexao) {
            $sql = "INSERT INTO `Veiculo`(`id`, `placa`, `modelo`, `precovenda`, `aluguel`, `marca`, `cor`, `anofabricacao`, `cpfProprietario` ) VALUES ('".
                $veiculo->getId()."','".
                $veiculo->getPlaca()."','".
                $veiculo->getModelo()."','".
                $veiculo->getPrecovenda()."','".
                $veiculo->getMarca()."','".
                $veiculo->getCor()."','".
                $veiculo->getAnofabricacao()."','".
                $veiculo->getCpfProprietario()."',".
                $veiculo->getAluguel().")";

            if ($conexao->query($sql) == TRUE) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Veiculo cadastrado com Sucesso!')
    				window.location.href='../view/AreaProprietario.php';
    				</SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Veiculo não cadastrado ')
    				window.location.href='../view/CadastrarVeiculo.php';
    				</SCRIPT>");
            }
        }

        function consultar($marca, $conexao) {
            $sql = "SELECT * FROM `Veiculo` WHERE marca = '" . $marca . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function consultarID($id, $conexao) {
            $sql = "SELECT * FROM `Veiculo` WHERE  id = '" . $id . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
		function consultarTodos($conexao) {
            $sql = "SELECT * FROM `Veiculo` WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
		
		
		
		
        function atualizar($conexao, $id, $placa, $modelo, $precovenda, $aluguel, $marca, $cor, $anofabricacao, $cpfProprietario) {
            $sql = "UPDATE `Veiculo`
                SET
                    `placa`='" . $placa . "',
                    `modelo`='" . $modelo . "',
                    `precovenda`='" . $precovenda . "',
                    `aluguel`=" . $aluguel . ",
                    `marca`=" . $marca . ",
                    `cor`=" . $cor . ",
                    `anofabricacao`=" . $anofabricacao . ",
                    `cpfProprietario`='" . $cpfProprietario . "'
                WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND `id`='" . $id ."'";

            if ($conexao->query($sql) == TRUE) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Veiculo atualizado com sucesso!')
    				window.location.href='../controller/AtualizarVeiculo.php';
    				</SCRIPT>");
            } else {
                echo "Erro ao atualizar o veiculo: <br>".$conexao->error;
            }
        }

        function remover($conexao, $id) {

			$sql = "DELETE FROM `Veiculo` WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND id = '" . $id . "'";

			if ($conexao->query($sql) == TRUE) {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Veiculo removido(s)!')
				window.location.href='../controller/RemoverVeiculo.php';
				</SCRIPT>");
			} else {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Erro ao remover veiculo!')
				window.location.href='../controller/RemoverVeiculo.php';
				</SCRIPT>");
			}
        }
    }
    ?>