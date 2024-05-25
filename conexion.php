<?php
// Configuration
$serverName = "DESKTOP-576647K\JSOR";
$connectionInfo = array("Database"=>"Cyberplaza_DB", "UID"=>"username", "PWD"=>"", "CharacterSet" => "UTF-8", "Authentication" => "SqlPassword");

// Create connection
$conn = sqlsrv_connect($serverName, $connectionInfo);

// Check connection
if (!$conn) {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}
echo "Connected to database successfully!";
?>