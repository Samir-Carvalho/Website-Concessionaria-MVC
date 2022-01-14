-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Mar-2021 às 21:20
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(75) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `email`, `telefone`, `nascimento`, `endereco`, `senha`) VALUES
('12345678911', 'cliente teste', 'cliente@teste.com', '987654321', '2021-01-05', 'Endereco cliente', 'cliente'),
('12365478911', 'Samir Carvalho', 'samir@email.com', '987456321', '1997-11-05', 'Meu endereço cliente samir', 'samir'),
('32165498755', 'testeee', 'testecliente@email.com', '88888888', '2021-02-08', 'endereco teste cliente', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `idContrato` int(11) NOT NULL,
  `aluguelContrato` double DEFAULT NULL,
  `idVeiculo` int(11) NOT NULL,
  `cpfProprietario` varchar(11) NOT NULL,
  `cpfFuncionario` varchar(11) NOT NULL,
  `cpfCliente` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`idContrato`, `aluguelContrato`, `idVeiculo`, `cpfProprietario`, `cpfFuncionario`, `cpfCliente`) VALUES
(6, 600, 1, '12345678915', '12312312377', '32165498755');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(75) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `email`, `telefone`, `nascimento`, `endereco`, `senha`) VALUES
('12312312377', 'funcionario teste', 'func@email.com', '12332127', '2021-02-03', 'meu endereço teste 7', 'senha'),
('12345678922', 'Funcionario A', 'funcionario@email.com', '987654322', '2021-01-02', 'Endereco Funcionario A', 'senha'),
('55544433322', 'Funcionario Samir Carvalho Apresentação', 'samircarvalho@funcionario.com', '5555444333', '2021-02-17', 'Endereço Samir Carvalho ', 'funcionario'),
('77755533311', 'Samir Apresentação ', 'samirfuncionario@email.com', '77755588811', '2021-02-18', 'Endereço Samir Apresentação', 'apresentacao'),
('77788899911', 'Samir Teste Funcionario 2', 'samirtestefuncionario@email.com', '777888999', '2021-02-04', 'Endereço 777888999', 'senha'),
('88877766655', 'ultimo funcionario', 'ultimofunc@email.com', '8887776655', '2021-02-10', 'meu endereço teste 55', 'senha'),
('98765432155', 'Samir Funcionario', 'samir@funcionario.com', '999654321', '1997-11-05', 'Endereço Funcionario Samir', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `proprietario`
--

INSERT INTO `proprietario` (`cpf`, `nome`, `email`, `telefone`, `nascimento`, `senha`) VALUES
('11122233345', 'samir', 'samirteste@email.com', '123321', '2021-02-02', 'senha'),
('11133322251', 'proprietarioss', 'priprietariosamir@email.com', '12332111', '2021-01-31', 'senha'),
('11133322255', 'proprietario', 'priprietariosamir@email.com', '123321', '2021-01-31', 'senha'),
('12345678910', 'Proprietario Concessionaria ', 'proprietario@email.com', '987654321', '2021-01-01', 'senha'),
('12345678915', 'samirTeste', 'samircliente@email.com', '123321', '2021-02-02', 'senha'),
('22233355566', 'Proprietario Samir Carvalho', 'proprietariosamir@email.com', '9874565555', '2021-02-17', 'proprietario'),
('44433322211', 'Apresentação Samir Proprietario', 'apresentacao@proprietario.com', '444333222', '2021-02-18', 'samir'),
('99911122233', 'ultimo proprietario', 'ultimo@teste.com', '987654123', '2021-02-04', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `placa` varchar(75) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `precovenda` varchar(45) NOT NULL,
  `aluguel` double NOT NULL,
  `marca` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `anofabricacao` date NOT NULL,
  `cpfProprietario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `placa`, `modelo`, `precovenda`, `aluguel`, `marca`, `cor`, `anofabricacao`, `cpfProprietario`) VALUES
(1, 'placa123', 'mocelo SUV', '30000', 300, 'Ford', 'Vermelho', '2021-01-03', '12345678910'),
(2, 'abc22', 'classico', '15000', 155, 'Ford', 'Azul', '2021-01-02', '11133322255'),
(3, '321a123', 'classico', '20000', 200, 'Fiat', 'Preto', '2020-12-01', '12345678915');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idContrato`),
  ADD KEY `fk_Contrato_Veiculo1_idx` (`idVeiculo`),
  ADD KEY `fk_Contrato_Proprietario1_idx` (`cpfProprietario`),
  ADD KEY `fk_Contrato_Funcionario1_idx` (`cpfFuncionario`),
  ADD KEY `fk_Contrato_Cliente1_idx` (`cpfCliente`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Veiculo_Proprietario1_idx` (`cpfProprietario`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_Contrato_Cliente1` FOREIGN KEY (`cpfCliente`) REFERENCES `cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contrato_Funcionario1` FOREIGN KEY (`cpfFuncionario`) REFERENCES `funcionario` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contrato_Proprietario1` FOREIGN KEY (`cpfProprietario`) REFERENCES `proprietario` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contrato_Veiculo1` FOREIGN KEY (`idVeiculo`) REFERENCES `veiculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_Veiculo_Proprietario1` FOREIGN KEY (`cpfProprietario`) REFERENCES `proprietario` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
