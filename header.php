<?php
 require_once('connection.php');
 if(!isset($_SESSION['number'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM Toolkit (STK)</title>
    <link rel="stylesheet" href=".css">
</head>
<body>
    <ul>
       <li><a href="home.php">Home</a></li>
       <li><a href="info.php">info</a></li>
       <li class="dropdown">
       <a href="javascript:void(0)" class="dropbtn">More</a>
       <div class="dropdown-content">
          <a href="topup.php">Top-up</a>
          <a href="data.php">Data service</a>
          <a href="delete.php">Delete</a>
       </li>
       <li class="logout"><a href=".php">logout</a></li>
    </ul> 