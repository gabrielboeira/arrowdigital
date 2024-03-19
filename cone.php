<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dbloja');
define('PORT', '3306'); 
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST .';port='.PORT.';dbname=' . DB_NAME.';charset=utf8', DB_USER, DB_PASS);
   
    return $PDO;
}

 $conecta = db_connect();
?>