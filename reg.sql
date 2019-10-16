DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `quali` varchar(20) NOT NULL
 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
