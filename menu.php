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
      <li id="tempdashboard" class="dashboardlist">
        <?php include ("temperature.php"); ?>
      </li>

      <li id="alarmdashboard" class="dashboardlist">
      <?php include ("alarm.php"); ?>
        </li>

      <li id="shuttersdashboard" class="dashboardlist">
        <?php include ("shutters.php"); ?>
    </li>

    <li id="humiditydashboard" class="dashboardlist">
    <?php include ("humidity.php"); ?>
    </li>
    </ul>

  
    </div>

    <div id="Features" class="tabcontent"><!-- ____________________________________________ -->


      <div class="navbar2"> <!-- Sub navigation bar  -->
        <ul>
        <div onclick="opensubtab('Temperature')" class="subtablinks">Temperature</div>
        <div onclick="opensubtab('Alarm')" class="subtablinks">Alarm</div>
        <div onclick="opensubtab('Shutters')" class="subtablinks">Shutters</div>
        <div onclick="opensubtab('Humidity')" class="subtablinks">Humidity</div>
        </ul>
      </div>


      

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
      include("rooms.php"); 
      ?>
    
    </div>

    <div id="Settings" class="tabcontent"><!-- ____________________________________________ -->
      
      <div class ="settingtable">
        <ul > <div onclick="opensubtab('setting1')" class="subtablinks"> Change Email </div> </ul>
        <ul > <div onclick="opensubtab('setting2')" class="subtablinks"> Change Password </div> </ul>
        <ul > <div onclick="opensubtab('setting3')" class="subtablinks"> Email Notifications </div> </ul>
        <ul > <div onclick="opensubtab('setting4')" class="subtablinks"> Edit Dashboard </div> </ul>
        <ul > <div onclick="opensubtab('setting5')" class="subtablinks"> Manage House </div> </ul>
            
            <ul > <?php 
            ob_start();
            require("loginpage.php");
            $number ;
            ob_end_clean();
         ;?> </ul>
      </div>

      <div class="subtab" id="setting1">
      <?php include("changeemail.php"); ?>
       </div>

       <div class="subtab" id="setting2">
      <?php include("changepassword.php"); ?>
      </div>

      <div class="subtab" id="setting3">
      <?php include("emailnotif.php"); ?>
      </div>

      <div class="subtab" id="setting4">
      <?php include("editdashboard.php"); ?>
      </div>

      <div class="subtab" id="setting5">
      <?php include("managehouse.php"); ?>
      </div>
  </div>
  </body>
</html>