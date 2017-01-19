<?php

      if (isset($_POST['new_email']) && isset ($_POST['confirm_email']) && $_POST['post_password'] = $_SESSION['user_password']){

            include 'database.php';
            $myNewEmail = $_POST["new_email"];
            $sql ="UPDATE client SET email_address ='".$myNewEmail."' WHERE email_address = '".$_SESSION["username"]."';";
            mysqli_query($db,$sql);
            mysqli_close($db);
      }
    else{


     ?>  
<html>
  <head>
    <link href="changeemail.css" type="text/css" rel="stylesheet">
  </head>
  <body>
      
 
      <form  class="subtab" id ="setting1" method="post">
      <div id="titlechangeemail">Change Your Email</div>
      <div class="hr"><hr /></div>

       <!--<?php echo "<div style ='font:50px Calibri,italic,sans-serif;color:#000000'><center> Change e-mail: </center></div>";  ?>  -->

      <ul id="emailsettinglist">
      <li class="emaillistelements"> 
              <input class="emailsettings" type="password" name="post_password" placeholder="Enter your password" required>
      </li>
      <li class="emaillistelements"> 
              <input class="emailsettings" type="user" name="new_email" placeholder="Enter your New Email" required>
      </li>
      <li class="emaillistelements"> 
              <input class="emailsettings" type="user" name="confirm_email" placeholder="Confirm your New Email" required>
      </li>
        <li class="emaillistelements">
        <button class ="emailsettings" type="submit">Change Email</button> 
        </li>
        </ul>
      </form>

  </body>
</html>

<?php
             }
       ?>