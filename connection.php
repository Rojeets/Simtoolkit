<?php
ob_start();
session_start();
$server="localhost";
$username="root";
$password="";
$database="STK";
$socket_path = "/data/data/com.termux/files/usr/var/run/mysqld.sock"; 
$connect = mysqli_connect($server, $username, $password, $database, null, $socket_path);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
?>