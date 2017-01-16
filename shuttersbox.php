<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Shutters</title>
  <link href="shuttersbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>

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
            <input type="checkbox">
            <div class="slider round"></div>
          </label>
        </td>
        <td>
          <div id="open">OPEN</div>
        </td>
      </tr>
    </table>
    <span>
      <input type="checkbox" id="checkbox" onclick="javascript:display3()"> Custom house shutters
    </span> 
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
        <span><input id="shutterreset" type="submit" value="Reset"></span>
        <span><input id="shutterapply" type="submit" value="Apply"></span>
      </div>
  </form>
</body>
</html>