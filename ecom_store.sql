-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jan-2023 às 21:34
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecom_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(7, 'Carvalho', 'carvalhojose298@gmail.com', 'Nadiesdaamor', '7.jpg', '922395062', 'Angola', 'admin', '    Estudante Universitário do 3º ano de Ciências da Computação    ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Homem', '\r\n'),
(2, 'Mulher', '\r\n\r\n\r\n'),
(3, 'Crianças', '\r\n'),
(4, 'Outras', '\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(15, 'Françony José', 'casadodesign22@gmail.com', '$2y$10$eXVXuVRdd2m8M6aS/IWE6OVw5k9H0OtQ.iPko.TWRUVvQMSCuj8.S', 'Angola', 'Luanda', '935738305', 'Sequele, Cacuaco', '7.jpg', '::1', '1258046161'),
(16, 'Maisa', 'maisa22@gmail.com', '$2y$10$j54ObX7O0lEjqrZdcRFbm.PvqdGqSeq07G9HeictzfcwU.hPqz2RO', 'Angolana', 'Luanda', '963852741', 'Morro Bento', 'Smith.jpg', '::1', '1256023974'),
(17, 'Carvalho', 'carvalho22@gmail.com', '$2y$10$ibW7xUFa5xbCZm068qXCbuZ/k2ScokvFv96zCqS3GkLYU9NSgJiPm', 'Angolana', 'Luanda', '963852741', 'Morro Bento', '6.jpg', '::1', '951588133');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(29, 15, 3000, 1001754262, 1, 'Small', '2023-01-09 12:18:24', 'Complete'),
(30, 15, 300, 222948916, 2, 'Medium', '2023-01-10 18:09:12', 'Complete'),
(31, 17, 500000, 1501741040, 5, 'Pequeno', '2023-01-13 08:28:22', 'pending');

-- --------------------------------------------------------

--
-- Estrutura da tabela `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(12, 123456, 1, 'Código bancário', 159632, 872921, '09/01/2023'),
(13, 123456, 2, 'Código bancário', 159632, 872921, '09/01/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(30, 15, 222948916, '19', 2, 'Medium', 'Complete'),
(31, 17, 1501741040, '28', 5, 'Pequeno', 'pending');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_quantity`, `status`, `product_price`, `product_desc`, `product_keywords`) VALUES
(19, 2, 1, '2023-01-12 18:46:16', 'SMARTWATCH', '4.png', '5.png', '6.png', 3, 0, 150, '    Excelente', 'smart, watch'),
(20, 1, 1, '2023-01-12 23:41:44', 'Smart', '9.png', '8.png', '6.png', 5, 0, 150, 'Ótimo', 'smart'),
(21, 1, 2, '2023-01-12 23:42:23', 'Smart', '3.png', '11.jpeg', '2.png', 10, 0, 150, 'Boom', 'smart'),
(22, 3, 1, '2023-01-12 23:43:22', 'Rolex', 'a-2.jpg', 'a-1.jpg', 'w4.png', 17, 0, 147852, 'Bom', 'rolex'),
(23, 3, 1, '2023-01-12 23:44:08', 'Rolex', 'w7.png', 'w3.png', 'w9.png', 15, 0, 963258, 'Lindo', 'rolex'),
(24, 1, 3, '2023-01-12 23:48:52', 'Smart', '1xg.webp', '61hKKFA2ogL._AC_SX425_.jpg', '61556V9NzPL._AC_SY355_.jpg', 12, 0, 100000, 'Infantil', 'smart, crianças'),
(25, 4, 1, '2023-01-13 07:43:10', 'Hugo Boss', 'HUGO-BOSS-Orange-Mens-NEW-YORK-Quartz-Resin-and-Canvas-Casual-Watch-ColorBlack-M-500x500.jpg', 'HUGO-BOSS-Mens-Bilbao-Stainless-Steel-Quartz-Watch-with-Leather-Strap-Black-20-M-500x500.jpg', 'HUGO-BOSS-Orange-Mens-1513004-New-York-Black-Stainless-Steel-Watch-1513004-500x500.jpg', 3, 0, 963258, 'Melhor do Mundo', 'Hugo, Boss, casual'),
(26, 4, 1, '2023-01-13 07:44:15', 'Hugo Boss', 'HUGO-BOSS-Orange-Mens-1513004-New-York-Black-Stainless-Steel-Watch-1513004-500x500.jpg', 'HUGO-BOSS-Orange-Mens-NEW-YORK-Quartz-Resin-and-Canvas-Casual-Watch-ColorBlack-M-500x500.jpg', 'HUGO-BOSS-Mens-Bilbao-Stainless-Steel-Quartz-Watch-with-Leather-Strap-Black-20-M-500x500.jpg', 6, 0, 150, 'Maravilhoso', 'Hugo, Boss, casual'),
(27, 5, 1, '2023-01-13 08:27:59', 'Casio', 'relogio_casio_masculino_digital_w_218h_4b2vdf_br_7883_1_fd0ab0a784e142926a903f79db6c36f0.webp', 'relogio_casio_masculino_digital_w_218h_4bvdf_vermelho_e_preto_esportivo_47_1_5de2c276daa3b2a51b371e6128082bab.webp', 'relogio_casio_w_59_1vq_1019_2_cf939191fec8b6e6883778f6e05272e8.webp', 2, 0, 150, 'Necessário', 'Casio, simples'),
(28, 5, 1, '2023-01-13 08:28:22', 'Casio', 'relogio_casio_w_59_1vq_1019_2_cf939191fec8b6e6883778f6e05272e8.webp', 'relogio_casio_masculino_digital_w_218h_4b2vdf_br_7883_1_fd0ab0a784e142926a903f79db6c36f0.webp', 'relogio_casio_masculino_digital_w_218h_4bvdf_vermelho_e_preto_esportivo_47_1_5de2c276daa3b2a51b371e6128082bab.webp', 1, 0, 100000, 'Bem bom', 'Casio, simples'),
(29, 1, 1, '2023-01-13 08:35:10', 'Smart', '5.png', '4.png', '8.png', 6, 0, 150, 'Bom', 'smart');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'SMARTWATCH', ''),
(3, 'ROLEXS', ''),
(4, 'HUGO BOSS', ''),
(5, 'CASIO', ''),
(8, 'Patek Philippe', 'Um dos melhores da atualidade\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `link`) VALUES
(26, 'GOAT', 'pasted-image-0-29.png', 'https://www.facebook.com/sotelefone/photos/pcb.1819163161795404/1819175991794121'),
(27, 'Primeiro Banner', 'smartwatch-and-analog-wristwatch-hwdl6ee612iefpb5.jpg', 'https://www.facebook.com/sotelefone/photos/pcb.1819163161795404/1819175991794121');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Índices para tabela `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Índices para tabela `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Índices para tabela `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Índices para tabela `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Índices para tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
