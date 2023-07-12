    -- CREATE TABLE --

CREATE TABLE `users` (
  `user_id` char(36) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_nbconv` int(2) NOT NULL,
  `user_allergen` varchar(255) NOT NULL,
  `user_role` VARCHAR(16) NOT NULL CHECK (`user_role` in ("CLIENT","ADMIN"))
) ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `user_mail`, `user_password`, `user_nbconv`, `user_allergen`, `user_role`) VALUES
(1, 'test@test.com', 'testons la database', 0, NULL, "CLIENT"),
(42, 'wooow@jesaispas.wow', 'mot de passe', 5, 'eau, air, poison', "CLIENT"),
(3678, 'admin@admin.fr', 'admin du quai antique', 2, 'gluten', "ADMIN");


-- Table reservations :
CREATE TABLE `reservations` (
    `reservation_id` INT(11) NOT NULL PRIMARY KEY,
    `reservation_name` VARCHAR(36) NOT NULL,
    `reservation_mail` VARCHAR(255),
    `reservation_nbConvives` INT(10) NOT NULL,
    `reservation_date` DATE NOT NULL,
    `reservation_heure` TIME NOT NULL,
    `reservation_allergies` VARCHAR(255)
) ENGINE = InnoDB;

INSERT INTO `reservations` (`reservation_id`,`reservation_name`,`reservation_mail`,`reservation_nbConvives`,`reservation_date`,`reservation_heure`,`reservation_allergies`) VALUES
(42, 'Marcel', 'marcel.tortue@gmail.com', 5, '2023-07-18', '20:15:00','salade'),
(516528, 'Antonio', 'mail@mail.fr', 1, '2023-08-10', '19:00:00', 'sel'),
(71, 'Leonardo', 'funnycarbonara@gmail.com', 1, '2023-07-15', '21:00:00', NULL),
(18, 'Paul', 'paul22@gmail.com', 3, '2023-07-12', '13:30:00', NULL);


-- Table carte :
CREATE TABLE `carte` (
    `carte_id` INT(11) NOT NULL PRIMARY KEY,
    `carte_name` VARCHAR(100) NOT NULL,
    `carte_description` VARCHAR(255) NOT NULL,
    `carte_price` FLOAT NOT NULL
) ENGINE = InnoDB;

INSERT INTO `carte` (`carte_id`, `carte_name`, `carte_description`, `carte_price`) VALUES
(1, 'Fondue savoyarde', "Savoureuse crème à base de différents fromages, avec un peu de vin blanc et des petits morceaux d'ails.", 17),
(2, 'Tartiflette', "Cette se présente sous forme de gratin très riche et savoureux car il est composé de lardon fumé, de pommes de terre coupées en rondelles, de morceaux de reblochon fondus et d'un peu d'oignon", 18),
(3, 'La Poêlée Montagnarde', "Toujours a base de pommes de terre, de lardons fumées, de fromage d'Abandance et de vin blanc.", 15);


-- Table galerieImage :
CREATE TABLE `galerieImage` (
    `galerieImage_id` INT(11) NOT NULL PRIMARY KEY ,
    `galerieImage_name` VARCHAR(36) NOT NULL,
    `galerieImage_imgLink` VARCHAR(255) NOT NULL
) ENGINE = InnoDB;

INSERT INTO `galerieImage` (`galerieImage_id`, `galerieImage_name`, `galerieImage_imgLink`) VALUES
(1, 'Tartiflette', "../img/tartiflette.jpg"),
(2, 'Poêlée Montargnarde', "../img/poelee-montagnarde.jpg");

-- Table horaire :
CREATE TABLE `horaire` (
    `horaire_id` INT(3) NOT NULL PRIMARY KEY,
    `horaire_day` VARCHAR(36) NOT NULL,
    `horaire_time` VARCHAR(36) NOT NULL,
    `horaire_start` TIME,
    `horaire_end` TIME
) ENGINE = InnoDB;

INSERT INTO `horaire` (`horaire_id`, `horaire_day`, `horaire_time`, `horaire_start`, `horaire_end`) VALUES
(1, 'lundi', 'dejeuner', '11:30:00', '14:00:00'),
(2, 'lundi', 'diner', '19:30:00', '21:30:00'),
(3, 'mardi', 'dejeuner', '11:30:00', '14:00:00'),
(4, 'mardi', 'diner', '19:30:00', '21:30:00'),
(5, 'mercredi', 'dejeuner', '11:30:00', '14:00:00'),
(6, 'mercredi', 'diner', '19:30:00', '21:30:00'),
(7, 'jeudi', 'dejeuner', '11:30:00', '14:00:00'),
(8, 'jeudi', 'diner', '19:30:00', '21:30:00'),
(9, 'vendredi', 'dejeuner', '11:30:00', '14:00:00'),
(10, 'vendredi', 'diner', '19:30:00', '21:30:00'),
(11, 'samedi', 'dejeuner', '11:00:00', '14:30:00'),
(12, 'samedi', 'diner', '19:00:00', '22:00:00'),
(13, 'dimanche', 'dejeuner', '11:00:00', '14:30:00'),
(14, 'dimanche', 'diner', '19:00:00', '22:00:00');