<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Shutters</title>
  <link href="shuttersbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>

<?php

             include 'database.php';

            $sql1 = "SELECT on_off FROM sensor WHERE id='5'";
            $result1 = $db -> query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $status = $row1['on_off'];

            if(isset($_POST['shuttercheckbox'])){
              $status = $_POST['shutterstatus'];
            $sql2 = "UPDATE sensor SET on_off = $status WHERE id='5'";
            $result2 = $db -> query($sql2);
            $row2 = mysqli_fetch_assoc($result2);
          }
          else{
            ?>


<form id="shuttersbox" name="temperature" method="post" accept-charset="utf-8">
    <div>Shutters</div>
    <div class="hr"><hr /></div>
    <table id="houseshutters">
      <tr>
        <td>House Shutters
        </td>
        <td>
         <div id="closed">CLOSED</div>
        </td>
        <td>
          <label class="switch">
            <input type="checkbox" id="shutterstatus" name="shutterstatus" onclick="open_closed()"<?php if ($status == 1) echo 'checked'; ?>>
            <div class="slider round"></div>
          </label>
        </td>
        <td>
          <div id="open">OPEN</div>
        </td>
      </tr>
    </table>
    <div>
      <input type="checkbox" id="shuttercheckbox" onclick="javascript:display3()"> Custom house shutters
    </div> 
    <div id="shutterrooms">
      <table id="roomshutters">

        <!-- ____________________________________________ -->
        <?php
        include 'database.php';
        $list_rooms = "SELECT Name_room 
                FROM room 
                WHERE id_home = 1"; 
        $results = mysqli_query($db,$list_rooms);
        
        if ($result=mysqli_query($db,$list_rooms))
          {
          // Fetch one and one row 
          while ($row=mysqli_fetch_row($result))
            {
            echo '<tr>';
            echo '<td>';  printf ($row[0]); echo '</td>';
            echo '<td>';echo '<div class="closed">CLOSED</div>'; echo '</td>';
            echo '<td>
                    <label class="switch">
                      <input type="checkbox">
                      <div class="slider round"></div>
                    </label>
                  </td>';
            echo '<td><div class="open">OPEN</div></td>';
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
        <input id="shutterapply" type="submit" value="Apply">
      </div>
  </form>
  <?php
}
?>
</body>
</html>