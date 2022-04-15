-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2022 às 21:59
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `twitter_clone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`) VALUES
(1, 1, 'Olá, tudo bem', '2022-04-02 15:09:55'),
(2, 1, 'Pelas barbas do profeta!', '2022-04-02 15:17:25'),
(3, 1, 'Pelo amor de meus filhinhos!', '2022-04-02 15:21:03'),
(4, 1, 'Pelo amor de meus filhinhos!', '2022-04-02 15:30:38'),
(5, 1, 'Pelo amor de meus filhinhos! Denovo!', '2022-04-02 15:30:58'),
(6, 1, 'tweet de hoje dia 03/04/2022', '2022-04-03 22:20:39'),
(7, 1, 'tweet de hoje dia 04/04/2022', '2022-04-04 19:01:22'),
(8, 4, 'tweet de hoje dia 04/04/2022', '2022-04-04 19:17:10'),
(9, 1, 'Eu aprendi a listar os meus tweets!', '2022-04-04 19:58:59'),
(10, 1, 'Inclusão de Tweet se refresh!', '2022-04-04 20:01:40'),
(11, 1, 'olá', '2022-04-04 20:02:19'),
(12, 1, 'Atualização de tweet sem refresh!', '2022-04-04 20:02:45'),
(13, 4, 'tweet de hoje dia 05/04/2022 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat magna dolor, id lobortis orci maximus sc', '2022-04-05 21:59:55'),
(14, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat magna dolor, id lobortis orci maximus scelerisque. Nunc sagittis nibh', '2022-04-05 22:01:03'),
(15, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat magna dolor, id lobortis orci maximus scelerisque. Nunc sagittis nibh', '2022-04-05 22:01:09'),
(16, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat magna dolor, id lobortis orci maximus scelerisque. Nunc sagittis nibh', '2022-04-05 22:01:18'),
(17, 1, 'joelma', '2022-04-07 19:55:06'),
(18, 6, 'tweet de hoje dia 03/04/2022', '2022-04-11 18:30:28'),
(19, 1, 'quantidade de tweets está dinâmica!', '2022-04-12 19:04:28'),
(20, 6, 'to', '2022-04-12 19:23:13'),
(21, 1, 'Esse é um teste de atualização da quantidade de tweets, dia 13/04/2022', '2022-04-13 20:10:18'),
(22, 1, 'Eu aprendi a listar os meus tweets!', '2022-04-13 20:13:03'),
(23, 1, 'tweet de hoje dia 03/04/2022', '2022-04-13 20:13:18'),
(24, 1, 'tweet de hoje dia 03/04/2022fgfgfgf', '2022-04-13 20:13:39'),
(25, 1, 'gfgfgfg', '2022-04-13 20:14:09'),
(26, 1, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:16:12'),
(27, 2, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:21:50'),
(28, 4, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:25:44'),
(29, 4, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:26:23'),
(30, 1, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:26:41'),
(31, 1, '<p id=\"qtd_seguidores\">', '2022-04-13 20:27:55'),
(32, 1, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:29:04'),
(33, 1, 'Aliquam sit amet posuere nisl. Vestibulum vitae eros in elit consectetur laoreet a id velit. In pulvinar lectus sed felis iaculis, vitae eff', '2022-04-13 20:29:14'),
(34, 1, 'Donec diam orci, sollicitudin et aliquet in, consequat in turpis. Duis eu eleifend felis. Nulla rutrum massa lorem. Aenean eu felis interdum', '2022-04-13 20:29:53'),
(35, 4, 'Donec diam orci, sollicitudin et aliquet in, consequat in turpis. Duis eu eleifend felis. Nulla rutrum massa lorem. Aenean eu felis interdum', '2022-04-13 20:30:05'),
(36, 4, 'Donec diam orci, sollicitudin et aliquet in, consequat in turpis. Duis eu eleifend felis. Nulla rutrum massa lorem. Aenean eu felis interdum', '2022-04-13 20:31:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'tomas', 'tomas@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Joãozinho', 'zinho@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Joãozinho_louco', 'zinho_louco@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'joelma', 'joribeiro20@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Fernanda Costa', 'fernanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Joel Marques', 'marques@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Miguel', 'miguel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'Aparecido', 'aparecido@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE `usuarios_seguidores` (
  `id_usuario_seguidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(23, 1, 2, '2022-04-10 18:35:33'),
(25, 1, 9, '2022-04-10 18:35:40'),
(26, 1, 3, '2022-04-10 19:09:13'),
(27, 1, 6, '2022-04-10 19:09:49'),
(29, 4, 1, '2022-04-11 18:48:28'),
(30, 4, 6, '2022-04-11 18:50:20'),
(31, 6, 1, '2022-04-12 19:23:22'),
(32, 2, 1, '2022-04-13 20:21:30'),
(33, 2, 4, '2022-04-13 20:24:07'),
(34, 2, 7, '2022-04-13 20:24:09'),
(35, 1, 4, '2022-04-13 20:30:37');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  ADD PRIMARY KEY (`id_usuario_seguidor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  MODIFY `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
