<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>



<body>
  <!-- <div class="container"> -->
  <div class="wrapper">
    <section class="form signup">
      <h1>Sign up</h1>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div class="form-group">
            <label>First Name</label><br>
            <input type="text" name="fname" class="form-control" placeholder="First name" required>
          </div>
        <div class="form-group">
          <label>Email Address</label><br>
          <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label>Password</label><br>
          <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" class="btn" name="submit" value="Sign in">
        </div>
      </form>
      <div class="link">Al een account? <a href="login.php">Inloggen</a></div>
    </section>
  </div>
  <!-- </div> -->

  <script src="javascript/signup.js"></script>

</body>
</html>
