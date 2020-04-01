-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 01/04/2020 às 04:00
-- Versão do servidor: 5.6.47
-- Versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE DATABASE loja;

USE loja;

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complement` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`id`, `street`, `number`, `complement`, `neighborhood`, `cep`, `city`, `state`, `country`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Avenida Fernando Neves', '19', '3 depois', 'Santa', '30314-989', 'Vila Ivana', 'AP', 'Líbia', NULL, NULL, 1),
(2, 'Avenida Serra', '151', '3 depois', 'São', '10487-669', 'Christopher do Leste', 'PI', 'Grécia', NULL, NULL, 1),
(3, 'R. Franco', '06', '3 depois', 'Santa', '99155-022', 'Vila Nádia', 'MT', 'Mauritânia', NULL, NULL, 1),
(4, 'Rua Adriana', '2516', '3 depois', 'São', '54871-784', 'Santa Luzia', 'AC', 'Montenegro', NULL, NULL, 1),
(5, 'Av. Abril', '9691', '3 depois', 'Santa', '75259-263', 'Adriano do Leste', 'BA', 'Butão', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `brand`
--

INSERT INTO `brand` (`id`, `name`, `logo`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'https://logodownload.org/wp-content/uploads/2014/07/adidas-logo.png', '', NULL, NULL),
(2, 'Vans', 'http://pluspng.com/img-png/vans-png-addthis-sharing-sidebar-600.png', 'https://dafitistatic-a.akamaihd.net/cms/kanui/02-05-17-Vans_landing.jpg', NULL, NULL),
(3, 'Hurley', 'https://i.pinimg.com/originals/97/ff/4b/97ff4be38b0123b660446bf186267062.png', 'https://dafitistatic-a.akamaihd.net/cms/onsite/2016setembro/brand-hurley-min.jpg', NULL, NULL),
(4, 'Converse', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Converse_logo.svg/325px-Converse_logo.svg.png', 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-converse-kanui.jpg', NULL, NULL),
(5, 'Nike', 'http://pngimg.com/uploads/nike/nike_PNG12.png', 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-nike-sb-kanui.jpg', NULL, NULL),
(6, 'Oakley', 'https://logodownload.org/wp-content/uploads/2014/10/Oakley-logo.png', 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-oakley-kanui.jpg', NULL, NULL),
(7, 'Calvin Klein', 'https://logodownload.org/wp-content/uploads/2014/11/Calvin-klein-logo-6.png', 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-calvin-klein-kanui.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL DEFAULT '1',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `category`
--

INSERT INTO `category` (`id`, `name`, `active`, `order`, `photo`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Homens', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/2b015c3f71a5d__TENISWHITE.gif', NULL, NULL, NULL),
(2, 'Mulheres', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', NULL, NULL, NULL),
(3, 'Novidades', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', NULL, NULL, NULL),
(4, 'Marcas', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/9bf6dc1635d5__banners_drop_menu_topmarcas.png', NULL, NULL, NULL),
(5, 'Esportes', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/3b46364aeb8__Tenis_running.png', NULL, NULL, NULL),
(6, 'Roupas', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 1, NULL, NULL),
(7, 'Calçados', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 1, NULL, NULL),
(8, 'Acessórios', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 1, NULL, NULL),
(9, 'Roupas', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 2, NULL, NULL),
(10, 'Calçados', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 2, NULL, NULL),
(11, 'Acessórios', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 2, NULL, NULL),
(12, 'Masculino', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 3, NULL, NULL),
(13, 'Feminino', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 3, NULL, NULL),
(14, 'Camisetas', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 6, NULL, NULL),
(15, 'Moletom', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 6, NULL, NULL),
(16, 'Bermudas', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 6, NULL, NULL),
(17, 'Calças', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 6, NULL, NULL),
(18, 'Camisas', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 6, NULL, NULL),
(19, 'Tênis', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 7, NULL, NULL),
(20, 'Botas', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 7, NULL, NULL),
(21, 'Tênis Casual', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 7, NULL, NULL),
(22, 'Sapatênis', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 7, NULL, NULL),
(23, 'Chinelos', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 7, NULL, NULL),
(24, 'Bonés', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 8, NULL, NULL),
(25, 'Relógios', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 8, NULL, NULL),
(26, 'Mochilas', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 8, NULL, NULL),
(27, 'Carteiras', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 8, NULL, NULL),
(28, 'Óculos de sol', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 8, NULL, NULL),
(29, 'Moletom', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 9, NULL, NULL),
(30, 'Jaquetas', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 9, NULL, NULL),
(31, 'Vestidos', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 9, NULL, NULL),
(32, 'Shorts', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 9, NULL, NULL),
(33, 'Tênis', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 10, NULL, NULL),
(34, 'Botas e Coturnos', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 10, NULL, NULL),
(35, 'Slip On', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 10, NULL, NULL),
(36, 'Sandálias', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 10, NULL, NULL),
(37, 'Tênis Vans', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 10, NULL, NULL),
(38, 'Bolsas', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 11, NULL, NULL),
(39, 'Mochilas', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 11, NULL, NULL),
(40, 'Pochete', 1, 3, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 11, NULL, NULL),
(41, 'Carteiras', 1, 4, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 11, NULL, NULL),
(42, 'Óculos de sol', 1, 5, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png', 11, NULL, NULL),
(43, 'Bermudas', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 12, NULL, NULL),
(44, 'Jaquetas', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 12, NULL, NULL),
(45, 'Biquínes', 1, 1, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 13, NULL, NULL),
(46, 'Maiôs', 1, 2, 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `complemento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `favorite`
--

