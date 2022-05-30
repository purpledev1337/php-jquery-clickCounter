<?php

include 'db_connection.php';

// Creazione tabella nel db
$start = '
CREATE TABLE IF NOT EXISTS `counters` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `txt` TEXT,
    `num` INT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;';
mysqli_query($conn, $start);

?>