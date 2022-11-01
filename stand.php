<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="style/links.css" rel="stylesheet">
<style>
        ::placeholder {
    color: white;
    opacity: 1; /* Firefox */
}

    </style>
<body>
<header>
<a href="homepage.php" class="terug"><h3>Terug</h3></a>
</header>

<?php
include "php/config.php";
?><br>
<?php
    $select = mysqli_query($conn, "SELECT *, SUM(goals) AS allGoals, SUM(assist) AS allAssists FROM goals");
    if(mysqli_num_rows($select) > 0){
    $rows = mysqli_fetch_assoc($select);
    }
                $sql = "SELECT *, SUM(goals) AS allGoals, SUM(assist) AS allAssists FROM goals GROUP BY team ORDER BY allGoals DESC";
$results = $conn->query($sql);
foreach($results as $row):

    echo $row['team'] . " " . $row['allGoals']. " " .$row['allAssists']."<br>"; 

endforeach;
?>


