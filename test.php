<!DOCTYPE html>
<html>
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
                <span><input type="checkbox" id="checkbox" name="checkbox" onclick="javascript:displayifchecked()"></span>Custom room temperatures
              </div> 
            
              <div id="rooms">
                <table>

                <?php

                include ("login.php");

				   $DB_SERVER = 'localhost';
				   $DB_USERNAME = 'root';
				   $DB_PASSWORD = '';
				   $DB_DATABASE = 'autodhome';
				  
				  	$db =  mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);


				  	$list_rooms = "SELECT Name_room 
									FROM room 
									WHERE id_home = $number";	

					if ($result=mysqli_query($db,$list_rooms))
					  {
					  // Fetch one and one row
					  while ($row=mysqli_fetch_row($result))
					  	// For each row in the query
					    {
					   
					    $new = $row[0];
					    echo '<tr>'; echo '<td>'; echo $new; echo' </td>'; // Display Title of room
					   
					   // Display someting
					    echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[ 0-9]*"></td>';
					     echo '<td class="C">°C</td>';
                  	
					    echo "</tr>";
					    }
					  // Free result set
					  mysqli_free_result($result);
					}

					mysqli_close($db);

				?>

                </table>
              </div>


              <div id="buttons">
                <span><input id="reset" type="submit" value="Reset"></span>
                <span><input id="apply" type="submit" value="Apply"></span>
              </div>
                  
          </div>

</body>
</html>