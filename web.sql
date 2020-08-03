-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2020 lúc 11:51 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `views`, `image`) VALUES
(3, 'Why choose Sparta Plaza Hotel to travel this summer', 'A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, maj', 300, 'plugin/images/5e55f07c4c4aa-img8.jpg'),
(5, 'Why choose Sparta Plaza Hotel to travel this summerasa686867d', 'A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. Don', 300, 'plugin/images/5e55f088e4e31-img1.jpg'),
(6, 'Why choose Sparta Plaza Hotel to travel this summer sdadw', 'A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rouA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. HdA major key, never panic. Don’t panic, when it gets crazy and rou', 200, 'plugin/images/5e55f08fa82bf-img4.jpg'),
(7, 'Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad', 'Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerWhy fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerWhy fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerWhy fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerWhy fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summerasad Why fdsfsfef choose Sparta Plaza Hotel to travel this summer', 300, 'plugin/images/5e55f09623623-img2.jpg'),
(8, 'Become an Yoga trainer at yogi center dfsfsd', 'A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. DonsadasdA major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. How’s business? Boomin. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. Fan luv. Donsadasd', 200, 'plugin/images/5e55f0a7bd6c1-img3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `checkin` varchar(255) DEFAULT NULL,
  `checkout` varchar(255) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `nights` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `room_id`, `name`, `phone`, `checkin`, `checkout`, `adult`, `nights`, `price_id`, `children`, `url`) VALUES
(22, 12, 'Company', '0123456789', '02/02/2020', '02/29/2020', 0, 0, 1, 0, 'http://localhost/hotel/rooms-details.php?id=8'),
(23, 25, NULL, NULL, '2020-03-06', '2020-03-07', 1, 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(190) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `url`) VALUES
(1, 'FLC', 'images/dt1.png', 'https://facebook.com/'),
(2, 'VTV', 'images/dt2.png', NULL),
(3, 'QVS', 'images/dt3.png', NULL),
(4, 'MT', 'images/dt4.png', NULL),
(5, 'HK', 'images/dt5.png', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `descs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `descs`) VALUES
(1, 'Room vip 1', 'Ahihi'),
(2, 'Room vip 2', 'Bhihi'),
(4, 'Room vip 3', 'Chihi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `room_id` varchar(190) DEFAULT NULL,
  `url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `email`, `name`, `content`, `room_id`, `url`) VALUES
