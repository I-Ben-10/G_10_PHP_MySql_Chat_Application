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
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
          $sql1 = mysqli_query($conn, "SELECT count(user_id) as c1 FROM users WHERE is_group_status is NULL");
          if(mysqli_num_rows($sql1) >= 0){
            $row1 = mysqli_fetch_assoc($sql1);
          }
          $sql2 = mysqli_query($conn, "SELECT fname,lname FROM users WHERE unique_id='$row[group_creator]'");
          if(mysqli_num_rows($sql2) >= 0){
            $row2 = mysqli_fetch_assoc($sql2);
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row1['c1']; ?> Participants</p>
        </div>
      </header>
      <center><p style='font-size:75%;'>Group Created By <?php echo $row2['fname'] ." ". $row2['lname']; ?></p></center>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/groupchat.js"></script>

</body>
</html>
