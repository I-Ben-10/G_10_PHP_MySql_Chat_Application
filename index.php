<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="background-select" style='position:fixed;top:0;left:0;'>
      <div class="card">
        
        <div class="color-choices">
          <div>
            <input id="choice-1" checked="checked" name="choice" type="radio"/>
            <label for="choice-1"></label>
          </div>
          
          <div>
            <input id="choice-2" name="choice" type="radio"/>
            <label for="choice-2"></label>
          </div>
          
          <div>
            <input id="choice-3" name="choice" type="radio"/>
            <label for="choice-3"></label>
          </div>

          <div>
            <input id="choice-4" name="choice" type="radio"/>
            <label for="choice-4"></label>
          </div>

          <div>
            <input id="choice-5" name="choice" type="radio"/>
            <label for="choice-5"></label>
          </div>

          <div>
            <input id="choice-6" name="choice" type="radio"/>
            <label for="choice-6"></label>
          </div>
        </div>
      </div>
    </section>
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
