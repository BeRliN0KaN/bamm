<?php
//=define('DB_SERVER','127.0.0.1');
define('DB_SERVER','localhost');
define('DB_USER','axwinter_admin');
define('DB_PASS','axwinter@admin');
define('DB_NAME','axwinter_website');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 mysqli_set_charset($connection,"utf8mb4");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

