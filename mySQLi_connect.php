<?php
define('DB_USER', 'navjotsaini');
define('DB_PASSWORD', '2021');
define('DB_HOST', 'localhost');
define('DB_NAME', 'project1');

$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    unset($mysqli);
} else {
    $mysqli->set_charset('utf8');
}
