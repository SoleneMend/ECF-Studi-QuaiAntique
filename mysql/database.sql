    -- CREATE TABLE --

CREATE TABLE `users` (
  `user_id` INT(36) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_name` VARCHAR(36) NOT NULL,
  `user_mail` VARCHAR(255) NOT NULL UNIQUE,
  `user_password` VARCHAR(255) NOT NULL,
  `user_nbConvives` INT(2) NOT NULL,
  `user_allergies` VARCHAR(255),
  `user_role` VARCHAR(16) NOT NULL CHECK (`user_role` in ("CLIENT","ADMIN"))
) ENGINE = InnoDB;

INSERT INTO `users` (`user_name`, `user_mail`, `user_password`, `user_nbConvives`, `user_allergies`, `user_role`) VALUES
('test', 'test@test.com', 'testons la database', 1, NULL, "CLIENT"),
('woow', 'wooow@jesaispas.wow', 'mot de passe', 5, 'eau, air, poison', "CLIENT"),
('Admin', 'admin@admin.fr', 'admin du quai antique', 2, 'gluten', "ADMIN");


-- Table reservations :
CREATE TABLE `reservations` (
    `reservation_id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `reservation_name` VARCHAR(36) NOT NULL,
    `reservation_mail` VARCHAR(255) NOT NULL,
    `reservation_nbConvives` INT(2) NOT NULL,
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
('Fondue savoyarde', "Savoureuse creme a base de differents fromages, avec un peu de vin blanc et des petits morceaux d'ails.", 17),
('Tartiflette', "Cette recette se presente sous forme de gratin tres riche et savoureux car il est compose de lardon fume, de pommes de terre coupees en rondelles, de morceaux de reblochon fondus et d'un peu d'oignon", 18),
('La Poelee Montagnarde', "Toujours a base de pommes de terre, de lardons fumees, de fromage d'Abandance et de vin blanc.", 15);


-- Table galerieImage :
CREATE TABLE `galerieImage` (
    `galerieImage_id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `galerieImage_name` VARCHAR(36) NOT NULL UNIQUE,
    `galerieImage_imgLink` VARCHAR(255) NOT NULL UNIQUE
) ENGINE = InnoDB;

INSERT INTO `galerieImage` (`galerieImage_name`, `galerieImage_imgLink`) VALUES
('Tartiflette', "img/tartiflette.png"),
('Matouille', "img/matouille.png"),
('Raclette', "img/raclette.png"),
('Farcement Savoyard', "img/farcement-savoyard.png"),
('Fondue Savoyarde', "img/fondue-savoyarde.png"),
('Poelee Montargnarde', "img/poelee-montagnarde.png");

-- Table horaire :
CREATE TABLE `horaire` (
    `horaire_id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `horaire_day` VARCHAR(36) NOT NULL,
    `horaire_time` VARCHAR(36) NOT NULL,
    `horaire_start` TIME,
    `horaire_end` TIME,
    `seuil_max` INT(3)
) ENGINE = InnoDB;

INSERT INTO `horaire` (`horaire_day`, `horaire_time`, `horaire_start`, `horaire_end`, `seuille_max`) VALUES
('lundi', 'dejeuner', '11:30:00', '14:00:00', 100),
('lundi', 'diner', '19:30:00', '21:30:00', 100),
('mardi', 'dejeuner', '11:30:00', '14:00:00', 100),
('mardi', 'diner', '19:30:00', '21:30:00', 100),
('mercredi', 'dejeuner', '11:30:00', '14:00:00', 100),
('mercredi', 'diner', '19:30:00', '21:30:00', 100),
('jeudi', 'dejeuner', '11:30:00', '14:00:00', 100),
('jeudi', 'diner', '19:30:00', '21:30:00', 100),
('vendredi', 'dejeuner', '11:30:00', '14:00:00', 100),
('vendredi', 'diner', '19:30:00', '21:30:00', 100),
('samedi', 'dejeuner', '11:00:00', '14:30:00', 150),
('samedi', 'diner', '19:00:00', '22:00:00', 175),
('dimanche', 'dejeuner', '11:00:00', '14:30:00', 150),
('dimanche', 'diner', '19:00:00', '22:00:00', 175);

-- Table menu :
CREATE TABLE `menu` (
    `menu_id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `menu_title` VARCHAR(36) NOT NULL,
    `menu_description` VARCHAR(56) NOT NULL,
    `menu_horaire` VARCHAR(36) NOT NULL,
    `menu_prix` INT(3) NOT NULL
) ENGINE = InnoDB;

INSERT INTO `menu` (`menu_title`, `menu_description`, `menu_horaire`, `menu_prix`) VALUES
('Formule Simple', 'Entree + Plat', 'toute la semaine', 25),
('Formule Gourmande', 'Plat + Dessert', 'toute la semaine', 25),
('Formule Complete', 'Entree + Plat + Dessert', 'week-end seulement', 30);