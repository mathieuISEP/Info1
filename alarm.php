<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Alarm</title>
  <link href="alarmbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>


  <form id="alarmbox" class="dashboardbox" name="temperature" method="post" accept-charset="utf-8">
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
        <div id="alarmlink" onclick="opentab('Features'); opensubtab('Alarm'); checkalarmbox(); display2()"> Custom room alarms </div>
      <div id="buttons">
        <span><input id="alarmreset" type="submit" value="Reset"></span>
        <span><input id="alarmapply" type="submit" value="Apply"></span>
      </div>
  </form>

</body>
</html>