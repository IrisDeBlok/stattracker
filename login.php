<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>
   <style>
        .logo{
             position: absolute;
             width: 12%;
             top: 0
         }
    </style>
<body>
  <!-- <div class="container"> -->
  <div class="wrapper">
    <section class="form login">
      <h1>Login</h1>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="form-group">
          <label>Email Address</label><br>
          <input class="form-control" type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label>Password</label><br>
          <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" class="btn" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Nog geen account? <a href="index.php">Account aanmaken</a></div>
    </section>
  </div>
        <!-- </div> -->

</body>
</html>
<script src="javascript/login.js"></script>