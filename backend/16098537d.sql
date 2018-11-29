
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
-- Table `16098537d`.`food`
-- -----------------------------------------------------
CREATE TABLE `food` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `foodtype` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(6,2) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Data for table `16098537d`.`food`
-- -----------------------------------------------------
START TRANSACTION;
USE `16098537d`;
INSERT INTO `food` (`id`, `name`, `foodtype`, `image`, `price`) VALUES
(1, 'Fried Asparagus', 'appetizer', '1.jpg', 38.00),
(2, 'Boneless Wings', 'appetizer', '2.jpg', 40.00),
(3, 'House Salad', 'salad', '3.jpg', 48.00),
(4, 'Shrimp Salad', 'salad', '4.jpg', 58.00),
(5, 'Mixed Salad', 'salad', '5.jpg', 50.00),
(6, 'Smoky Burger', 'burger', '6.jpg', 68.00);
COMMIT; 

