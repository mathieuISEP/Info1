<!--<?php

       include 'database.php';

      $sql = "SELECT on_off FROM sensor WHERE id='2'";
      $checked = $db -> query($sql);

      if(isset($_POST['alarmcheckbox'])){
        $status = 1;
      }
      else{
        $status = 0;
      }
      $sql = "UPDATE sensor SET on_off = $status WHERE id='2'";
      $result = $db -> query($sql);

      ?>-->


      <input id="alarmcheckbox" type="checkbox" name="checkbox"  <?php /*if ($checked == 1) echo 'checked';*/ ?> />