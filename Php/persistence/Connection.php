<?php
    class Connection {
        private $servername;
        private $username;
        private $password;
        private $bd;
        private $conn;

        function __construct() {
            $this->servername = "127.0.0.1"; //servidor web local
            $this->username = "root";
            $this->password = "";
            $this->bd = "concessionaria";
            $this->conn = null;
        }

        function getConnection() {
            if ($this->conn == null) {
                $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
            }
            if (!$this->conn) {
                die("Conexão falhou: ");
            }
            return $this->conn;
        }

    }
    ?>