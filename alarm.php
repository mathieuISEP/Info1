<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Alarm</title>
  <link href="alarmbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>

        <?php

             include 'database.php';

            $sql1 = "SELECT on_off FROM sensor WHERE id='11'";
            $result1 = $db -> query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $status = $row1['on_off'];

            if(isset($_POST['alarmcheckbox'])){
              $status = $_POST['alarmstatus'];
            $sql2 = "UPDATE sensor SET on_off = $status WHERE id='11'";
            $result2 = $db -> query($sql2);
            $row2 = mysqli_fetch_assoc($result2);
          }
          else{
            ?>

  <form id="alarmbox" class="dashboardbox"  name="temperature" method="post" accept-charset="utf-8">
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
                <input type="checkbox" id="alarmstatus" name="alarmstatus" onclick="on_off()"<?php if ($status == 1) echo 'checked'; ?>>
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
        <input id="alarmapply" type="submit" value="Apply">
      </div>
  </form>
  <?php 
}
?>

</body>
</html>