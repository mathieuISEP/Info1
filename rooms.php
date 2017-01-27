<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AutoDhome</title>
        <link href="topbar.css" type="text/css" rel="stylesheet">
        <link href="menu.css" type="text/css" rel="stylesheet">
        <link href="rooms.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript" src="checkbox.js"></script>

  </head>
  <body>
    <div id="Rooms" > <!-- ____________________________________________ -->
     <?php

     include ("database.php");

     $id = 1;
      $list_rooms = "SELECT Name_room FROM room WHERE id_home = '".$_SESSION["userid"]."';";

      $results = mysqli_query($db,$list_rooms);

      echo '<ul class="navbar2">'; // Start navigation bar
      if ($result=mysqli_query($db,$list_rooms))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
          {
          echo '<ul class="subtablinks" onclick=  "opensubtab('.$id.')" >';  
          printf ($row[0]);
          echo "</ul>";  
          $id = $id + 1;;
          }
        // Free result set
        mysqli_free_result($result);
      }
      echo "</ul>";  //End naviagtion bar







      echo '<div class="room_element">';
  	 
     for($nb2 = 1; $nb2 < 9; $nb2++) { 

        $list_sensors = "SELECT sensor_name 
                    FROM sensor 
                    WHERE id_room = $nb2"; 
        $results2 = mysqli_query($db,$list_sensors); 

        echo '<ul id="'.$nb2.'" class ="subtab">';
        // If function
        if ($result=mysqli_query($db,$list_sensors))
        {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
	          {
	         	echo '<ul class ="subtablinks_rooms" onclick="opensubsubtab('.$nb2.'+9)" >';  
	          	printf ($row[0]);
	          	echo "</ul>";  
	          }
         }
         echo '</ul>';
            // Free result set
         mysqli_free_result($result);
     }
     echo '</div>';
     
      // include "database.php";
      // $type_sensor = "SELECT type_sensor 
      //               FROM sensor 
      //               WHERE id_room = $nb2"; 
      // $result_type = mysqli_query($db,$type_sensor);
      // $row_type = mysqli_fetch_assoc($result_type);
      // if ($row_type["type_sensor"] == 'temperature_sensor'){
      //   include 'temperaturebox.php';
      // }
      // else if ($row_type["type_sensor"] == 'Shutters'){
      //   include 'shutters.php';
      // }
      // else if ($row_type["type_sensor"] == 'Humidity'){
      //   include 'humiditybox.php';
      // }
      // else if ($row_type["type_sensor"] == 'Alarm'){
      //   include 'alarmbox.php';
      // }
      // else if ($row_type["type_sensor"] == 'Luminosity'){
      //   include 'alarmbox.php';
      // }
     
     echo '<div >';
     echo '<ul class ="subsubtab" id="12">';
          echo '<tr>';
          echo '<td>';  print "Temperature Bedroom 1  "; echo '</td>';  
          echo '<td>'; '</td>';
          echo '<td>'; '</td>';
          echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          echo '<td class="C">°C</td>';
          echo '</tr>';
     echo '</ul>';

     echo '<ul class ="subsubtab" id="13">';
          echo '<tr>';
          echo '<td>';  print "Temperature  Bedroom 2 "; echo '</td>';  
          echo '<td>'; '</td>';
          echo '<td>'; '</td>';
          echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          echo '<td class="C">°C</td>';
          echo '</tr>';
     echo '</ul>';


     echo '<ul class ="subsubtab" id="14">';
          echo '<tr>';
          echo '<td>';  print "Temperature Bedroom 3  "; echo '</td>';  
          echo '<td>'; '</td>';
          echo '<td>'; '</td>';
          echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          echo '<td class="C">°C</td>';
          echo '</tr>';
     echo '</ul>';
     //
     echo '<ul class ="subsubtab" id="15">';
          echo '<tr>';
          echo '<td>';  print "Temperature Bedroom 4  "; echo '</td>';  
          echo '<td>'; '</td>';
          echo '<td>'; '</td>';
          echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          echo '<td class="C">°C</td>';
          echo '</tr>';
     echo '</ul>';
     echo '</div>';

     //  echo '<tr class ="element">';
     //           echo '<td>'; print 'Alarms'; echo' </td>'; 
     //           echo '<td> <div class="off">OFF</div> </td>';
     //           echo '<td> <label class="switch">
     //                      <input type="checkbox">
     //                      <div class="slider round"></div>
     //                      </label> 
     //               </td>';
     //         echo '<td><div class="on">ON</div></td>';
     // echo "</tr>";


     // echo '<div class ="element">';

     
     // echo '<div class="room_element" id="info">';
     // echo '</div>';

    ?>
	</div> 
  </body>
</html>