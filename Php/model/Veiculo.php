<?php
    class Veiculo {
        private $id;
        private $placa;
        private $modelo;
        private $precovenda;
        private $aluguel;
        
        private $marca;
        private $cor;
        private $anofabricacao;
        
        private $cpfProprietario;
        


        function __construct($id, $placa, $modelo, $precovenda, $aluguel, $marca, $cor, $anofabricacao, $cpfProprietario) {
            $this->id = $id;
            $this->placa = $placa;
            $this->modelo = $modelo;
            $this->precovenda = $precovenda;
            $this->aluguel = $aluguel;
            $this->cpfProprietario = $cpfProprietario;
        }

        function getId() {
            return $this->id;
        }

        function getPlaca() {
            return $this->placa;
        }

        function getModelo() {
            return $this->modelo;
        }

        function getPrecovenda() {
            return $this->precovenda;
        }

        function getAluguel() {
            return $this->aluguel;
        }
        
        function getMarca() {
            return $this->marca;
        }
        function getCor() {
            return $this->cor;
        }
        function getAnofabricacao() {
            return $this->anofabricacao;
        }

        function getCpfProprietario() {
            return $this->cpfProprietario;
        }
    }
 ?>
