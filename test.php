    <?php
      include("database.php");// Connect to databsa
      $list_rooms = "SELECT Name_room 
                    FROM room 
                    WHERE id_home = 1";
      mysqli_num_rows( $list_rooms)
      $result = mysql_query($list_rooms);
      while($row = mysql_fetch_array($result)) {
        echo $row['Name_room'];
        }
      

    ?>