<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Alarm</title>
  <link href="alarmbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>


  <form id="alarmbox" name="temperature" method="post" accept-charset="utf-8">
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
        <div>
        <input type="checkbox" id="alarmcheckbox" onclick="javascript:display2()"> Custom room alarms
      </div> 
      <div id="alarmrooms">
        <table id="roomalarm">
          

        <?php       // _______PHP for automatic Room display in Alarm Subtab_______________
            $DB_SERVER = 'localhost';
             $DB_USERNAME = 'root';
             $DB_PASSWORD = 'root';
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

      <div id="buttons">
        <span><input id="alarmreset" type="submit" value="Reset"></span>
        <span><input id="alarmapply" type="submit" value="Apply"></span>
      </div>
  </form>

</body>
</html>