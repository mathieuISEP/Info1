<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>DomISEP: Login</title>
        <link href="loginpage.css" type="text/css" rel="stylesheet">
    </head>

<body>
    <img class="logo" src="LOGOINCROYABLE.png" alt"=logo" />

   <?php
   if (isset($_POST['username']) && isset ($_POST['password'])){   
 
   # $DB_SERVER = 'localhost';
   # $DB_USERNAME = 'root';
   # $DB_PASSWORD = '';
   # $DB_DATABASE = 'autodhome';
    include 'database.php';
    session_start();


   $myusername = $_POST['username'];
   $mypassword = $_POST['password'];
   # $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  

       
      
      
      $sql = "SELECT * FROM client WHERE email_address = '$myusername'";
      $number = "SELECT client_number FROM client WHERE email_address = '$myusername'";
      $result = $db -> query($sql);

      if ($result->num_rows > 0){
          $row = mysqli_fetch_assoc($result);
          if(strcmp($mypassword,$row["password"]) == 0){
          $_SESSION['username'] = true;
          $sql2 = "SELECT last_name FROM client WHERE email_address = '$myusername'";
          $result2 = $db -> query($sql2);
          header("location: menu.php");
          echo 'connecté';

          }
          else{
             echo 'incorrect password';

            
          }
        } 
          else{
            
            echo'Username doesn\'t exist';

       }    
       }
       else{





?>
    
<form name="login" action="" method="post" accept-charset="utf-8">
    <h1>
        Enter my Home
    </h1>
   <table id="loginpagetable">
    <tr>
      <div class="user">
        <td>
        <label for="username">Username</label>
        </td>
        <td>
        <span>
            <input id="userinput" type="user" name="username" placeholder="username" required>
        </span>
        </td>
      </div>
    </tr>
    <tr>
      <div class="password">
        <td>
        <label for="password">Password</label>
        </td>
        <td>
        <span>
            <input id="passwordinput" type="password" name="password" placeholder="password" required>
        </span>
        </td>
    </div>
    </tr>
    </table>
    <div class="login">
             <input id="login" type="submit" value="Login">
    </div>
</form>
 <?php
 }
 ?>
</body>
</html>