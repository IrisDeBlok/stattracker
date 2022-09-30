<?php
session_start();

    include "php/config.php";

    // if(isset($_SESSION['unique_id'])){
        $sql = mysqli_query($conn, "SELECT * FROM signup WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        }
    // }
?>

<h1>Profiel</h1>

<form action="edit.php" method="post">
    Naam: <input type="text" name="name" value="<?php echo $row['name']; ?>" disabled></br></br>
    E-mail: <input type="text" name="email" value="<?php echo $row['email']; ?>" disabled></br></br>
    Wachtwoord: <input type="password" name="password" value="<?php echo $row['password']; ?>" disabled></br></br>

    <a href="edit.php"><button>Profiel bewerken</button></a>

    </form>

 