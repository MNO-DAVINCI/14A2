CREATE TABLE IF NOT EXISTS `klas`.`personen` (
 	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`voornaam` varchar(100) NOT NULL,
  	`achternaam` varchar(100) NOT NULL,
  	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;