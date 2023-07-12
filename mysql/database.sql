    -- CREATE TABLE --

CREATE TABLE `users` (
  `user_id` INT(36) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_mail` VARCHAR(255) NOT NULL UNIQUE,
  `user_password` VARCHAR(255) NOT NULL,
  `user_nbConvives` INT(2),
  `user_allergies` VARCHAR(255),
  `user_role` VARCHAR(16) NOT NULL CHECK (`user_role` in ("CLIENT","ADMIN"))
) ENGINE = InnoDB;

INSERT INTO `users` (`user_mail`, `user_password`, `user_nbConvives`, `user_allergies`, `user_role`) VALUES
('test@test.com', 'testons la database', 0, NULL, "CLIENT"),
('wooow@jesaispas.wow', 'mot de passe', 5, 'eau, air, poison', "CLIENT"),
('admin@admin.fr', 'admin du quai antique', 2, 'gluten', "ADMIN");


-- Table reservations :
CREATE TABLE `reservations` (
    `reservation_id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `reservation_name` VARCHAR(36) NOT NULL,
    `reservation_mail` VARCHAR(255) NOT NULL,
    `reservation_nbConvives` INT(2),
    `reservation_date` DATE NOT NULL,
    `reservation_heure` TIME NOT NULL,
    `reservation_allergies` VARCHAR(255)
) ENGINE = InnoDB;

INSERT INTO `reservations` (`reservation_name`,`reservation_mail`,`reservation_nbConvives`,`reservation_date`,`reservation_heure`,`reservation_allergies`) VALUES
('Marcel', 'marcel.tortue@gmail.com', 5, '2023-07-18', '20:15:00','salade'),
('Antonio', 'mail@mail.fr', 1, '2023-08-10', '19:00:00', 'sel'),
('Leonardo', 'funnycarbonara@gmail.com', 1, '2023-07-15', '21:00:00', NULL),
('Paul', 'paul22@gmail.com', 3, '2023-07-12', '13:30:00', NULL);


-- Table carte :
CREATE TABLE `carte` (
    `carte_id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `carte_name` VARCHAR(100) NOT NULL,
    `carte_description` VARCHAR(255) NOT NULL,
    `carte_price` FLOAT NOT NULL
) ENGINE = InnoDB;

INSERT INTO `carte` (`carte_name`, `carte_description`, `carte_price`) VALUES
('Fondue savoyarde', "Savoureuse crème à base de différents fromages, avec un peu de vin blanc et des petits morceaux d'ails.", 17),
('Tartiflette', "Cette se présente sous forme de gratin très riche et savoureux car il est composé de lardon fumé, de pommes de terre coupées en rondelles, de morceaux de reblochon fondus et d'un peu d'oignon", 18),
('La Poêlée Montagnarde', "Toujours a base de pommes de terre, de lardons fumées, de fromage d'Abandance et de vin blanc.", 15);


-- Table galerieImage :
CREATE TABLE `galerieImage` (
    `galerieImage_id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `galerieImage_name` VARCHAR(36) NOT NULL,
    `galerieImage_imgLink` VARCHAR(255) NOT NULL
) ENGINE = InnoDB;

INSERT INTO `galerieImage` (`galerieImage_name`, `galerieImage_imgLink`) VALUES
('Tartiflette', "../img/tartiflette.jpg"),
('Poêlée Montargnarde', "../img/poelee-montagnarde.jpg");

-- Table horaire :
CREATE TABLE `horaire` (
    `horaire_id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `horaire_day` VARCHAR(36) NOT NULL,
    `horaire_time` VARCHAR(36) NOT NULL,
    `horaire_start` TIME,
    `horaire_end` TIME
) ENGINE = InnoDB;

INSERT INTO `horaire` (`horaire_day`, `horaire_time`, `horaire_start`, `horaire_end`) VALUES
('lundi', 'dejeuner', '11:30:00', '14:00:00'),
('lundi', 'diner', '19:30:00', '21:30:00'),
('mardi', 'dejeuner', '11:30:00', '14:00:00'),
('mardi', 'diner', '19:30:00', '21:30:00'),
('mercredi', 'dejeuner', '11:30:00', '14:00:00'),
('mercredi', 'diner', '19:30:00', '21:30:00'),
('jeudi', 'dejeuner', '11:30:00', '14:00:00'),
('jeudi', 'diner', '19:30:00', '21:30:00'),
('vendredi', 'dejeuner', '11:30:00', '14:00:00'),
('vendredi', 'diner', '19:30:00', '21:30:00'),
('samedi', 'dejeuner', '11:00:00', '14:30:00'),
('samedi', 'diner', '19:00:00', '22:00:00'),
('dimanche', 'dejeuner', '11:00:00', '14:30:00'),
('dimanche', 'diner', '19:00:00', '22:00:00');