<?php
// session_start();
// if(!isset($_SESSION['unique_id'])){
//     header('Location: login.php');
// }

//     include "php/config.php";

//     // if(isset($_SESSION['unique_id'])){
//         $sql = mysqli_query($conn, "SELECT * FROM signup WHERE id = {$row['id']}");
//         if(mysqli_num_rows($sql) > 0){
//         $row = mysqli_fetch_assoc($sql);
//         }
//     // }
?>
<!-- 
<h1>Profiel</h1>

<form action="edit.php" method="post">
    Naam: <input type="text" name="name" value="<?php echo $row['name']; ?>" disabled></br></br>
    E-mail: <input type="text" name="email" value="<?php echo $row['email']; ?>" disabled></br></br>
    Wachtwoord: <input type="password" name="password" value="<?php echo $row['password']; ?>" disabled></br></br>

    <a href="edit.php"><button>Profiel bewerken</button></a>

    </form> -->

 
    <?php



$hostname = "localhost";
$username = "root";
$password = "";

try{
    $verbinding = new
    PDO("mysql:host=localhost;dbname=stattracker",$username,$password);
    $verbinding->setAttribute
    (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
    echo "Kon geen verbinding maken";
}

?>


<?php 
$delete = array("id"=>$_GET["id"]);
$sql = "SELECT * FROM `signup` WHERE `signup`.`id` = :id";
$stmt = $verbinding->prepare($sql);
$stmt->execute($delete);
$result = $stmt->fetch();

if(isset($_POST["cancel"])){
    header("Location:adminhome.php");
}
?>

<div class="container">
    <div class="buttons">
        Naam speler: <input type="text" name="name" placeholder="<?php echo $result["name"]; ?>" ><br><br>
        Email: <input type="text" name="name" placeholder="<?php echo $result["email"]; ?>" ><br><br>
        Goals: <input type="text" name="name"  ><br><br>
        Assits: <input type="text" name="name" ><br><br>
        <form action="" class="knoppen" method="post">
            <input type="submit" class="cancel" name="cancel" value="Terug">
        </form>

    </div>
</div>