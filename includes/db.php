<?php
define('DB_SERVER','vzzzzzzzzzzzzzzzzzzzzzzzfffffffffffff gvvvvvvvvvvvvvvvvv r             vrrvhthgbvcvbcbcbnmmmmcnn                 ;; ; ; ; ;;;;;;;;;;;;;;;;; ;;;;f-f f ffdd  gre  ehrt hth j  jyj                 jjy yt hthghgfh ffffff              hthrhrh               heeh 
  hehe  htehtrh th ');
define('DB_USER','hthth  hhht           hhtht           thhth t');
define('DB_PASS','  hththrtj jhy hy hhr r r r r  hrhrhr  htht t hj j u u u u kkk    uykykykykyky y y yk y             ukuk              uk u ');
define('DB_NAME','db_builderw');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 mysqli_set_charset($connection,"utf8mb4");
// Check connection
if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>




