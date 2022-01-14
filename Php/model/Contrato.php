<?php
    class Contrato {
        private $idContrato;
        private $aluguelContrato;
        private $idVeiculo;
        private $cpfProprietario;
        private $cpfFuncionario;
        private $cpfCliente;

        function __construct($idContrato, $aluguelContrato, $idVeiculo, $cpfProprietario, $cpfFuncionario, $cpfCliente) {
            $this->idContrato = $idContrato;
            $this->aluguelContrato = $aluguelContrato;
            $this->idVeiculo = $idVeiculo;
            $this->cpfProprietario = $cpfProprietario;
            $this->cpfFuncionario = $cpfFuncionario;
            $this->cpfCliente = $cpfCliente;
        }

        function getIdContrato() {
            return $this->idContrato;
        }

        function getAluguelContrato() {
            return $this->aluguelContrato;
        }

        function getIdVeiculo() {
            return $this->idVeiculo;
        }

        function getCpfProprietario() {
            return $this->cpfProprietario;
        }

        function getCpfFuncionario() {
            return $this->cpfFuncionario;
        }

        function getCpfCliente() {
            return $this->cpfCliente;
        }
    }
?>
