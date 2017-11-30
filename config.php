<?php

function connect_db() {
    $server = 'localhost'; // this may be an ip address instead
    $user = 'root';
    $pass = 'root';
    $database = 'kana_slim'; // name of your database
    $connection = new mysqli($server, $user, $pass, $database);

    return $connection;
}

/*
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_contact` varchar(100) NOT NULL,
  `emp_role` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
 
 
INSERT INTO `employee` (`employee_id`, `emp_name`, `emp_contact`, `emp_role`) VALUES
(1, 'Hardik Vyas', '94085xxxxx', 'Web Developer'),
(3, 'Raj K Joshi', '996633XXX', 'SEO Master'),
(4, 'Ram D Rv', '55555XXX', 'Admin');
*/
?>