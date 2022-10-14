<?php 
session_start();
if($_SESSION['unique_id'] !== '815362009'){
    header("Location: home.php");
}
?>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
    li {
        list-style: none;
    }
</style>
<h2>Home for admin</h2><br>

<h1><b>Welcome</b></h1>

<?php
        include "php/config.php";
        
        // $sql = mysqli_query($conn, "SELECT name FROM signup");
        // if(mysqli_num_rows($sql) > 0){
        // $row = mysqli_fetch_assoc($sql);
        // }

        $sql = "SELECT id, name FROM signup WHERE NOT name = 'admin'";
        $result = $conn->query($sql);

        

?>


<input type="text" id="myInput"  onkeyup="searchName()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
    <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                    echo "
                    <style>
                        i{
                            color: black;
                        }
                    </style>
                    <li ><span><a href='profileforadmin.php?page=profiel&id=" . $row["id"] ."''>". $row["name"]."</a></span> <a href='delete.php?page=delete&id=" . $row["id"] ."' id='names'><i class='fas fa-trash-alt'></i></a></li> ";
            }
        } else {
            echo "0 results";
        }
 ?>

    
</ul>

<br>

<a href="profile.php">profiel</a><br>
<a href="stats.php">statistieken</a></br>

<a href="logout.php">uitloggen</a>

<script>


function searchName() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    a = document.getElementById("names")
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}



</script>
