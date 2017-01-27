<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
  		<title>Manage House</title>
    	<link href="managehouse.css" type="text/css" rel="stylesheet">
    	<script type="text/javascript" src="managehouse.js"></script>
	</head>
<body>
<div id="managehouse">
	Manage Your House
	<div class="hr"><hr /></div>

	<div id="managesensors">
		<div class="titlemanagehouse">Manage Sensors</div>
		<div class="hr"><hr /></div>
		<div id="titleaddsensor">Add a Sensor</div>

	    <?php
	     
	      if (isset ($_POST['sensor_name'])  && isset($_POST['sensor_type'])){
	            include 'database.php';
	            $myNewSensor = $_POST["sensor_name"];
	            $mySensorType = $_POST["sensor_type"];
	            $myRoomType = $_POST["room_name"];

	            $sql14 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
	            $result14 = $db -> query($sql14);
	            $row14 = mysqli_fetch_assoc($result14);

	            $sql15 = "SELECT * FROM sensor WHERE id_room = '".$row14["id"]."';";
	            $result15 = $db -> query($sql15);
	            $row15 = mysqli_fetch_assoc($result15);
	            $sql ="INSERT INTO sensor(id_room,type_sensor,sensor_name) VALUES ('".$row15["id_room"]."','".$mySensorType."','".$myNewSensor."')";
	            //echo 'Vous venez dajouter un sensor de '.$sensor_type.'!';           
	            mysqli_query($db,$sql);
	            mysqli_close($db);
	            echo "<meta http-equiv='refresh' content='0'>";
	            


	    }
    	else{

     	?>
		<form id="addsensor" name="addsensor" method="post" accept-charset="utf-8">
			<table cellspacing="15">
				<tr><td>Sensor Name</td><td><input name ="sensor_name" placeholder ="Type sensor name" id="sensorinput" type="text" form="addsensor" required></td></tr>
				<tr><td> Sensor Type </td>
				<td><select name = "sensor_type" required form="addsensor">
					<option value = "Default" placeholder ="Choose a sensor" ></option>
					<option>temperature</option>
					<option>alarm</option>
					<option>shutter</option>
					<option>humidity</option>
					<option>door</option>
					<option>light</option>
				</select></td></tr>


				<tr><td>Room Name</td>
				<?php
	            include 'database.php';
	            $sql3 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
	            $result3 = $db -> query($sql3);
	            


	         	?>

				<td><select name ="room_name" required form="addsensor">

				<?php 

					while ($row3 = mysqli_fetch_array($result3))
					{
					    echo '<option value = "'.$row3['Name_room'].'">'.$row3['Name_room'].'</option>';

					}
				?>  
				</select></td></tr>		
					
			</table>
			<button type="submit" class="managehousebutton">Add</button>
		</form>

		<?php
             }
       ?>
		<div class="hr"><hr /></div>

		<div id="titleeditsensors">Edit Sensors</div>
		<?php
	           
	           if (isset ($_POST['rename_sensor'])){
			            
			            $myEditSensorName = $_POST["rename_sensor"];
			            $mySensorToEdit = $_POST["select_sensor"];
			            $sqlEdit = "UPDATE sensor SET sensor_name = '$myEditSensorName' WHERE sensor_name = '".$mySensorToEdit."';";
			            mysqli_query($db,$sqlEdit);
			            mysqli_close($db);
			            echo "<meta http-equiv='refresh' content='0'>";

				    }
				    else{


	            


	         	?>


			<form id="editsensors" name="editsensors" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Select Room</td>
				<td><select form="editsensors" name = "select_room">
				<?php 
					include 'database.php';
		            $sql5 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
		            $result5 = $db -> query($sql5);


					while ($row5 = mysqli_fetch_array($result5))
					{
					    echo '<option value = "'.$row5['Name_room'].'">'.$row5['Name_room'].'</option>';

					}
				?>  
				</select></td></tr>

				<tr><td>Select Sensor</td>
				<?php
	            include 'database.php';
	            $sql7 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
	            $result7 = $db -> query($sql7);
	            $row7 = mysqli_fetch_assoc($result7);
	            $sql8 = "SELECT * FROM sensor WHERE id_room = '".$row7["id"]."';";
	            $result8 = $db -> query($sql8);
	            $row8 = mysqli_fetch_assoc($result8);
	         	?>

				<td><select required form="editsensors" name = "select_sensor">
					<?php 

					while ($row8 = mysqli_fetch_array($result8))
					{
					    echo '<option value = "'.$row8['sensor_name'].'">'.$row8['sensor_name'].'</option>';

					}
				?>  
				</select></td></tr>
				<tr><td>New Sensor Name</td><td><input type="text" name="rename_sensor" form="editsensors" required></td></tr>
				</table>
				<button class="managehousebutton" form="editsensors">Rename</button>
			</form>

			<?php
             }
       ?>

			<div class="hr"><hr /></div>



			<div id="titledeletesensors">Delete Sensors</div>

			<form id="deletesensors" name="deletesensors" method= "post">
				<table cellspacing="15">
						<?php
			            include 'database.php';
			            $sql11 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
			            $result11 = $db -> query($sql11);
			            


			         	?>
					<tr><td>Select Room</td>
					<td><select form="deletesensors" name = "delete_sensor">
					<?php 

					while ($row11 = mysqli_fetch_array($result11))
					{
					    echo '<option value = "'.$row11['Name_room'].'">'.$row11['Name_room'].'</option>';

					}
				?>
					</select></td></tr>


					<?php
    

			      if (isset ($_POST['delete_sensor'])){
			            include 'database.php';
			            $myDeleteSensor = $_POST["delete_sensor"];
			            $sqlDS = "DELETE FROM sensor WHERE sensor_name = '".$myDeleteSensor."';";
			            mysqli_query($db,$sqlDS);
			            mysqli_close($db);
			            echo "<meta http-equiv='refresh' content='0'>";

				    }
				    else{

				     ?>
					<tr><td>Select Sensor</td>
								<?php
				            include 'database.php';
				            $sql12 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
				            $result12 = $db -> query($sql12);
				            $row12 = mysqli_fetch_assoc($result12);
				            $sql13 = "SELECT * FROM sensor WHERE id_room = '".$row12["id"]."';";
				            $result13 = $db -> query($sql13);
				            
				         	?>
					<td><select name = "delete_sensor" required form="deletesensors">
						<?php 

					while ($row13 = mysqli_fetch_array($result13))
					{
					    echo '<option value = "'.$row13['sensor_name'].'">'.$row13['sensor_name'].'</option>';

					}
				?>  
					</select></td></tr></table>
				<button class="managehousebutton" type = "submit" form="deletesensors">Delete</button>
			</form>
	</div>

	<?php
             }
       ?>

	<div id="managerooms">
		<div class="titlemanagehouse">Manage Rooms</div>
		<div class="hr"><hr /></div>	
		<div id="titleaddroom">Add a Room</div>
		<?php
     
      if (isset ($_POST['add_room_name'])  && isset($_POST['select_room_type'])){
            include 'database.php';
            $myAddRoomName = $_POST['add_room_name'];
            $mySelectRoomType = $_POST['select_room_type'];
            $sql2 ="INSERT INTO room(Name_room,id_home,type_room) VALUES ('".$myAddRoomName."',1,'".$mySelectRoomType."')";
            echo 'Vous venez dajouter la pièce '.$myAddRoomName.'de type'.$mySelectRoomType. '!';           
            mysqli_query($db,$sql2);
            mysqli_close($db);
            //echo "<meta http-equiv='refresh' content='0'>";
            


	    }
	    else{

	     ?>

		<form id="addroom" name="addroom" method="post" accept-charset="utf-8">
		<table cellspacing="15">
		<tr><td>Room Name</td><td><input name = "add_room_name" id="roominput" type="text" form="addroom" required></td></tr>
		<tr><td>Room type</td>
				<td><select name= "select_room_type" required form="addroom">
				<option></option>
				<option value = "1">Kitchen</option>
				<option value = "2">Living room</option>
				<option value = "3">Bedroom</option>
				<option value = "4">Bathroom</option>
				<option value = "5">Garage</option></select></td></tr>
		</table>
		<button class="managehousebutton" form="addroom">Add</button>
		</form>

		
		<div id="titleeditrooms">Edit Rooms</div>

					<?php
			             }
			       ?>

       <div class="hr"><hr /></div>

			<?php 
			if (isset ($_POST["edit_room_name"]) && isset ($_POST["room_to_edit"])){
				include 'database.php';
				$myEditRoomName = $_POST["edit_room_name"];
				$myRoomToEdit = $_POST["room_to_edit"];
				$editRoomQuery = "UPDATE room SET Name_room = '$myEditRoomName' WHERE Name_room = '".$myRoomToEdit."';";
			    mysqli_query($db,$editRoomQuery);
			    mysqli_close($db); 
			    echo "<meta http-equiv='refresh' content='0'>";
				}
					else {


			?>
			<form id="editrooms" name="editrooms" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Select Room</td>
				<?php
	            include 'database.php';
	            $sql9 = "SELECT * FROM room WHERE id_home = '".$_SESSION["userid"]."';";
	            $result9 = $db -> query($sql9);
	            
	            ?>
				<td><select name="room_to_edit" form="editrooms" required>
				<?php 

					while ($row9 = mysqli_fetch_array($result9))
					{
					    echo '<option value = "'.$row9['Name_room'].'">'.$row9['Name_room'].'</option>';

					}
				?>  
				</select></td></tr>
				<tr><td>New Room Name</td><td><input type="text" name="edit_room_name" form="editrooms" required></td></tr>
				</table>
				<button class="managehousebutton" type="submit" form="editrooms">Rename</button>
			</form>

				<?php
             }
       ?>


			<div class="hr"><hr /></div>


			<?php
     

			      if (isset ($_POST['delete'])){
			            include 'database.php';
			            $myDeleteRoom = $_POST["delete"];
			            $sqlD = "DELETE FROM room WHERE Name_room = '".$myDeleteRoom."';";
			            mysqli_query($db,$sqlD);
			            mysqli_close($db);
			            echo "<meta http-equiv='refresh' content='0'>";

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

</div>
</body>
</html>