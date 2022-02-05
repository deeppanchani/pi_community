<?php

define('DB_SERVER','localhost:3308');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','picommunity');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn == false) {
    dir("Error connecting...");
}
