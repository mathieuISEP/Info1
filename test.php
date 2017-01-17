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





    <div id="Rooms" class="tabcontent"> <!-- ____________________________________________ -->
      <?php

      include ("database.php");

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
          echo '<ul class="subtablinks" onclick="opensubtab(';echo $row[0]; echo')">'; 

          printf ($row[0]);
          echo "</ul>";  

          }
        // Free result set
        mysqli_free_result($result);
      }
      echo "</ul>";  




      // ____________________________________________ //
      $nb = 1;
      while ( $nb < 8) {      
          $list_sensors = "SELECT sensor_name 
              				FROM sensor 
              				WHERE id_room = $nb"; 
          $results2 = mysqli_query($db,$list_sensors);
          $nb = $nb + 1;

          // cerate list of sensor to display
          // to link to Room list previously created

          echo '<div id ="'; echo $nb; echo'" class="subtab">';
          echo '</div>';
          
      }
	  // ____________________________________________ //





      mysqli_close($db);




    ?>
    
    </div>



  </body>
</html>