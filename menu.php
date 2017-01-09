

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AutoDhome</title>
        <link href="topbar.css" type="text/css" rel="stylesheet">
        <link href="menu.css" type="text/css" rel="stylesheet">
        <link href="temperaturebox.css" type="text/css" rel="stylesheet">
        <link href="alarmbox.css" type="text/css" rel="stylesheet">
        <link href="shutters.css" type="text/css" rel="stylesheet">
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
      <a href="http://localhost/Info1/loginpage.php" class="button">

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
      <li class="dashboardlist"></li>

      <li class="dashboardlist">
      <?php include ("alarmbox.php"); ?>
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
        </ul>
      </section>


      <aside class="content"> <!-- Sub navigation content  -->

        <div id="Temperature" class="subtab"> <!-- Subtab Temperature content  -->
                
        </div>

        <div id ="Alarm" class="subtab">
          
          <?php include ("alarmbox.php"); ?>

        </div>

      </aside> <!-- Sub navigation content end  -->



      <aside class="content">
        <div id ="Shutters" class="subtab">

        <?php include ("shutters.php"); ?>
        
    </div>
    </aside>
    </div>
    <div id="Rooms" class="tabcontent"><h2>Rooms</h2><!-- ____________________________________________ -->

      <?php

       $DB_SERVER = 'localhost';
       $DB_USERNAME = 'root';
       $DB_PASSWORD = '';
       $DB_DATABASE = 'autodhome';
       $DB_DATABASE = 'autodhome';
      
        $db =  mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
        $list_rooms = "SELECT Name_room 
              FROM room 
              WHERE id_home = 1"; 



      $results = mysqli_query($db,$list_rooms);

      echo "<ul>";
      if ($result=mysqli_query($db,$list_rooms))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
          {
          echo "<ul>";  
          printf ($row[0]);
          echo "</ul>";  

          }
        // Free result set
        mysqli_free_result($result);
      }

      mysqli_close($db);

      echo "This is an auto-generated query";

    ?>
      
    </div>

    <div id="Settings" class="tabcontent"><!-- ____________________________________________ -->
      
      <div class ="settingtable">
        <ul > <div onclick="opensubtab('email_stuff')" class="subtablinks" id="email_stuf"> Change email </div> </ul>
        <ul > <div onclick="opensubtab('email_stuff2')" class="subtablinks" id="email_stuf2"> Change password </div> </ul>
        <ul > <div onclick="opensubtab('email_stuff3')" class="subtablinks" id="email_stuf2"> Email Notifications </div> </ul>
        <ul > <div class="subtablinks"> Customize your Dashboard </div> </ul>
            <ul > <?php 
            ob_start();
            require("loginpage.php");
            $number ;
            ob_end_clean();
         ;?> </ul>
      </div>

      
      


      <!-- Part for email/password change  -->

      <form class="subtab" id ="email_stuff">
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="E-mail" placeholder="Enter your Email" required class="emailsettings">
        </span class="emailsettings"></ul>
        <ul><button type="button" class ="emailsettings">Send request</button> </ul>
      </form>

      <!-- ______________________________  -->
      <form class="subtab" id ="email_stuff2">
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="E-mail" placeholder="Enter your New password" required class="emailsettings">
      </span></ul>
      <ul><span class="emailsettings"> 
              <input id="userinput" type="user" name="E-mail" placeholder="Confirm your new password" required class="emailsettings">
      </span></ul>

        <ul><button type="button" class ="emailsettings">Change Password</button> </ul>
      </form>

      <!-- ______________________________  -->
      <form class="subtab" id ="email_stuff3">
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Alarm Notifications </label></div></ul>
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Movement Detection </label></div></ul>
      <ul><div class="Newsletter"> <label ><input type="checkbox" value="">Recieve DomISEP Newsletter </label></div></ul>

      </form>


    </div>




  </body>
</html>