CREATE TABLE `favorite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_21_135819_create_table_user', 1),
(2, '2019_12_21_142147_create_table_address', 1),
(3, '2019_12_21_142147_create_table_endereco', 1),
(4, '2019_12_21_161607_create_table_category', 1),
(5, '2019_12_21_164459_create_table_store', 1),
(6, '2019_12_25_001901_create_table_brand', 1),
(7, '2019_12_25_002000_create_table_product', 1),
(8, '2019_12_26_155432_create_table_product_image', 1),
(9, '2019_12_31_183847_create_table_favorite', 1),
(10, '2020_01_01_150046_create_table_request', 1),
(11, '2020_01_01_150115_create_table_product_request', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `miniature` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitary_value` decimal(15,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `last_sale` timestamp NULL DEFAULT NULL,
  `cost_price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`id`, `name`, `details`, `miniature`, `unitary_value`, `stock`, `last_sale`, `cost_price`, `created_at`, `updated_at`, `category_id`, `brand_id`) VALUES
(1, 'TÊNIS CASUAL ADIDAS X_PLR PRETO', 'Explore a cidade com um estilo clean e conforto supremo. O X_PLR minimalista preserva um visual distinto e simples. O cabedal leve e forrado em mesh é realçado com sobreposições de nobuck e uma lateral contrastante que se integra ao sistema de amarração rápida.Cabedal de malha Forro de mesh As Três Listras de precinta; calcanhar de nobuck Experimente o conforto e a performance da palmilha OrthoLite®; sistema rápido de amarração Entressola moldada em EVA para um amortecimento leve Solado de borracha', 'https://t-static.dafiti.com.br/Fv_vLAihyjl3jG957vUlYxcHDOA=/fit-in/430x623/static.dafiti.com.br/p/adidas-t%c3%aanis-casual-adidas-x_plr-preto-4055-7286225-1-zoom.jpg', '59.12', 50, '2019-12-02 00:00:00', '20.10', NULL, NULL, 19, 1),
(2, 'TÊNIS VANS ATWOOD BEGE', 'Tênis Vans Atwood Bege, com etiqueta de logo da marca, acabamento pespontado e fecho por cadarço.', 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg', '249.90', 10, '2019-12-03 00:00:00', '180.90', NULL, NULL, 19, 2),
(3, 'TÊNIS VANS MN FILMORE DECON (CANVAS) CINZA', 'Tênis Vans Mn Filmore Decon (Canvas) Cinza', 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg', '279.99', 20, '2019-12-03 00:00:00', '190.90', NULL, NULL, 19, 2),
(4, 'TÊNIS VANS FILMORE (SUEDE CANVAS) PRETO', 'Tênis Vans Filmore (Suede Canvas) Preto', 'https://t-static.dafiti.com.br/FfjnRA7tv_cbKNZJo7KrJyGWuQw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-filmore-%28suede-canvas%29-preto-2768-4971764-1-zoom.jpg', '349.99', 50, '2019-12-03 00:00:00', '250.90', NULL, NULL, 19, 2),
(5, 'TÊNIS VANS ATWOOD CINZA', 'Tênis Vans Atwood Cinza', 'https://t-static.dafiti.com.br/TIeVx-hNG6QnTtj_ulEnT18LyzI=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-cinza-0242-6134054-1-zoom.jpg', '214.99', 8, '2019-12-03 00:00:00', '100.90', NULL, NULL, 19, 2),
(6, 'Nike SB Portmore II Solar Canvas Preto', 'Possui tecnologia Solarsoft: Proporciona flexibilidade, sensibilidade e conforto.', 'https://t-static.dafiti.com.br/-qQnawl3obTmMfsq8THgDbjrqpQ=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-sb-portmore-ii-solar-canvas-preto-5671-7088103-1-zoom.jpg', '229.99', 18, '2019-12-03 00:00:00', '140.90', NULL, NULL, 19, 5),
(7, 'TÊNIS NIKE ZOOM WINFLO 6 PRETO', 'Permite resposta rápida de movimentos com leveza, oferecendo proteção contra impactos, maior estabilidade e sensação de baixo perfil.', 'https://t-static.dafiti.com.br/RG2nLDBMnIqbI6kigoh3lvcqUQ4=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-zoom-winflo-6-preto-2522-0319074-1-zoom.jpg', '399.90', 8, '2019-12-03 00:00:00', '200.90', NULL, NULL, 19, 5),
(8, 'TÊNIS NIKE CITY TRAINER 2 VERMELHO', 'Palmilha com espuma de alta densidade e com memória que se molda aos pés, proporcionando conforto imediato.', 'https://t-static.dafiti.com.br/R6RbAB8KbmSYgRw0z0SObMhogXg=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-city-trainer-2-vermelho-6202-3407015-1-zoom.jpg', '169.89', 2, '2019-12-03 00:00:00', '80.90', NULL, NULL, 19, 5),
(9, 'TÊNIS NIKE DOWNSHIFTER 9 PRETO', 'Tênis Nike Downshifter 9 Preto', 'https://t-static.dafiti.com.br/oMV0EgMn8mVS4dig3XuR4kHL8QU=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-downshifter-9-preto-9852-5786015-1-zoom.jpg', '229.99', 2, '2019-12-03 00:00:00', '120.90', NULL, NULL, 19, 5),
(10, 'TÊNIS OAKLEY MODOC PRETO', 'Tênis Oakley Modoc Preto', 'https://t-static.dafiti.com.br/knSaJ_tfyVbFPtr1THw4A8jddSk=/fit-in/430x623/static.dafiti.com.br/p/oakley-t%c3%aanis-oakley-modoc-preto-9346-7904214-1-zoom.jpg', '384.99', 5, '2019-12-03 00:00:00', '220.90', NULL, NULL, 19, 6),
(11, 'TÊNIS OAKLEY FLAK 1.3 PRETO', 'Tênis Oakley Flak 1.3 Preto', 'https://t-static.dafiti.com.br/2x5nNhB6nT3cG5PBndoyh9Nk1eE=/fit-in/430x623/static.dafiti.com.br/p/oakley-t%c3%aanis-oakley-flak-1.3-preto-9942-7504214-1-zoom.jpg', '454.99', 1, '2019-12-03 00:00:00', '320.90', NULL, NULL, 19, 6),
(12, 'BOTA OAKLEY HALFTRACK VERDE', 'Bota Oakley Halftrack Verde', 'https://t-static.dafiti.com.br/8OZlQtR-_lRDSO7MEcBsX6rJP_g=/fit-in/430x623/static.dafiti.com.br/p/oakley-bota-oakley-halftrack-verde-6751-5135994-1-zoom.jpg', '569.90', 1, '2019-12-03 00:00:00', '420.90', NULL, NULL, 19, 6),
(13, 'TÊNIS CONVERSE CT ALL STAR CORE OX PRETO', 'Tênis Converse CT All Star Core Ox Preto, com detalhe de ilhós, acabamento pespontado e fecho por cadarço.', 'https://t-static.dafiti.com.br/nB0MQDgju2jBkTdGLItpL3HJbf4=/fit-in/430x623/static.dafiti.com.br/p/converse-t%c3%aanis-converse-ct-all-star-core-ox-preto-1189-2676032-1-zoom.jpg', '149.90', 7, '2019-12-03 00:00:00', '20.90', NULL, NULL, 19, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `product_image`
--

INSERT INTO `product_image` (`id`, `name`, `url`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Nome Imagem', 'https://t-static.dafiti.com.br/Fv_vLAihyjl3jG957vUlYxcHDOA=/fit-in/430x623/static.dafiti.com.br/p/adidas-t%c3%aanis-casual-adidas-x_plr-preto-4055-7286225-1-zoom.jpg', 1, NULL, NULL),
(2, 'Nome Imagem', 'https://static.dafiti.com.br/p/adidas-T%C3%AAnis-Casual-Adidas-X_PLR-Preto-4060-7286225-2-zoom.jpg', 1, NULL, NULL),
(3, 'Nome Imagem', 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg', 2, NULL, NULL),
(4, 'Nome Imagem', 'https://static.dafiti.com.br/p/Vans-T%C3%AAnis-Vans-Atwood-Bege-6412-0260322-2-zoom.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_request`
--

CREATE TABLE `product_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `request`
--

CREATE TABLE `request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price_total` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `store`
--

CREATE TABLE `store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complement` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_footer` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_play` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `store`
--

INSERT INTO `store` (`id`, `name`, `telephone`, `email`, `street`, `number`, `complement`, `neighborhood`, `cep`, `city`, `state`, `country`, `logo`, `logo_footer`, `facebook`, `twitter`, `instagram`, `google_play`, `created_at`, `updated_at`) VALUES
(1, 'Kabum', '(19) 2114-4444', 'atendimento@kabum.com.br', 'Rua Carlos Gomes', '1321', '9º Andar', 'Centro', '13480-010', 'Limeira', 'SP', 'Brazil', 'https://static.kabum.com.br/conteudo/temas/001/imagens/topo/logo_kabum_.png', 'https://static.kabum.com.br/conteudo/temas/001/imagens/topo/logo_kabum_.png', 'https://www.facebook.com/kanuibr', 'https://twitter.com/KanuiBR', 'https://www.instagram.com/kanuibr/', 'https://play.google.com/store/apps/details?id=br.com.kanui&hl=pt_BR', '2020-04-01 03:59:49', '2020-04-01 03:59:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `visits` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `manager`, `name`, `telephone`, `genre`, `rg`, `cpf`, `last_visit`, `visits`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Matias', '$2y$10$zsFw7JowHQV1ZJeO66KWYuFPa154qshgsyqwsSD8UZmUw4uhOzkey', 'ashley.benites@galindo.org', 1, 'Sra. Luzia Violeta Marés Sobrinho', '+9808448245369', 'M', '136108696', '11438374798', NULL, NULL, NULL, NULL, NULL),
(2, 'Bittencourt', '$2y$10$v13DfmwaPOASD9GTQNcdsuc3rs9zZRKsNZU1so26WChcxMzotpN0S', 'sophie78@ig.com.br', 1, 'Pâmela Correia das Neves Sobrinho', '+1917307901351', 'M', '136108696', '11438374798', NULL, NULL, NULL, NULL, NULL),
(3, 'Lutero', '$2y$10$V4SWNapmGpvFWMq7FTfdK./dRNv.v8EYf9vfecMxOGCOjdWac0Fsa', 'ortega.simao@yahoo.com', 1, 'Sra. Thalissa Carrara', '+9912140951386', 'M', '136108696', '11438374798', NULL, NULL, NULL, NULL, NULL),
(4, 'Neves', '$2y$10$ujmZS/Kp3DJ8sXGHhd6EM.ZqjEr0QTpGMC6M4AGaRBy.ru8B.BFSy', 'vieira.juliana@ig.com.br', 1, 'Sra. Elizabeth Verdara Molina', '+7803028979172', 'M', '136108696', '11438374798', NULL, NULL, NULL, NULL, NULL),
(5, 'Gil', '$2y$10$DskrkKgVZMZev87Vw2/9b.wjeoGf.K6rcUaLSsAmy.p.siOBrkzgi', 'amelia06@yahoo.com', 1, 'Norma Daniela Cervantes Sobrinho', '+3438599340567', 'M', '136108696', '11438374798', NULL, NULL, NULL, NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_user_id_foreign` (`user_id`);

--
-- Índices de tabela `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco_user_id_foreign` (`user_id`);

--
-- Índices de tabela `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`),
  ADD KEY `product_brand_id_foreign` (`brand_id`);

--
-- Índices de tabela `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product_id_foreign` (`product_id`);

--
-- Índices de tabela `product_request`
--
ALTER TABLE `product_request`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_user_id_foreign` (`user_id`),
  ADD KEY `request_address_id_foreign` (`address_id`);

--
-- Índices de tabela `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `product_request`
--
ALTER TABLE `product_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `request`
--
ALTER TABLE `request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `store`
--
ALTER TABLE `store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Restrições para tabelas `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Restrições para tabelas `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Restrições para tabelas `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `request_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
