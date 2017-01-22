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


      $list_rooms = "SELECT Name_room 
              FROM room 
              WHERE id_home =  1"; 

      $results = mysqli_query($db,$list_rooms);

      echo '<ul class="navbar2">';
      if ($result=mysqli_query($db,$list_rooms))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
          {

         	echo '<ul onclick="opensubtab( "'.$row[0].'")" class="subtablinks">';  
         	//echo '<input type="button" id= "'.$unconfirm_city['name'].'" value="Accept" class="mybut btn btn-info btn-mini" style="">';
          printf ($row[0]);
          echo "</ul>";  

          }
        // Free result set
        mysqli_free_result($result);
      }
      echo "</ul>";  

  
     

     $nb = 1;


     for($nb2 = 1; $nb2 < 9; $nb2++) { 

     	$list_sensors = "SELECT sensor_name 
              		FROM sensor 
              		WHERE id_room = $nb"; 
     	$results2 = mysqli_query($db,$list_sensors); 
     	// If function



     	if ($result=mysqli_query($db,$list_sensors))
        {
	        // Fetch one and one row
	        while ($row=mysqli_fetch_row($result))
	          {
	          ?>

	          <div class="subtab" id= "<?php echo $nb2;?>">   </div>

	         
     		<?php 
     			} 
	          }
	        // Free result set
	        mysqli_free_result($result);
        }
     




    ?>
    
   

	</div> 

  </body>
</html>