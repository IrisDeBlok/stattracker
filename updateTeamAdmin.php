<?php
session_start();
$con = mysqli_connect("localhost","root","","stattracker");

if(isset($_POST['save_select']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $unique_id = $_POST['unique_id'];
    $club = $_POST['club'];

    // if($club = ){

    // }

    $query = "INSERT INTO teams (naam, unique_id, club) VALUES ('$name','$unique_id','$club')";
    $query_run = mysqli_query($con, $query);
    $query = "INSERT INTO goals (unique_id, naam, team) VALUES ('$unique_id','$name','$club')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location:profileforadmin.php?page=profiel&id=" . $id ." ");
    }
    else{
        $_SESSION['status'] = "Not Inserted";
        header("Location: profile.php");
    }

        // Close statement
        mysqli_stmt_close($stmt);
    }

?>