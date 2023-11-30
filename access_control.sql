-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 30-Nov-2023 às 21:39
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `access_control`
--

CREATE DATABASE access_control;

USE access_control;
-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_cod` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pass` text NOT NULL,
  `user_photo` text DEFAULT NULL,
  `user_birth` date DEFAULT NULL,
  `user_first_name` varchar(30) DEFAULT NULL,
  `user_last_name` varchar(30) DEFAULT NULL,
  `user_desc` text DEFAULT NULL,
  `user_cep` varchar(11) DEFAULT NULL,
  `user_address` varchar(40) DEFAULT NULL,
  `user_number` varchar(6) DEFAULT NULL,
  `user_complement` varchar(20) DEFAULT NULL,
  `user_neighborhood` varchar(30) DEFAULT NULL,
  `user_city` varchar(30) DEFAULT NULL,
  `user_state` varchar(3) DEFAULT NULL,
  `user_sex` varchar(10) DEFAULT NULL,
  `user_phone` varchar(16) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_notify` tinyint(1) DEFAULT NULL,
  `user_new_pass` text DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_email` (`user_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
