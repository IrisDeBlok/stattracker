<?php
 session_start();
 include "php/config.php";


$sql = mysqli_query($conn, "SELECT * FROM signup WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0){
$row = mysqli_fetch_assoc($sql);
}

?>

<form action="edit.php" method="post">
    Naam: <input type="text" name="name" value="<?php echo $row['name']; ?>" ></br></br>
    E-mail: <input type="text" name="email" value="<?php echo $row['email']; ?>" ></br></br>

    <button name="edit">Profiel bewerken</button>

    </form>

<?php
 
 if(isset($_POST['edit']))
{
 $unique_id=$_SESSION['unique_id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $select= "SELECT * FROM signup WHERE unique_id='$unique_id'";
 $sql = mysqli_query($conn,$select);
 $row = mysqli_fetch_assoc($sql);
 $res= $row['unique_id'];
 if($res === $unique_id)
 {

    $update = "UPDATE signup SET name='$name',email='$email' WHERE unique_id='$unique_id'";
    $sql2=mysqli_query($conn,$update);
if($sql2)
    { 
        /*Successful*/
        header('location:home.php');
    }
    else
    {
        /*sorry your profile is not update*/
        header('location:profile.php');
    }
 }
 else
 {
     /*sorry your id is not match*/
     header('location:home.php');
 }
}
?>