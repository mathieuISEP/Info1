<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title>Temperature</title>
        <link href="temperaturebox.css" type="text/css" rel="stylesheet">
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
      
    
    $sql = "UPDATE sensor SET target_data = $post_temp WHERE id='1'";
    $result = $db -> query($sql);
   
 ?>




  <form id="temperaturebox" class="dashboardbox" name="temperature" method="post" accept-charset="utf-8">
      
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

    <div id="templink" onclick="opentab('Features'); opensubtab('Temperature'); checktempbox(); display1()"> Custom room temperature </div>

      <div id="buttons">
        <input id="tempapply" type="submit" value="Apply">
      </div>
  </form>
</body>
</html>