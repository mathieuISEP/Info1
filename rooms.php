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
            
            while ($row=mysqli_fetch_row($result))
	          {
	         	echo '<ul class ="subtablinks_rooms">';  
	          	printf ($row[0]);
	          	echo "</ul>";  
	          }
         }
         echo '</ul>';
            // Free result set
         mysqli_free_result($result);
     }
     echo '</div>';
     

      


     // Crere une liste de sub_sub_tabs avec les mêmes attribus que subtabs
     // lier a une fonction javascript , comme pour subtabs

     ?>
     <div class ="element">
      <tr>';
      <td>Temperature _ Test</td> 
      <td></td>
       <td></td>
          <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          <td class="C">°C</td>
          </tr>
     </div>
     <tr class ="element">';
                <td>Alarms</td>
                <td> <div class="off">OFF</div> </td>
                <td> <label class="switch">
                           <input type="checkbox">
                           <div class="slider round"></div>
                           </label> 
                    </td>
              <td><div class="on">ON</div></td>
     </tr>


     <div class ="element">

     
     <div class="room_element" id="info">
     </div>
<?php
    ?>
	</div> 
  </body>
</html>