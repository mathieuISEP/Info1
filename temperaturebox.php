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
    $post_temp = $_POST['temperature'];
    $sql = "UPDATE sensors SET current_data='".$temp1."' WHERE id='3';";
    $result = $db -> query($sql);
    echo $result;








?>
<div class="content">

  <form name="temperature" method="get" accept-charset="utf-8">
  <div id="temperaturebox">
      
      <div id="boxheader">Temperatures</div>
      
      <div class="hr"><hr /></div>
    
    <table>
      <tr>
        <td><div id="housetemp">House Temperature</div></td>
        <td><input name = "post_temperature" id="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>
    </table>

    <div>
      <span><input type="checkbox" class="checkbox" name="checkbox" onclick="javascript:displayifchecked()"></span>Custom room temperatures
  </div> 
    
    <div class="rooms">

    <table>

      <tr>
        <td>Living Room</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Kitchen</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bedroom 1</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bedroom 2</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bedroom 3</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bedroom 4</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bathroom 1</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="C">°C</td>
      </tr>

      <tr>
        <td>Bathroom 2</td>
        <td><input class="stepper" type="number" min="0" max= "30" step="0.5" pattern="[0-9]*"></td>
        <td class="°C">°C</td>
      </tr>

    </table>
    </div>

      <div id="buttons">
        <span><input id="reset" type="submit" value="Reset"></span>
        <span><input id="apply" type="submit" value="Apply"></span>
      </div>

  </div>
  </form>
</div>
</body>
</html>