DROP DATABASE IF EXISTS `signin_user`;

CREATE DATABASE `signin_user`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `registration` (`id`, `username`, `user_email`, `user_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');


ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
