			<?php
    

			      if (isset ($_POST['delete'])){
			            include 'database.php';
			            $myDeleteRoom = $_POST["delete"];
			            echo $myDeleteRoom;
			            $sqlD = "DELETE FROM room WHERE Name_room = '".$myDeleteRoom."';";
			            mysqli_query($db,$sqlD);
			            mysqli_close($db);
			            //echo "<meta http-equiv='refresh' content='0'>";

				    }
				    else{

				     ?>

				<div id="titledeleterooms">Delete Room</div>

				<form id="deleterooms" name="deleterooms" method ="post">
					<table cellspacing="15">
					<tr><td>Select Room</td>
					<?php
		            include 'database.php';
		            $sql10 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
		            $result10 = $db -> query($sql10);
		            
		            ?>
					<td><select form="deleterooms" name="delete"  required form = "deleterooms">
					<?php 

					while ($row10 = mysqli_fetch_array($result10))
					{
					    echo '<option value = "'.$row10['Name_room'].'">'.$row10['Name_room'].'</option>';

					}
				?>  
					</select></td></tr>
					</table>
				<button class="managehousebutton" type = "submit" form="deleterooms">Delete</button>
			</form>
	</div>
	<?php
             }
       ?>