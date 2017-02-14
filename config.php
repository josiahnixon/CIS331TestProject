<?php

/* Use to connect to dbstudent
 * with user/passwoard
 */

$host = "localhost";
$username = "josiahn";
$password = "nixon";
$db_name = "dbstudent";

$db = mysqli_connect($host, $username, $password, $db_name);

$connection_error = $db->connect_error; 

if ($connection_error != NULL) {
    echo "<p>Error connecting to database: $connection_error</p>";
    exit();
}
