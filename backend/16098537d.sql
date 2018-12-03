
-- -----------------------------------------------------
-- Schema 16098537d
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `16098537d` DEFAULT CHARACTER SET utf8 ;
USE `16098537d` ;

-- -----------------------------------------------------
-- Table `16098537d`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `16098537d`.`User` ;

CREATE TABLE `16098537d`.`User` (
  `UserID` INT NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(10) NOT NULL,
  `Password` VARCHAR(16) NOT NULL,
  `Firstname` VARCHAR(45) NOT NULL,
  `Surname` VARCHAR(45) NOT NULL,
  `Gender` ENUM('Male', 'Female', 'Others') NOT NULL,
  `Email` VARCHAR(320) NOT NULL,
  PRIMARY KEY (`UserID`));


-- -----------------------------------------------------
-- Data for table `16098537d`.`User`
-- -----------------------------------------------------
START TRANSACTION;
USE `16098537d`;
INSERT INTO `16098537d`.`User` (`UserID`, `Username`, `Password`, `Firstname`, `Surname`, `Gender`, `Email`) VALUES ('1', 'user', 'user2333', 'Dawen', 'CHEN', 'Male', 'chendawen@gmail.com');
INSERT INTO `16098537d`.`User` (`UserID`, `Username`, `Password`, `Firstname`, `Surname`, `Gender`, `Email`) VALUES ('2', 'Yuki', '22222222', 'Jing', 'YU', 'Female', 'yuki222@gmail.com');
INSERT INTO `16098537d`.`User` (`UserID`, `Username`, `Password`, `Firstname`, `Surname`, `Gender`, `Email`) VALUES ('3', 'Max', '33333333', 'Max', 'HE', 'Male', 'max333@163.com');
INSERT INTO `16098537d`.`User` (`UserID`, `Username`, `Password`, `Firstname`, `Surname`, `Gender`, `Email`) VALUES ('4', 'Jenny', '44444444', 'Jenny', 'NG', 'Female', 'jenny444@gmail.com');
COMMIT; 



-- -----------------------------------------------------
-- Table `16098537d`.`tblproduct`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `16098537d`.`tblproduct` ;

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `foodtype` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` double(6,2) NOT NULL,
  `idg` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code`(`code`));


-- -----------------------------------------------------
-- Data for table `16098537d`.`tblproduct`
-- -----------------------------------------------------
START TRANSACTION;
USE `16098537d`;
INSERT INTO `16098537d`.`tblproduct` (`id`, `name`, `foodtype`, `image`, `price`, `idg`, `code`) VALUES
(1, 'Fried Asparagus', 'appetizer', 'img/1.jpg', 38.00, 'asparagus', 'FA'),
(2, 'Boneless Wings', 'appetizer', 'img/2.jpg', 40.00, 'chicken wings', 'BW'),
(3, 'House Salad', 'salad', 'img/3.jpg', 48.00, 'chicken, vegetables', 'HS'),
(4, 'Shrimp Salad', 'salad', 'img/4.jpg', 58.00, 'shrimps, vegetables', 'SS'),
(5, 'Mixed Salad', 'salad', 'img/5.jpg', 50.00, 'vegetables, fruits', 'MS'),
(6, 'Smoky Burger', 'burger', 'img/6.jpg', 68.00, 'bread, beef, lettuce', 'SB');
COMMIT; 

