<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Alarm</title>
  <link href="humiditybox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>


  <div id="humiditybox" class="dashboardbox">
        <div>Humidity</div>
       <div class="hr"><hr /></div>
        <table id="househumidity">
          <tr>
            <td>House Humidity</td>
            <td id="humidityvalue">20%<!--A replacer par valeur de la database--></td>
          </tr>
        </table>
        <div  id="humiditylink" onclick="opentab('Features'); opensubtab('Humidity'); checkhumiditybox(); display4()"> More details </div> 
  </div>

</body>
</html>