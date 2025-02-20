<?php
// define('DB_SERVER','127.0.0.1');
// define('DB_USER','root');
// define('DB_PASS','7445');
// define('DB_NAME','db_builderw');
// $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//  mysqli_set_charset($connection,"utf8mb4");
// // Check connection
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }

// กำหนดค่าการเชื่อมต่อหลัก
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_builderw');

// กำหนดค่าการเชื่อมต่อสำรอง
define('DB_SERVER1', '127.0.0.1');
define('DB_USER1', 'root');
define('DB_PASS1', '7445');
define('DB_NAME1', 'db_builderw');

// พยายามเชื่อมต่อฐานข้อมูลหลัก
$connection = mysqli_connect(DB_SERVER1, DB_USER1, DB_PASS1, DB_NAME1);
mysqli_set_charset($connection, "utf8mb4");

// ถ้าเชื่อมต่อไม่สำเร็จ ให้ลองเชื่อมต่อเซิร์ฟเวอร์สำรอง
if (!$connection) {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($connection, "utf8mb4");
}

// ตรวจสอบการเชื่อมต่อ
if (!$connection) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>