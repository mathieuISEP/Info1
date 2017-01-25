<?php
     
      if (isset($_POST['new_password']) && isset ($_POST['confirm_new_password']) && $_POST['new_password'] = $_POST['confirm_new_password']){
            include 'database.php';
            $myNewPassword = $_POST["new_password"];
            $myHashPassword = password_hash($myNewPassword, PASSWORD_DEFAULT, ['cost' => 12]);
            $_SESSION["getHashPassword"] =  $myHashPassword; 
            $sql3 ="UPDATE client SET password ='".$myHashPassword."' WHERE email_address = '".$_SESSION["username"]."';";
            mysqli_query($db,$sql3);
            mysqli_close($db);
            echo "Votre mot de passe a été changé";

    }
    else{

     ?>

<html>
<head>
    <link href="changepassword.css" type="text/css" rel="stylesheet">

</head>
<body>

      <form id="changepassword" method ="post">
      <div id="titlechangepassword">Change Your Password</div>
      <div class="hr"><hr /></div>
             <!--<?php echo "<div style ='font:50px Calibri,italic,sans-serif;color:#000000'> <center> Change password: </center> </div>";  ?> --> 

       <ul id="passwordsettinglist">
       <li class="passwordlistelements"> 
              <input class="passwordsettings" type="password" name="post_password" placeholder="Enter your current password" required>
      </li>
      <li class="passwordlistelements"> 
              <input class="passwordsettings" type="password" name="new_password" placeholder="Enter your New password" required>
      </li>
      <li class="passwordlistelements"> 
              <input class="passwordsettings" type="password" name="confirm_new_password" placeholder="Confirm your new password" required>
      </li>

        <li class="passwordlistelements">
        <button class="passwordsettings" type="submit" class ="emailsettings">Change Password</button>
        </li>
        </ul>
      </form>

      <?php
             }
       ?>
</body>
</html>