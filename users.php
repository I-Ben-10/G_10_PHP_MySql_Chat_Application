<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
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
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
      <br>
      <div style='text-align:center;'><a href="groupsignup.php?unique_id=<?php echo $row['unique_id']; ?>" class="logout">Create group</a></div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
