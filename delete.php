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

if(isset($_POST["delete"])){

    $delete = array("id"=>$_GET["id"]);
    $sql = "DELETE FROM `signup` WHERE `signup`.`id` = :id";
    $stmt = $verbinding->prepare($sql);
    $stmt->execute($delete);

    header("Location:adminhome.php");
}

if(isset($_POST["cancel"])){
    header("Location:adminhome.php");
}
?>

<div class="container">
    <div class="buttons">
        <p>Weet u zeker dat u de afspraak <span class="highlight"><?php echo $result["name"]; ?></span> wilt annuleren?</p>
        <form action="" class="knoppen" method="post">
            <input type="submit" class="cancel" name="cancel" value="Terug">
            <input type="submit" class="cancel" id="delete" name="delete" value="Verwijderen">
        </form>

    </div>
</div>