<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:loginpage.php");
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AutoDhome</title>
        <link href="topbar.css" type="text/css" rel="stylesheet">
        <link href="menu.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript" src="checkbox.js"></script>

  </head>
  <body>
    <div class="header">
    <div>
      <img class="logo" src="PTITLOGO.png" alt="=logo" />
    </div>
    <div>
    <button class="logout">
      <a href="http://localhost/Info1/logout.php" class="button">

        <img id="fleche" src="fleche.jpg" alt="fleche" />
        <h2 id="logout">
          logout
        </h2>
        </a>
    </button>
    </div>
    <div>
     <h1 class="title">
        My Home     
      </h1>
    </div>
  </div>

    <nav class="navbar">
     <table>
        <tr>
          <td>
        <div onclick="opentab('Dashboard')" class="tablinks">Dashboard</div>
      </td>
      <td>
        <div onclick="opentab('Features')" class="tablinks">Features</div>
      </td>
      <td>
        <div onclick="opentab('Rooms')" class="tablinks">Rooms</div>
      </td>
      <td>
        <div onclick="opentab('Settings')" class="tablinks">Settings</div>
      </td>
    </tr>
    </table>
  </nav>

    <div id="Dashboard" class="tabcontent"><!-- ___________________________________________ -->
      
      <ul id="dashboardlist">
      <li class="dashboardlist">
        <?php include ("temperature.php"); ?>
      </li>

      <li class="dashboardlist">
      <?php include ("alarm.php"); ?>
        </li>

        <li class="dashboardlist">

        <?php include ("shutters.php"); ?>
    </li>
    </ul>

  
    </div>

    <div id="Features" class="tabcontent"><!-- ____________________________________________ -->


      <section class="navbar2"> <!-- Sub navigation bar  -->
        <ul>
        <div onclick="opensubtab('Temperature')" class="subtablinks">Temperature</div>
        <div onclick="opensubtab('Alarm')" class="subtablinks">Alarm</div>
        <div onclick="opensubtab('Shutters')" class="subtablinks">Shutters</div>
        <div onclick="opensubtab('Humidity')" class="subtablinks">Humidity</div>
        <div onclick="opensubtab('Cameras')" class="subtablinks">Cameras</div>
        </ul>
      </section>


      

        <div id="Temperature" class="subtab"> <!-- Subtab Temperature content  -->
                
          <?php include ("temperaturebox.php"); ?>

        </div>


        <div id ="Alarm" class="subtab">
          
          <?php include ("alarmbox.php"); ?>

        </div>

        <div id ="Shutters" class="subtab">

        <?php include ("shuttersbox.php"); ?>
        
        </div>

        <div id="Humidity" class="subtab">

        <?php include ("humiditybox.php"); ?>
        </div>

        <div id="Cameras" class="subtab">
        </div>

    </div>


    <div id="Rooms" class="tabcontent"> <!-- ____________________________________________ -->

      <?php

       $DB_SERVER = 'localhost';
       $DB_USERNAME = 'root';
       $DB_PASSWORD = 'root';
       $DB_DATABASE = 'autodhome';
       $DB_DATABASE = 'autodhome';
      
        $db =  mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
        $list_rooms = "SELECT Name_room 
              FROM room 
              WHERE id_home = 1"; 



      $results = mysqli_query($db,$list_rooms);

      echo '<ul class="navbar2">';
      if ($result=mysqli_query($db,$list_rooms))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
          {
          echo '<ul class="subtablinks">';  
          printf ($row[0]);
          echo "</ul>";  

          }
        // Free result set
        mysqli_free_result($result);
      }
      echo "</ul>";  
      mysqli_close($db);

      

    ?>
    
    </div>

    <div id="Settings" class="tabcontent"><!-- ____________________________________________ -->
      
      <section class ="settingtable">
        <ul > <div onclick="opensubtab('setting1')" class="subtablinks"> Change email </div> </ul>
        <ul > <div onclick="opensubtab('setting2')" class="subtablinks"> Change password </div> </ul>
        <ul > <div onclick="opensubtab('setting3')" class="subtablinks"> Email Notifications </div> </ul>
        <ul > <div onclick="opensubtab('setting4')" class="subtablinks"> Edit Dashboard </div> </ul>
        <ul > <div onclick="opensubtab('setting5')" class="subtablinks"> Manage House </div> </ul>
            
            <ul > <?php 
            ob_start();
            require("loginpage.php");
            $number ;
            ob_end_clean();
         ;?> </ul>
      </section>

      <!-- Part for email/password change  -->

        <?php
     
      if (isset($_POST['newemail'])){
            include 'database.php';
            session_start();
            $myNewEmail = $_POST["newemail"];
            $sql2 ="UPDATE client SET email_address ='".$myNewEmail."' WHERE email_address = '".$_SESSION["username"]."';";
            mysqli_query($db,$sql2);
            mysqli_close($db);
            echo "Votre adresse email a bien été changé";

    }
    else{

     ?>

      <form  class="subtab" id ="setting1" method="post">
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="new_email" placeholder="Enter your Email" required class="emailsettings">
        </span class="emailsettings"></ul>
        <ul><button type="submit" class ="emailsettings">Send request</button> </ul>
      </form>
      
      <?php
             }
       ?>

       <?php
     
      if (isset($_POST['new_password']) && isset ($_POST['confirm_new_password']) && $_POST['new_password'] = $_POST['confirm_new_password']){
            include 'database.php';
            session_start();
            $myNewPassword = $_POST["new_password"];
            $sql3 ="UPDATE client SET password ='".$myNewPassword."' WHERE email_address = '".$_SESSION["username"]."';";
            mysqli_query($db,$sql3);
            mysqli_close($db);
            echo "Votre mot de passe a été changé";

    }
    else{

     ?>

      <!-- ______________________________  -->
      <form class="subtab" id ="setting2" method ="post">
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="new_password" placeholder="Enter your New password" required class="emailsettings">
      </span></ul>
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="confirm_new_password" placeholder="Confirm your new password" required class="emailsettings">
      </span></ul>

        <ul><button type="submit" class ="emailsettings">Change Password</button> </ul>
      </form>

       <?php
             }
       ?>

      <!-- ______________________________  -->
      <form class="subtab" id ="setting3">
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Alarm Notifications </label></div></ul>
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Movement Detection </label></div></ul>
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Receive Autodhome Newsletter </label></div></ul>
      </form>


    </div>




  </body>
</html>