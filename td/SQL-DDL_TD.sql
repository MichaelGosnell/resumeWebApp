CREATE DATABASE IF NOT EXISTS `td_positions`;
USE `td_positions`;

DROP TABLE IF EXISTS `position`;
CREATE TABLE `position` (
    `position_id` VARCHAR(40),
	`position_name` VARCHAR(40),
	`company_name` VARCHAR(40),
    `start_date` VARCHAR(40),
    `end_date` VARCHAR(40),
    `location` VARCHAR(40),
    `description` VARCHAR(40),
    `blob` VARCHAR(40),
    PRIMARY KEY(`company_id`)
);

DROP TABLE IF EXISTS `keywords`;
CREATE TABLE `keywords`(
	`keyword` VARCHAR(40) PRIMARY KEY,
    `position_id` VARCHAR(40),
    CONSTRAINT `connection` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`)
);

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
	`username` CHAR(40),
	`password` CHAR(40),
);

DELIMITER $$

CREATE TRIGGER `position_id_check` BEFORE INSERT ON position
FOR EACH ROW
BEGIN
	SET NEW.position_id = (SELECT count(*) FROM position)+1;
END; $$
DELIMITER ;

INSERT INTO `position`(`position_name`, `company_name`, `start_date`, `location`, `description`) VALUES ('Developer','TD','Jan 1 2018','Toronto','Web and Software');
INSERT INTO `position`(`position_name`, `company_name`, `start_date`, `end_date`, `location`, `description`) VALUES ('Temp','York','Jan 1 2014', 'Jan 3 2015', 'Toronto','Getting coffee');

INSERT INTO tbl_users (`username`,`password`) VALUES('freddie','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
INSERT INTO tbl_users (`username`,`password`) VALUES('johnny','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
INSERT INTO tbl_users (`username`,`password`) VALUES('jessica','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
INSERT INTO tbl_users (`username`,`password`) VALUES('trish','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');