<?php 
session_start();
if($_SESSION['unique_id'] !== '815362009'){
    header("Location: homepage.php");
}
?>
<link rel="stylesheet" href="style/home.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<body>
    <header>
        <h2>Admin</h2>
        <div class="uitloggen">
        <a id="uitloggen" href="zoekSpeler.php">Zoeken</a>
        <a id="uitloggen" href="profile.php">Profiel</a>
        <a id="uitloggen" href="logout.php">Uitloggen</a>
        </div>
    </header>

<div id="links">
<a class="links" href="addTeam.php">Team toevoegen</a><br>
<a class="links" href="random.php">Random team</a><br>
<a class="links" href="uitslagInvoeren.php">Uitslag invoeren</a><br>
<a class="links" href="uitslag.php">Uitslag</a><br>
</div>

</body>