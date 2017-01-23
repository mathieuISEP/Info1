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
	         	echo '<ul>';  
	          	printf ($row[0]);
	          	echo "</ul>";  
	          }
         }
         echo '</ul>';
            // Free result set
         mysqli_free_result($result);
     }

     



    ?>
	</div> 
  </body>
</html>