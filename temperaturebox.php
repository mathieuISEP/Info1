<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title>Temperature</title>
        <link href="temperaturebox.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="checkbox.js"></script>


   

  </head>
<body>

     <?php

    include 'database.php';

      if (isset($_POST['post_temperature'])) {
      $post_temp = $_POST['post_temperature'];
      }
      else{
      $post_temp = 20;
      }
      
    
    $sql = "UPDATE sensor SET target_data = $post_temp WHERE id=1";
    $result = $db -> query($sql);
   
 ?>




  <form id="temperaturebox" name="temperature" method="post" accept-charset="utf-8">
      
      <div id="boxheader">Temperatures</div>
      
      <div class="hr"><hr /></div>
    
    <table cellpadding="5">
    <tr><td></td><td>Current</td><td>Target</td><td>Set</td><td></td>
    </tr>
      <tr>
        <td><div id="housetemp">House</div></td>
        <td class="current" id="current"> 

              <?php $current = "SELECT current_data FROM sensor WHERE id = '1'";
              $current_result =  $db -> query($current);
              while ($row = $current_result->fetch_assoc()) {
              echo ''.$row['current_data']. ' °C'."<br>";
              }
            ?> 
            </td>
            <td class="target" id="target"><?php echo ''. $post_temp. ' °C';?> </td>
        <td><input value = "<?php $post_temp ?>" name = "post_temperature" placeholder="SET T°" id="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
      </tr>


 
    </table>

    <div id="Custom">
    <input type="checkbox" id="tempcheckbox" name="checkbox" onclick="display1()"> Custom room temperatures
  </div> 
    
    <div id="temprooms">

    <table cellpadding="5">
    <tr><td></td><td>Current</td><td>Target</td><td>Set</td><td></td></tr>
      <!-- ____________________________________________ -->
      <?php
      $list_rooms = "SELECT Name_room 
              FROM room 
              WHERE id_home = '".$_SESSION["userid"]."';"; // was1



      $results = mysqli_query($db,$list_rooms);
      if ($result=mysqli_query($db,$list_rooms))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
          {
          echo '<tr>';
          echo '<td>';  printf ($row[0]); echo '</td>';  
          echo '<td>'; '</td>';
          echo '<td>'; '</td>';
          echo '<td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>';
          echo '<td class="C">°C</td>';
          echo '</tr>';
          }
        // Free result set
        mysqli_free_result($result);
      }
      mysqli_close($db);
      ?>
      <!-- ____________________________________________ -->



    </table>
    </div>

      <div id="buttons">
        <span><input id="tempapply" type="submit" value="Apply"></span>
      </div>
  </form>
</body>
</html>