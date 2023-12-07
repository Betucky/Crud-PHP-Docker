<?php
$databaseHost = 'mariadb_host';
$databaseName = 'custom_db';
$databaseUsername = 'root';
$databasePassword = 'Custom.2020';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
