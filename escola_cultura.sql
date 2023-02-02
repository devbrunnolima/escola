-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2023 às 23:48
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola_cultura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `id_polo` int(11) NOT NULL,
  `nome_curso` varchar(255) NOT NULL,
  `idade` varchar(150) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `dias_semana` varchar(50) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `numero_vagas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `id_polo`, `nome_curso`, `idade`, `periodo`, `dias_semana`, `horario`, `numero_vagas`) VALUES
(1, 1, 'Ballet Baby Class ', '5 e 6 anos completos até Março 2023', 'Manhã', '2ª e 4ª', '08h00 às 09h00', 25),
(2, 1, 'Ballet Baby Class ', '5 e 6 anos completos até Março 2023', 'Manhã', '2ª e 4ª', '11h30 às 12h30', 25),
(3, 1, 'Ballet Baby Class ', '5 e 6 anos completos até Março 2023', 'Tarde', '2ª e 4ª', '14h00 às 15h00', 25),
(4, 1, 'Ballet Clássico Infantil ', '7 a 10 anos completos até Março 2023 ', 'Manhã', '2ª e 4ª', '09h10 às 10h10', 20),
(5, 1, 'Ballet Clássico Infantil ', '7 a 10 anos completos até Março 2023 ', 'Tarde', '2ª e 4ª', '15h15 às 16h15', 20),
(6, 1, 'Jazz Infantil ', '7 a 10 anos completos até Março 2023 ', 'Manhã ', '3ª e 5ª ', '08h00 às 09h00', 25),
(7, 1, 'Jazz Infantil ', '7 a 10 anos completos até Março 2023 ', 'Tarde', '2ª e 4ª ', '14h00 as 15h00', 20),
(8, 1, 'Danças Urbanas Infantil ', '7 a 10 anos completos até Março 2023 ', 'Manhã ', '2ª e 4ª ', '08h00 às 09h00 ', 25),
(9, 1, 'Danças Urbanas Infantil ', '7 a 10 anos completos até Março 2023 ', 'Tarde', '3ª e 5ª ', '14h00 às 15h00 ', 25),
(10, 1, 'Dança Contemporânea Infantil ', '7 a 10 anos completos até Março 2023 ', 'Tarde', '2ª e 4ª ', '15h15 às 16h15 ', 25),
(11, 1, 'Ballet Clássico Juvenil ', '11 a 16 anos completos até Março 2023', 'Manhã', '3ª e 5ª', '09h10 às 10h10', 25),
(12, 1, 'Ballet Clássico Juvenil ', '11 a 16 anos completos até Março 2023', 'Tarde', '2ª e 4ª ', '16h30 às 17h30', 25),
(13, 1, 'Jazz Juvenil ', '11 a 16 anos completos até Março 2023', 'Manhã', '3ª e 5ª ', '11h50 às 12h50', 25),
(14, 1, 'Jazz Juvenil', '11 a 16 anos completos até Março 2023', 'Tarde', '2ª e 4ª ', '16h40 às 17h40 ', 20),
(15, 1, 'Jazz Juvenil', '11 a 16 anos completos até Março 2023', 'Tarde ', '2ª e 4ª', '18h30 às 19h30', 20),
(16, 1, 'Danças Urbanas Juvenil ', '11 a 16 anos completos até Março 2023', 'Manhã', '2ª e 4ª ', '10h30 às 11h30', 25),
(17, 1, 'Danças Urbanas Juvenil', '11 a 16 anos completos até Março 2023', 'Tarde', '3ª e 5ª', '16h30 às 17h30', 25),
(18, 1, 'Dança Contemporânea Juvenil', '11 a 16 anos completos até Março 2023', 'Tarde ', '2ª e 4ª ', '16h15 às 17h15', 25),
(19, 1, 'Danças Afro-Brasileiras Mista ', '8 a 15 anos completos até Março 2023 ', 'Tarde', '2ª e 4ª ', '18h00 às 19h00 ', 25),
(20, 1, 'Ballet Clássico Adulto ', 'acima de 17 anos completos até Março 2023 ', 'Noite ', '3ª feira ', '18h30 às 20h00', 25),
(21, 1, 'Jazz Adulto ', 'acima de 17 anos completos até Março 2023 ', 'Noite', '2ª feira ', '19h30 às 21h00 ', 20),
(22, 1, 'Danças Urbanas Adulto', 'acima de 17 anos completos até Março 2023 ', 'Noite ', '3ª feira', '19h30 às 21h00 ', 25),
(23, 1, 'Dança Contemporânea Adulto', 'acima de 17 anos completos até Março 2023 ', 'Noite', '2ª feira', '19h30 às 21h00', 20),
(24, 1, 'Danças Afro-Brasileiras Adulto ', 'acima de 17 anos completos até Março 2023', 'Noite ', '5ª feira ', '19hrs30 às 21hrs ', 25),
(25, 1, 'Sertanejo Universitário ', 'acima de 14 anos completos até Março 2023', 'Noite ', '3ª feira', '19h às 20h30', 50),
(26, 1, 'Sertanejo Universitário ', 'acima de 14 anos completos até Março 2023', 'Noite', '5ª feira ', '19h às 20h30 ', 50),
(27, 1, 'Samba de Gafieira ', 'acima de 14 anos completos até Março 2023', 'Noite ', '3ª e 5ª feira ', '20h30 às 22h', 50),
(28, 1, 'Zouk', 'acima de 14 anos completos até Março 2023', 'Noite', '2ª feira', '19h às 20h30', 50),
(29, 1, 'Forró Universitário', 'acima de 14 anos completos até Março 2023', 'Noite', '4ª feira', '20h30 às 22h', 50),
(30, 1, 'Teatro Avançado ', 'a partir de 15 anos ', 'Manhã', '3ª e 5ª', '08h às 12h', 20),
(31, 2, 'Teatro Infantil', 'De 07 a 10 anos', 'Manhã ', '2ª feira ', '08h às 10h ', 20),
(32, 2, 'Teatro Infantil', 'De 07 a 10 anos', 'Tarde', '2ª feira', '14h às 16h ', 20),
(33, 2, 'Teatro - Curso livre ', 'A partir de 11 anos ', 'Manhã ', '4ª feira', '08h às 10h ', 20),
(34, 2, 'Teatro - Curso livre ', 'A partir de 11 anos ', 'Tarde', '4ª feira', '14h às 16h ', 20),
(35, 2, 'Teatro - Oficina ', 'A partir de 11 anos ', 'Manhã ', '2ª e 4ª', '10h às 12h ', 20),
(36, 2, 'Teatro - Oficina ', 'A partir de 11 anos ', 'Tarde', '2ª e 4ª ', '16h às 18h ', 20),
(37, 2, 'Teatro Avançado ', 'A partir de 15 anos ', 'Tarde', '3ª e 5ª ', '14h às 18h ', 20),
(38, 2, 'Teato - Juvenil ', 'De 14 a 17 anos ', 'Noite ', '3ª feira ', '18h30 às 20h30', 20),
(39, 2, 'Teatro - Adulto ', 'A partir de 18 anos ', 'Noite ', '5ª feira', '18h30 às 20h30', 20),
(40, 2, 'Quadrinhos e Caricatura', 'A partir de 12 anos', 'Manhã ', '2ª feira ', '08h às 10h ', 15),
(41, 2, 'Quadrinhos e Caricatura', 'A partir de 12 anos', 'Tarde', '2ª feira', '14h às 16h ', 15),
(42, 2, 'Desenho Infantil ', 'A partir de 07 anos', 'Manhã', '4ª feira', '08h às 10h', 15),
(43, 2, 'Desenho Infantil ', 'A partir de 07 anos', 'Tarde', '4ª feira', '14h às 16h', 15),
(44, 2, 'Desenho', 'A partir de 12 anos ', 'Manhã', '2ª e 4ª', '10h às 12h', 15),
(45, 2, 'Desenho ', 'A partir de 12 anos', 'Tarde', '2ª e 4ª', '16h às 18h ', 15),
(46, 2, 'Desenho', 'A partir de 12 anos', 'Noite', '2ª e 4ª', '18h30 às 20h30', 15),
(47, 2, 'Música - Violão ', 'A partir de 10 anos ', 'Manhã ', '2ª e 4ª', '08h às 10h ', 10),
(48, 2, 'Música - Violão ', 'A partir de 10 anos', 'Manhã', '2ª e 4ª', '10h às 12h ', 10),
(49, 2, 'Música - Violão ', 'A partir de 10 anos', 'Tarde ', '3ª e 5ª', '16h às 18h ', 10),
(50, 2, 'Artes Visuais', 'A partir de 12 anos ', 'Noite ', '5ª feira ', '18h às 21h ', 20),
(51, 3, 'Samba Rock', 'acima de 14 anos completos até Março 2023', 'Noite ', '3ª feira', '19h às 20h30', 150),
(52, 3, 'Sertanejo Universitário', 'acima de 14 anos completos até Março 2023', 'Noite ', '3ª feira', '20h30 às 22h', 150),
(53, 3, 'Forró Universitário', 'acima de 14 anos completos até Março 2023', 'Noite', '5ª feira ', '19h às 20h30', 150),
(54, 3, 'Samba Rock', 'acima de 14 anos completos até Março 2023', 'Noite', '5ª feira', '20h30 às 22h', 150),
(55, 4, 'Forró Universitário ', 'acima de 14 anos completos até Março 2023', 'Noite', '3ª feira', '19h às 20h30', 30),
(56, 4, 'Sertanejo Universitário ', 'acima de 14 anos completos até Março 2023 ', 'Noite ', '3ª feira', '20h30 às 22h', 30),
(57, 4, 'Música - Violão ', 'A partir de 10 anos ', 'Tarde', '2ª feira', '14h às 15h30', 10),
(58, 4, 'Música - Violão ', 'A partir de 16 anos ', 'Noite ', '2ª feira', '20h20 às 22h', 10),
(59, 4, 'Teatro ', '12 a 14 anos', 'Noite', '2ª feira', '17h10 às 18h40', 20),
(60, 4, 'Teatro ', 'A partir de 15 anos ', 'Noite ', '2ª feira', '18h40 às 20h10', 20),
(61, 4, 'Ballet Baby Class ', '5 e 6 anos completos até Março 2023', 'Manhã ', '2ª e 4ª ', '08h30 às 09h30', 20),
(62, 4, 'Ballet Clássico Infantil', '7 a 10 anos completos até Março 2023 ', 'Manhã ', '2ª e 4ª ', '09h40 às 10h40 ', 20),
(63, 4, 'Ballet Clássico Infantil ', '7 a 10 anos completos até Março 2023', 'Manhã ', '2ª e 4ª', '10h50 às 11h50 ', 20),
(64, 4, 'Ballet Baby Class ', '5 e 6 anos completos até Março 2023 ', 'Tarde', '4ª feira', '14h às 15h ', 20),
(65, 4, 'Ballet Clássico Infantil ', '7 a 10 anos completos até Março 2023', 'Tarde', '4ª Feira', '15h às 16h', 20),
(66, 4, 'Ballet Clássico Infantil ', '7 a 10 anos completos até Março 2023 ', 'Tarde', '4ª Feira ', '16h às 17h', 20),
(67, 4, 'Jazz Baby ', '5 e 6 anos completos até Março 2023', 'Manhã', '2ª e 4ª ', '08h30 às 09h30', 20),
(68, 4, 'Jazz Infantil', '7 a 10 anos completos até Março 2023', 'Manhã', '2ª e 4ª', '09h40 às 10h40', 20),
(69, 4, 'Jazz Infantil', '7 a 10 anos completos até Março 2023', 'Manhã', '2ª e 4ª', '10h50 às 11h50', 20),
(70, 4, 'Danças Urbanas Juvenil ', '11 a 16 anos completos até Março 2023 ', 'Tarde', '3ª e 5ª', '16h às 17h', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `polos`
--

CREATE TABLE `polos` (
  `id` int(11) NOT NULL,
  `nome_polo` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `polos`
--

INSERT INTO `polos` (`id`, `nome_polo`) VALUES
(1, 'Parque das Hortênsias'),
(2, 'CEMUR'),
(3, 'CEPIM (CCI-Maria Rosa)'),
(4, 'CCE');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `polos`
--
ALTER TABLE `polos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de tabela `polos`
--
ALTER TABLE `polos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
