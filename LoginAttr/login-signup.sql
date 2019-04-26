-- create the tables for log in.

CREATE TABLE `loginfrom` (
 `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `User` varchar(50) DEFAULT NOT NULL,
 `Pass` varchar(50) DEFAULT NOT NULL,
 PRIMARY KEY (`ID`)
);


-- create the tables for sign in.
-- I commented the sign up for now because
-- it is not working now, need to figured out the reason why.

-- CREATE TABLE `signinfrom` (
--  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
--  `Email` varchar(50) NOT NULL,
--  `Username` varchar(50) NOT NULL,
--  `Pass` varchar(50) NOT NULL,
--  `ConfirmPass` varchar(50) NOT NULL,
--  PRIMARY KEY (`ID`)
-- );