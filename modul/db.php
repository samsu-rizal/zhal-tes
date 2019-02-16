<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "db_crud");
 
$konek = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
if($konek->connect_error){
 trigger_error('Koneksi ke database gagal: ' . $mysqli->connect_error, E_USER_ERROR);   
}

?>