(26, 'anhdn@vietbrain.com', 'Dang Ngoc Anh', 'Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! Let me be clear, you  to make it through the jungle to make it to paradise, that’s the key, ', '17', NULL),
(27, 'admin@gmail.com', 'Nguyen Van B', 'Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! Let me be clear, you to make it through the jungle to make it to paradise, that’s the key,', '25', NULL),
(28, 'anhdnph06664@fpt.edu.vn', 'Company', 'Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! Let me be clear, you to make it through the jungle to make it to paradise, that’s the key,', '22', NULL),
(29, 'admin1@gmail.com', 'Adam Smith', 'Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! Let me be clear, you to make it through the jungle to make it to paradise, that’s the key,', '23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `phone`, `email`, `comment`) VALUES
(4, 'Dang Ngoc Anh', NULL, '0832241099', 'anhdang181@gmail.com', 'nha xau qua');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `email`, `password`, `customer_id`) VALUES
(12, 'Dang Ngoc Anh', 'anhdn@vietbrain.com', '$2y$10$FbsdmrKLflM9HtB4CdM8PuuP.jwlm3F1nn/Q814egGUVWpX8SHM7K', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel_service`
--

CREATE TABLE `hotel_service` (
  `id` int(11) NOT NULL,
  `titlee` varchar(255) DEFAULT NULL,
  `textx` varchar(255) DEFAULT NULL,
  `iconn` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hotel_service`
--

INSERT INTO `hotel_service` (`id`, `titlee`, `textx`, `iconn`, `image`) VALUES
(1, 'SPA', 'ahihihi', 'plugin/images/5e573e5110b3b-spa2.png', 'plugin/images/5e573e1336ddc-img1.jpg'),
(14, 'RESTAURANT', 'bhihi', 'plugin/images/5e573ec7707e7-food.png', 'plugin/images/5e573ec770493-img2.jpg'),
(15, 'GYM', 'chihi', 'plugin/images/5e573ed8385b1-gym.png', 'plugin/images/5e573ed8380d2-img3.jpg'),
(16, 'EVENT', 'dhihi', 'plugin/images/5e573ee7321b1-event.png', 'plugin/images/5e573ee731e74-img4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'Thanh Vien', 1),
(2, 'Quan Tri Vien', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `numberple` varchar(300) DEFAULT NULL,
  `roomsize` int(11) DEFAULT NULL,
  `bedtype` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `image`, `name`, `price`, `numberple`, `roomsize`, `bedtype`, `title`, `detail`, `views`, `status`, `cate_id`) VALUES
(16, 'plugin/images/5e579086dc5d3-img.jpg', 'Double Rooms', 200, NULL, 20, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 400, 1, 1),
(17, 'plugin/images/5e5790b450682-img1.jpg', 'Related Rooms', 150, NULL, 25, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 600, 1, 2),
(18, 'plugin/images/5e5792059d3ab-img2.jpg', 'Comfy condo with fantastic jungle views', 250, NULL, 25, 1, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 400, 1, 2),
(19, 'plugin/images/5e5792366d0cc-img1.jpg', 'OCEAN VIEW STUDIO SUITE! Fresh Tropical Vibe!', 260, NULL, 30, 1, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 500, 1, 4),
(20, 'plugin/images/5e5792723f64e-img.jpg', 'OCEAN VIEW PENTHOUSE SUITE! Fresh Tropical Vibe!', 300, NULL, 50, 1, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 600, 1, 4),
(21, 'plugin/images/5e5792a541395-img.jpg', 'Monkey Suite with Pool.', 150, NULL, 45, 1, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 400, 1, 4),
(22, 'plugin/images/5e5792d88e54f-img-1.jpg', 'This is a private apartment and not just a room', 500, NULL, 20, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 500, 1, 4),
(23, 'plugin/images/5e57932bc3d8b-img.jpg', 'I have to say that I was thoroughly impressed', 800, NULL, 60, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 400, 1, 4),
(24, 'plugin/images/5e57935d1e718-img-3.jpg', 'In case this apartment is booked take a look of our listing in Casa', 600, NULL, 21, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 500, 1, 4),
(25, 'plugin/images/5e57937e1fcbb-img-1.jpg', 'Casa Pargo we have 6 unit very comfortable. Surrounded by mother nature and amazing views', 800, NULL, 60, 2, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.', 400, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slidesshow`
--

CREATE TABLE `slidesshow` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slidesshow`
--

INSERT INTO `slidesshow` (`id`, `image`, `title`, `sub`) VALUES
(6, 'plugin/images/5e55f0d2a4330-banner.jpg', 'Swimming Pool', 'Sparta Plaza Hotel'),
(8, 'plugin/images/5e55f0d9ee5a1-banner2.jpg', 'Become an Yoga trainer at yogi center', 'Fall Hit List0808');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `password`, `role_id`, `avatar`) VALUES
(41, 'admin@gmail.com', 'Dang Ngoc Anh', '$2y$10$wX3dWU4GPi0OHWClLaAqJuZr4IeLdAr73mMKv.Tlnb1ZNVYY/YzVC', 2, 'plugin/images/5e55f5ffc8459-LOGO1.png'),
(42, 'admin1@gmail.com', 'Nguyen Van A', '$2y$10$wX3dWU4GPi0OHWClLaAqJuZr4IeLdAr73mMKv.Tlnb1ZNVYY/YzVC', 1, 'plugin/images/5e55f6288c19e-stripad.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `web_settings`
--

INSERT INTO `web_settings` (`id`, `logo`, `hotline`, `map`, `email`, `address`) VALUES
(1, 'plugin/images/5e564238dc1e3-LOGO1.png', '0832241099', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0714383041454!2d105.7756165511761!3d21.029827393047498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b375a47857%3A0x3e1f8c5611dfe544!2zMTggUGjhuqFtIEjDuW5nLCBNYWkgROG7i2NoLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1582195127279!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'anhdang8181@gmail.com', '4 Trần Thái Tông, Cầu Giấy, Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `welcomes`
--

CREATE TABLE `welcomes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `welcomes`
--

INSERT INTO `welcomes` (`id`, `title`, `content`, `name`, `image`) VALUES
(1, 'Sparta Plaza Hotel Hi', 'Lorem Khaled Ipsum is a major key to success. Bless up. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion! Wraith talk. They key is to have every key, the key to open every door. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started.', 'Victor Henderson', 'plugin/images/5e564bfcf0590-img.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hotel_service`
--
ALTER TABLE `hotel_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slidesshow`
--
ALTER TABLE `slidesshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role` (`role_id`);

--
-- Chỉ mục cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hotel_service`
--
ALTER TABLE `hotel_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `slidesshow`
--
ALTER TABLE `slidesshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
