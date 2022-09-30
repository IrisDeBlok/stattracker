
<h2>Home for admin</h2><br>

<h1><b>Welcome</b></h1>

<?php
        include "php/config.php";
        
        // $sql = mysqli_query($conn, "SELECT name FROM signup");
        // if(mysqli_num_rows($sql) > 0){
        // $row = mysqli_fetch_assoc($sql);
        // }

        $sql = "SELECT name FROM signup WHERE NOT name = 'admin'";
        $result = $conn->query($sql);
?>

<style>
li{
    overflow: hidden;
}
</style>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
    <?php

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li ><a href='#' id='names'>". $row["name"]. " </a></li> ";
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


function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    a = document.getElementById("names")
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
        } else {
            li[i].style.display = "none";
            // a.style.display="none";
        }
    }

}


</script>