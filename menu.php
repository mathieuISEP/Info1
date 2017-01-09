

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

    <div id="Dashboard" class="tabcontent"><!-- ___________________________________________ -->
      
      <table>
      <tr>
      <td>
      <div id ="Temperature"> <!--Temperature content  -->
                
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
                <span><input type="checkbox" class="checkbox" name="checkbox" onclick="javascript:display1()"></span>Custom room temperatures
              </div> 
            
              <div id="temprooms">
                <table> 


                <?php // _______PHP for automatic Room display in Temperature Subtab_______________
                 $DB_SERVER = 'localhost';
                 $DB_USERNAME = 'root';
                 $DB_PASSWORD = '';
                 $DB_DATABASE = 'autodhome';
                 $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  
                  
                
                $list_rooms = "SELECT Name_room 
                              FROM room 
                              WHERE id_home = 1 "; 

                  if ($result=mysqli_query($db,$list_rooms))
                  {
                  // Fetch one and one row
                  while ($row=mysqli_fetch_row($result))
                    // For each row in the query
                    {
                      echo ' <tr><td>';
                      printf ($row[0]);
                      echo'</td>';
                      echo' <td>
                              <input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                              <td class="C">°C</td>';
                      echo'</tr>';}}



                 ?>
                </table>
              </div>


              <div id="buttons">
                <span><input id="reset" type="submit" value="Reset"></span>
                <span><input id="apply" type="submit" value="Apply"></span>
              </div>
                  
          </div>
          </form>

        </div>
        </td>

      <td>
      <div id ="Alarm">

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
        <input type="checkbox" class="checkbox" onclick="javascript:display2()">
        Custom room alarms
      </span> 
      <div id="alarmrooms">
        <table id="roomalarm">
          

        <?php       // _______PHP for automatic Room display in Alarm Subtab_______________
            $DB_SERVER = 'localhost';
             $DB_USERNAME = 'root';
             $DB_PASSWORD = '';
             $DB_DATABASE = 'autodhome';
             $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  
             $list_rooms = "SELECT Name_room 
                            FROM room 
                            WHERE id_home = 1"; 

          if ($result=mysqli_query($db,$list_rooms))
            {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
              // For each row in the query
              {
             
              $new = $row[0];
              echo '<tr>';
               echo '<td>'; echo $new; echo' </td>'; // Display Title of Room
             
                // Display whats repetitive

               echo '<td> <div class="off">OFF</div> </td>';
               echo '<td> <label class="switch">
                          <input type="checkbox">
                          <div class="slider round"></div>
                          </label> 
                   </td>';
             echo '<td><div class="on">ON</div></td>';
              echo "</tr>";
              }
            // Free result set
            mysqli_free_result($result);
          }

          mysqli_close($db);
        ?>


        </table>
        </div>
        </div>
        </div>    
        </td>

        <td>
        <div id ="Shutters">

        <div id="shuttersbox">
        <div>Shutters</div>
        <div class="hr"><hr /></div>
        <table id="houseshutters">
          <tr>
            <td>House Shutters
            </td>
            <td>
             <div id="closed">CLOSED</div>
            </td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div id="open">OPEN</div>
            </td>
          </tr>
        </table>
        <span>
          <input type="checkbox" id="checkbox" onclick="javascript:display3()">Custom house shutters
        </span> 
        <div id="shutterrooms">
          <table id="roomshutters">
            <tr>
              <td>Living Room
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Kitchen
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 1
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 2
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 3
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 4
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bathroom 1
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bathroom 2
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    </td>
    </tr>
    </table>
  
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
                <span><input type="checkbox" class="checkbox" name="checkbox" onclick="javascript:display1()"></span>Custom room temperatures
              </div> 
            
              <div id="temprooms">
                <table> 


                <?php // _______PHP for automatic Room display in Temperature Subtab_______________
                 $DB_SERVER = 'localhost';
                 $DB_USERNAME = 'root';
                 $DB_PASSWORD = '';
                 $DB_DATABASE = 'autodhome';
                 $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  
                  
                
                $list_rooms = "SELECT Name_room 
                              FROM room 
                              WHERE id_home = 1 "; 

                  if ($result=mysqli_query($db,$list_rooms))
                  {
                  // Fetch one and one row
                  while ($row=mysqli_fetch_row($result))
                    // For each row in the query
                    {
                      echo ' <tr><td>';
                      printf ($row[0]);
                      echo'</td>';
                      echo' <td>
                              <input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
                              <td class="C">°C</td>';
                      echo'</tr>';}}



                 ?>
                </table>
              </div>


              <div id="buttons">
                <span><input id="reset" type="submit" value="Reset"></span>
                <span><input id="apply" type="submit" value="Apply"></span>
              </div>
                  
          </div>
          </form>

        </div>

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
        <input type="checkbox" class="checkbox" onclick="javascript:display2()">
        Custom room alarms
      </span> 
      <div id="alarmrooms">
        <table id="roomalarm">
          

        <?php       // _______PHP for automatic Room display in Alarm Subtab_______________
            $DB_SERVER = 'localhost';
             $DB_USERNAME = 'root';
             $DB_PASSWORD = '';
             $DB_DATABASE = 'autodhome';
             $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  
             $list_rooms = "SELECT Name_room 
                            FROM room 
                            WHERE id_home = 1"; 

          if ($result=mysqli_query($db,$list_rooms))
            {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
              // For each row in the query
              {
             
              $new = $row[0];
              echo '<tr>';
               echo '<td>'; echo $new; echo' </td>'; // Display Title of Room
             
                // Display whats repetitive

               echo '<td> <div class="off">OFF</div> </td>';
               echo '<td> <label class="switch">
                          <input type="checkbox">
                          <div class="slider round"></div>
                          </label> 
                   </td>';
             echo '<td><div class="on">ON</div></td>';
              echo "</tr>";
              }
            // Free result set
            mysqli_free_result($result);
          }

          mysqli_close($db);
        ?>


        </table>
        </div>
        </div>
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
        <input type="checkbox" class="checkbox" onclick="javascript:display2()">
        Custom room alarms
      </span> 
      <div id="alarmrooms">
        <table id="roomalarm">
          

        <?php       // _______PHP for automatic Room display in Alarm Subtab_______________
            $DB_SERVER = 'localhost';
             $DB_USERNAME = 'root';
             $DB_PASSWORD = '';
             $DB_DATABASE = 'autodhome';
             $db =  new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);  
             $list_rooms = "SELECT Name_room 
                            FROM room 
                            WHERE id_home = 1"; 

          if ($result=mysqli_query($db,$list_rooms))
            {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
              // For each row in the query
              {
             
              $new = $row[0];
              echo '<tr>';
               echo '<td>'; echo $new; echo' </td>'; // Display Title of Room
             
                // Display whats repetitive

               echo '<td> <div class="off">OFF</div> </td>';
               echo '<td> <label class="switch">
                          <input type="checkbox">
                          <div class="slider round"></div>
                          </label> 
                   </td>';
             echo '<td><div class="on">ON</div></td>';
              echo "</tr>";
              }
            // Free result set
            mysqli_free_result($result);
          }

          mysqli_close($db);
        ?>


        </table>
        </div>
        </div>
        </div>    
      </aside>

      <aside class="content">
        <div id ="Shutters" class="subtab">

        <div id="shuttersbox">
        <div>Shutters</div>
        <div class="hr"><hr /></div>
        <table id="houseshutters">
          <tr>
            <td>House Shutters
            </td>
            <td>
             <div id="closed">CLOSED</div>
            </td>
            <td>
              <label class="switch">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
            </td>
            <td>
              <div id="open">OPEN</div>
            </td>
          </tr>
        </table>
        <span>
          <input type="checkbox" id="checkbox" onclick="javascript:display3()">Custom house shutters
        </span> 
        <div id="shutterrooms">
          <table id="roomshutters">
            <tr>
              <td>Living Room
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Kitchen
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 1
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 2
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 3
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bedroom 4
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bathroom 1
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
              </td>
            </tr>
            <tr>
              <td>Bathroom 2
              </td>
              <td>
                <div class="closed">CLOSED</div>
              </td>
              <td>
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
              </td>
              <td>
                <div class="open">OPEN</div>
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
        <ul > <div class="subtablinks" > Change email </div> </ul>
        <ul > <div class="subtablinks"> Change password </div> </ul>
        <ul > <div class="subtablinks"> Email Notifications </div> </ul>
        <ul > <div class="subtablinks"> Customize your Dashboard </div> </ul>
            <ul > <?php 
            ob_start();
            require("loginpage.php");
            $number ;
            ob_end_clean();
         ;?> </ul>
      </div>

      <div class="Newsletter"> <label ><input type="checkbox" value="">Recieve DomISEP Newsletter </label></div>
      <div class="email_stuff"><!-- Part for email/password change  -->
        <span styple="padding: 20px"> 
              <input id="userinput" type="user" name="E-mail" placeholder="E-mail" required>
        </span>
         <button type="button">Send request</button> 
      </div>
    </div>




  </body>
</html>