<?php 
session_start();
if(!$_SESSION['unique_id'] ){
    header('Location: login.php');
}
    if($_SESSION['unique_id'] == '815362009'){
        header("Location: adminhome.php");
    }
    ?>
<h2>Home</h2><br>

<h1><b>Welcome</b></h1>

<br>

<a href="profile.php">profiel</a><br>

<a href="logout.php">uitloggen</a>