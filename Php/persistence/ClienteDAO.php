<?php
    class ClienteDAO {
        function __construct() {}

        function salvar($cliente, $conexao) {
            $sql = "INSERT INTO `Cliente`(`cpf`, `nome`, `email`, `telefone`,`nascimento`, `endereco`, `senha`) VALUES ('".
                $cliente->getCpf()."','".
                $cliente->getNome()."','".
                $cliente->getEmail()."','".
                $cliente->getTelefone()."','".
                $cliente->getNascimento()."','".
                $cliente->getEndereco()."',".
                $cliente->getSenha()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Cliente salvo')</script>";
            } else {
                echo "Erro ao cadastrar o cliente: <br>".$conexao->error;
            }
        }

        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM `Cliente` WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
?>