CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `firstName` varchar(255),
  `lastName` timestamp,
  `location` varchar(255),
  `e_mail` varchar(255)
);

CREATE TABLE `services` (
  `id` int PRIMARY KEY,
  `service_category` varchar(255),
  `service_name` varchar(255),
  `location` varchar(255),
  `details` varchar(255),
  `price` int
);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `services` (`id`);
