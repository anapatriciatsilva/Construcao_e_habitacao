-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2024 às 13:12
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `construcao_e_habitacao_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Ana', 'admin', 'codemaster');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `imagem_mobile` varchar(1000) NOT NULL,
  `pagina` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `imagem`, `imagem_mobile`, `pagina`) VALUES
(1, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerNoticias.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerNoticias.png', 'quem_somos'),
(2, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerSocios.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerSocios.png', 'socios'),
(3, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerNoticias.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerNoticias.png', 'noticias'),
(4, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerDestaques.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerDestaques.png', 'socios'),
(5, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerEmpreendimentos.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerEmpreendimentos.png', 'empreendimentos'),
(6, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerFerias.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerFerias.png', 'centro_ferias'),
(7, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerContactos.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerContactos.png', 'contactos'),
(8, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerDestaque1.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerDestaques1.png', 'destaque_especifico'),
(9, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerDestaques.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerDestaques.png', 'destaques');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `imagem_mobile` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`, `imagem_mobile`) VALUES
(1, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerHome_1.jpg', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerHome_1.jpg'),
(2, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerHome.png', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerHome.png'),
(3, 'http://localhost/construcao_e_habitacao/uploads/desktop/BannerHome_2.jpg', 'http://localhost/construcao_e_habitacao/uploads/mobile/BannerHome_2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `centro_ferias`
--

CREATE TABLE `centro_ferias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_1` varchar(1000) NOT NULL,
  `imagem_2` varchar(1000) NOT NULL,
  `imagem_3` varchar(1000) NOT NULL,
  `imagem_4` varchar(1000) NOT NULL,
  `imagem_5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `centro_ferias`
--

INSERT INTO `centro_ferias` (`id`, `titulo`, `texto`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`, `imagem_5`) VALUES
(1, 'Centro de Férias', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatibus aliquid voluptates aperiam nobis nam dignissimos cumque, qui beatae! Eveniet veritatis, doloremque distinctio a eum odit officiis perferendis beatae autem. Velit incidunt accusantium quidem, ea asperiores delectus, sint officia assumenda eum ad totam reprehenderit nam ipsam tempora blanditiis enim eligendi quaerat! Veniam iure omnis reiciendis provident officia illum cum quibusdam sit veritatis saepe? Quis molestiae quidem aperiam? Pariatur fugiat culpa quaerat qui nostrum, beatae provident libero inventore possimus sed temporibus eaque eius accusantium illo esse porro. Voluptates. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt perspiciatis possimus molestiae vel necessitatibus eum dolorum voluptatum ipsa explicabo adipisci, eius, non repellendus dignissimos soluta vero quisquam facere autem vitae iure atque minus consequuntur porro asperiores. Possimus vel sapiente mollitia maxime nobis inventore, tenetur ipsum eaque, velit dolore iure odio amet dignissimos nostrum, eveniet eligendi provident? Ipsum eveniet adipisci iusto? Impedit similique eius magni sed omnis assumenda dicta exercitationem praesentium ut eligendi! Quasi, maiores! Labore sapiente itaque iste quam, enim nisi quae esse repudiandae ex? Lorem, ipsum dolor sit amet consectetur adipisicing elit. At ducimus, amet voluptatem nobis impedit similique, eligendi aut error soluta, ipsa neque. Repudiandae modi possimus eveniet. Ullam voluptate maxime facilis vero voluptatum illo adipisci laboriosam quidem harum et saepe dolores magnam modi quo asperiores fuga pariatur dolorum eos perspiciatis, doloremque placeat repellat! Aspernatur dolor iusto sed atque dolore commodi, mollitia illo, provident libero nobis sunt quis modi quas quo aut aliquam quos nesciunt consequuntur eaque recusandae officia numquam quia alias animi? Sit, aliquid molestias!</p>', 'http://localhost/construcao_e_habitacao/uploads/desktop/cf1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/cf2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/cf3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/cf5.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/cf5.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `link_facebook` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `fax`, `morada`, `email`, `link_facebook`) VALUES
(1, '(+351) 222 088 761', '(+351) 222 088 761', 'Rua Passos Manuel, 59.1.º4000-384 Porto', 'cooptripeira@mail.telepac.pt', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `mostrar_na_home` tinyint(1) NOT NULL DEFAULT 0,
  `imagem` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `mostrar_na_home`, `imagem`, `titulo`, `texto`) VALUES
(1, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque1.png', 'Canidelo - Vila Nova Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.'),
(2, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque2.png', 'Barranha - S.ª da Hora Matosinhos\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\n                        \nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\n                        \nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.'),
(3, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque3.png', 'Contumil - Porto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n                        \r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n                        \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.'),
(4, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque4.png', 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n                        \r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n                        \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.'),
(5, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque5.png', 'Famalicão', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n                        \r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n                        \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.'),
(6, 1, 'http://localhost/construcao_e_habitacao/uploads/desktop/destaque6.png', 'Madalena - Vila Nova Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n                        \r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n                        \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_1` varchar(1000) NOT NULL,
  `imagem_2` varchar(1000) NOT NULL,
  `imagem_3` varchar(1000) NOT NULL,
  `imagem_4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empreendimentos`
--

INSERT INTO `empreendimentos` (`id`, `titulo`, `texto`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`) VALUES
(1, 'Canidelo - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.</p>', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png'),
(2, 'Barranha\r\n- Sª de Matosinhos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png'),
(3, 'Contumil - Porto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png'),
(4, 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png'),
(5, 'Famalicão', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png'),
(6, 'Madalena - Vila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/desktop/empreend4.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `imagem`, `texto`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia2.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptate excepturi similique totam aspernatur aliquam, at molestiae doloremque illum qui cum ullam unde est iusto, eius quidem dolorum, voluptates beatae temporibus eligendi ducimus nesciunt voluptatibus. Fugit vel accusantium porro expedita omnis nisi natus velit quisquam consectetur corporis excepturi repellat illo provident vitae.'),
(3, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia3.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptate excepturi similique totam aspernatur aliquam, at molestiae doloremque illum qui cum ullam unde est iusto, eius quidem dolorum, voluptates beatae temporibus eligendi ducimus nesciunt voluptatibus. Fugit vel accusantium porro expedita omnis nisi natus velit quisquam consectetur corporis excepturi repellat illo provident vitae.'),
(4, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia4.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptate excepturi similique totam aspernatur aliquam, at molestiae doloremque illum qui cum ullam unde est iusto, eius quidem dolorum, voluptates beatae temporibus eligendi ducimus nesciunt voluptatibus. Fugit vel accusantium porro expedita omnis nisi natus velit quisquam consectetur corporis excepturi repellat illo provident vitae.'),
(5, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia5.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptate excepturi similique totam aspernatur aliquam, at molestiae doloremque illum qui cum ullam unde est iusto, eius quidem dolorum, voluptates beatae temporibus eligendi ducimus nesciunt voluptatibus. Fugit vel accusantium porro expedita omnis nisi natus velit quisquam consectetur corporis excepturi repellat illo provident vitae.'),
(6, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia6.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptate excepturi similique totam aspernatur aliquam, at molestiae doloremque illum qui cum ullam unde est iusto, eius quidem dolorum, voluptates beatae temporibus eligendi ducimus nesciunt voluptatibus. Fugit vel accusantium porro expedita omnis nisi natus velit quisquam consectetur corporis excepturi repellat illo provident vitae.'),
(9, 'Lorem ipsum dolor sit amet consectetur', 'http://localhost/construcao_e_habitacao/uploads/desktop/Noticia1.png', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `quem_somos`
--

INSERT INTO `quem_somos` (`id`, `titulo`, `imagem`, `texto`) VALUES
(1, 'Quem Somos', 'http://localhost/construcao_e_habitacao/uploads/desktop/ImagemQuemSomos.png', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatibus aliquid voluptates aperiam nobis nam dignissimos cumque, qui beatae! Eveniet veritatis, doloremque distinctio a eum odit officiis perferendis beatae autem. Velit incidunt accusantium quidem, ea asperiores delectus, sint officia assumenda eum ad totam reprehenderit nam ipsam tempora blanditiis enim eligendi quaerat! Veniam iure omnis reiciendis provident officia illum cum quibusdam sit veritatis saepe? Quis molestiae quidem aperiam?</p>\r\n<p>Pariatur fugiat culpa quaerat qui nostrum, beatae provident libero inventore possimus sed temporibus eaque eius accusantium illo esse porro. Voluptates. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt perspiciatis possimus molestiae vel necessitatibus eum dolorum voluptatum ipsa explicabo adipisci, eius, non repellendus dignissimos soluta vero quisquam facere autem vitae iure atque minus consequuntur porro asperiores. Possimus vel sapiente mollitia maxime nobis inventore, tenetur ipsum eaque, velit dolore iure odio amet dignissimos nostrum, eveniet eligendi provident? Ipsum eveniet adipisci iusto? Impedit similique eius magni sed omnis assumenda dicta exercitationem praesentium ut eligendi! Quasi, maiores!</p>\r\n<p>Labore sapiente itaque iste quam, enim nisi quae esse repudiandae ex? Lorem, ipsum dolor sit amet consectetur adipisicing elit.At ducimus, amet voluptatem nobis impedit similique, eligendi aut error soluta, ipsa neque. Repudiandae modi possimus eveniet. Ullam voluptate maxime facilis vero voluptatum illo adipisci laboriosam quidem harum et saepe dolores magnam modi quo asperiores fuga pariatur dolorum eos perspiciatis, doloremque placeat repellat! Aspernatur dolor iusto sed atque dolore commodi, mollitia illo, provident libero nobis sunt quis modi quas quo aut aliquam quos nesciunt consequuntur eaque recusandae officia numquam quia alias animi? Sit, aliquid molestias!</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `socios`
--

INSERT INTO `socios` (`id`, `titulo`, `texto`) VALUES
(1, 'Sócios', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae modi soluta debitis dolorem consequuntur libero vero sapiente voluptatibus deserunt est, fuga facilis cupiditate sit ut? Maiores pariatur, modi temporibus fugit ab atque dolore possimus vero accusamus repudiandae dicta ullam ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos, accusamus iusto iste numquam voluptas nostrum eius minima, debitis sint quas eos? Ratione illum labore assumenda? Impedit laborum est natus provident reprehenderit quibusdam possimus, accusantium sequi, excepturi quisquam recusandae labore distinctio quae at nisi modi, accusamus dicta. Molestias placeat voluptas velit impedit. Explicabo, ipsum amet veniam similique labore harum sequi quia eius tenetur neque saepe aut cumque quo illo officiis repellendus natus? Similique, fugiat perferendis.</p>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `centro_ferias`
--
ALTER TABLE `centro_ferias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `centro_ferias`
--
ALTER TABLE `centro_ferias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
