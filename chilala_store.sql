-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2023 às 23:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chilala_store`
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
  `admin_country` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(7, 'Chilala', 'carlachilala@gmail.com', 'Ezra2022', '7.jpg', '932992750', 'Angola', 'admin', '    Estudante UniversitÃ¡ria do 3Âº ano de CiÃªncias da ComputaÃ§Ã£o    ');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Homem', '\r\n'),
(2, 'Mulher', '\r\n\r\n\r\n'),
(3, 'CrianÃ§as', '\r\n'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(15, 'Carla Chilala', 'carlachilala9\r\n 4@gmail.com', '$2y$10$eXVXuVRdd2m8M6aS/IWE6OVw5k9H0OtQ.iPko.TWRUVvQMSCuj8.S', 'Angola', 'Luanda', '932992750', 'Zona verde, Benfica', '7.jpg', '::1', '12345678'),
(16, 'Jessica', 'jessicabau065@gmail.com', '$2y$10$j54ObX7O0lEjqrZdcRFbm.PvqdGqSeq07G9HeictzfcwU.hPqz2RO', 'Angolana', 'Luanda', '952617187', 'Morro Bento', 'Smith.jpg', '::1', '123456789'),
(17, 'Chilala', 'carlachilala@gmail.com', '$2y$10$ibW7xUFa5xbCZm068qXCbuZ/k2ScokvFv96zCqS3GkLYU9NSgJiPm', 'Angolana', 'Luanda', '932992750', 'Benfica', '6.jpg', '::1', '927025418');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(12, 123456, 1, 'CÃ³digo bancÃ¡rio', 159632, 872921, '09/02/2023'),
(13, 123456, 2, 'CÃ³digo bancÃ¡rio', 159632, 872921, '09/02/2023');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_quantity`, `status`, `product_price`, `product_desc`, `product_keywords`) VALUES
(19, 2, 1, '2023-02-13 22:35:05', 'BOLO DE ANANÁS', 'bolo1.jpg', 'bolo1.1.jpg', 'bolo1.2.jpg', 3, 0, 10000, '    Excelente', 'baunília, laranja'),
(20, 1, 1, '2023-01-12 23:41:44', 'BOLO DE CÔCO', 'bolo2.jpg', 'bolo2.1.jpg', 'bolo2.2.jpg', 5, 0, 150, 'Baunília', 'laranja, canela'),
(21, 1, 2, '2023-01-12 23:42:23', 'BOLO DE CHOCOLATE', 'bolo3.jpg', 'bolo3.1.jpg', 'bolo3.2.jpg', 10, 0, 150, 'Baunília', 'laranja, canela'),
(22, 3, 1, '2023-01-12 23:43:22', 'BOLO ', 'bolo4.jpg', 'bolo4.1.jpg', 'bolo4.2.jpg', 17, 0, 147852, 'Baunília', 'laranja, canela'),
(23, 3, 1, '2023-01-12 23:44:08', 'BOLO DE JINGUBA', 'bolo5.jpg', 'bolo5.1.jpg', 'bolo5.2.jpg', 15, 0, 963258, 'Baunília', 'laranja, canela'),
(24, 1, 3, '2023-01-12 23:48:52', 'DOCES', 'tranca1.jpg', 'tranca1.1', 'tranca1.2', 12, 0, 100000, 'Baunília', 'laranja, canela'),
(25, 4, 1, '2023-01-13 07:43:10', 'BOLO DE CHANTILY', 'bolo7.jpg', 'bolo7.1.jpg', 'bolo7.2.jpg', 3, 0, 963258, 'Baunília', 'laranja, canela'),
(26, 4, 1, '2023-01-13 07:44:15', 'BOLO SIMPLES', 'bolo8.jpg', 'bolo8.1.jpg', 'bolo8.2.jpg', 6, 0, 150, 'Baunília', 'laranja, canela'),
(27, 5, 1, '2023-01-13 08:27:59', 'BOLO TEMÂTICO', 'bolo9.jpg', 'bolo9.1.jpg', 'bolo9.2.jpg', 2, 0, 150, 'Baunília', 'laranja, canela'),
(28, 5, 1, '2023-01-13 08:28:22', 'BOLO DE LARANJA', 'bolo10.jpg', 'bolo10.1.jpg', 'bolo10.2.jpg', 1, 0, 100000, 'Baunília', 'laranja, canela'),
(29, 1, 1, '2023-02-13 22:34:39', 'BOLO DE BANANA', 'bolo11.jpg', 'bolo11.1.jpg', 'bolo11.2.jpg', 6, 0, 10000, 'Baunília', 'laranja, canela');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'TEMÂTICO', ''),
(3, 'CHOCOLATE', ''),
(4, 'JINGUBA', ''),
(5, 'BANANA', ''),
(8, 'CHANTILY', 'Com os melhores Sabores\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `link`) VALUES
(26, 'GOAT', 'pasted-image-0-29.png', 'https://www.42frases.com.br/wp-content/uploads/2020/06/eu-quero-a-vida.jpg'),
(27, 'Primeiro Banner', 'slide0.jpg', 'https://th.bing.com/th/id/OIP.YgUfvqmoaeI_fc5_pcHhzAHaHa?pid=ImgDet&w=194&h=194&c=7');

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
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
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
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
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
