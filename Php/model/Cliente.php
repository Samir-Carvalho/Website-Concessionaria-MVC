<?php
    class Cliente {
        private $cpf;
        private $nome;
        private $email;
        private $telefone;
        private $nascimento;
        private $endereco;
        private $senha;

        function __construct($cpf, $nome, $email, $telefone, $nascimento, $endereco, $senha) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->nascimento = $nascimento;
            $this->endereco = $endereco;
            $this->senha = $senha;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getNascimento() {
            return $this->nascimento;
        }
        
        function getEndereco() {
            return $this->endereco;
        }

        function getSenha() {
            return $this->senha;
        }
    }
?>
