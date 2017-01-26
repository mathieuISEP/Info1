<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Alarm</title>
  <link href="humiditybox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>


  <div id="humiditybox">
        <div>Humidity</div>
       <div class="hr"><hr /></div>
        <table id="househumidity">
          <tr>
            <td>House Humidity</td>
            <td id="humidityvalue">

            <?php 
              include ("database.php");
            $current = "SELECT current_data FROM sensor WHERE id = '3'";
              $current_result =  $db -> query($current);
              while ($row = $current_result->fetch_assoc()) {
              echo ''.$row['current_data']. ' %'."<br>";
              }
            ?>

            </td>
          </tr>
        </table>
        <div>
        <input type="checkbox" id="humiditycheckbox" onclick="javascript:display4()"> More details
      </div> 
      <div id="humidityrooms">
        <table id="roomhumidity">
          

        <?php       // _______PHP for automatic Room display in Humidity Subtab_______________
              
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

              }
            // Free result set
            mysqli_free_result($result);
          }

          mysqli_close($db);
        ?>


        </table>
      </div>
  </div>

</body>
</html>