<?php
    class FuncionarioDAO {
        function __construct() {}

        function salvar($funcionario, $conexao) {
            $sql = "INSERT INTO `Funcionario`(`cpf`, `nome`, `email`, `telefone`, `nascimento`, `endereco`, `senha`) VALUES ('".
                $funcionario->getCpf()."','".
                $funcionario->getNome()."','".
                $funcionario->getEmail()."','".
                $funcionario->getTelefone()."','".
                $funcionario->getNascimento()."','".
                $funcionario->getEndereco()."','".
                $funcionario->getSenha()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Funcionario salvo')</script>";
            } else {
                echo "Erro ao cadastrar o funcionario: <br>".$conexao->error;
            }
        }

        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM `Funcionario` WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
    ?>