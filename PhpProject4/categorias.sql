CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL
);




INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `sobrenome`, `ativo`) VALUES
(1, 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'Control', 1);

