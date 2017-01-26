<?php

       include 'database.php';

      $sql1 = "SELECT on_off FROM sensor WHERE id='2'";
      $result1 = $db -> query($sql1);
      $row1 = mysqli_fetch_assoc($result1);

      if(isset($_POST['alarmcheckbox'])){
        $status = 1;
      }
      else{
        $status = 0;
      }
      $sql2 = "UPDATE sensor SET on_off = $status WHERE id='2'";
      $result2 = $db -> query($sql2);
      $row2 = mysqli_fetch_assoc($result2);

      ?>-->


      <input id="alarmcheckbox" type="checkbox" name="checkbox"  <?php if ($row1['on_off'] == 1) echo 'checked'; ?> />