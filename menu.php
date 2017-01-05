    <? php
      include("database.php");// Connect to database
      $list_rooms = "SELECT Name_room 
                    FROM room 
                    WHERE id_home = 1";
      $result = mysql_query($list_rooms);
      while($row = mysql_fetch_array($result)) {
        echo $row['Name_room'];
        }
      

    ?>

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
      <img class="logo" src="LOGOINCROYABLE.png" alt="=logo" />
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

    <div id="Dashboard" class="tabcontent"><!-- ____________________________________________ -->
      <h2>Dashboard</h2>
              <ul>Usefull info defined by the user</ul>
  
    </div>

    <div id="Features" class="tabcontent"><!-- ____________________________________________ -->
      


      <section class="navbar2"> <!-- Sub navigation bar  -->
        <ul>
        <div onclick="opensubtab('Temperature')" class="subtablinks">Temperature</div>
        <div onclick="opensubtab('Alarm')" class="subtablinks">Alarm</div>
        </ul>
      </section>


      <aside class="content"> <!-- Sub navigation content  -->

        <div id ="Temperature" class="subtab"> <!-- Subtab Temperature content  -->
                
          <form name="temperature" method="get" accept-charset="utf-8">
            <div id="temperaturebox">
              
              <div id="boxheader">Temperatures</div>
              <div class="hr"><hr /></div>
            
              <table>
                <tr>
                  <td><div id="housetemp">House Temperature</div></td>
                  <td><input id="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                  <td class="C">°C</td>
                </tr>
              </table>

              <div>
                <span><input type="checkbox" class="checkbox" name="checkbox" onclick="javascript:displayifchecked()"></span>Custom room temperatures
              </div> 
            
              <div id="rooms">
                <table>
                  <tr>
                    <td>Living Room</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Kitchen</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bedroom 1</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bedroom 2</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bedroom 3</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bedroom 4</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bathroom 1</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="C">°C</td>
                  </tr>

                  <tr>
                    <td>Bathroom 2</td>
                    <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                    <td class="°C">°C</td>
                  </tr>


                </table>
              </div>


              <div id="buttons">
                <span><input id="reset" type="submit" value="Reset"></span>
                <span><input id="apply" type="submit" value="Apply"></span>
              </div>
                  
          </div>
          </form>

        </div>

        

      </aside> <!-- Sub navigation content end  -->


      <aside class="content">
        <div id ="Alarm" class="subtab">

      <div id="alarmbox">
        <div>Alarm</div>
       <div class="hr"><hr /></div>
        <table id="housealarm">
          <tr>
            <td>House Alarm</td>
            <td>             
              <div id="off">OFF</div>
            </td>
            <td>
             <label class="switch">
                <input type="checkbox">
                 <div class="slider round"></div>
            </label>     
           </td>
           <td>
             <div id="on">ON</div>
            </td>
          </tr>
        </table>
        <span>
        <input type="checkbox" class="checkbox" onclick="javascript:displayifchecked()">
        Custom room alarms
      </span> 
      <div class="rooms">
        <table id="alarmrooms">
          <tr>
            <td>Living Room
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Kitchen
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bedroom 1
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bedroom 2
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bedroom 3
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bedroom 4
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bathroom 1
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
          <tr>
            <td>Bathroom 2
            </td>
            <td>
              <div class="off">OFF</div>
            </td>
            <td>
              <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div class="on">ON</div>
            </td>
          </tr>
        </table>
        </div>
        </div>
        </div>    
      </aside>
    </div>


    <div id="Rooms" class="tabcontent"><h2>Rooms</h2><!-- ____________________________________________ -->

      <?php

       $DB_SERVER = 'localhost';
       $DB_USERNAME = 'root';
       $DB_PASSWORD = '';
       $DB_DATABASE = 'auto2';
      
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

    <div id="Settings" class="tabcontent"><h2>Settings</h2><!-- ____________________________________________ -->
      
      <div class ="settingtable">
        <ul > <div > Change email </div> </ul>
        <ul > <div > Change password </div> </ul>
        <ul > <div > Email Notifications </div> </ul>
        <ul > <div > Customize your Dashboard </div> </ul>
        <ul ></ul>
      </div>

      <div class="Newsletter"> <label ><input type="checkbox" value="">Recieve DomISEP Newsletter </label></div>


    </div>


  </body>
</html>