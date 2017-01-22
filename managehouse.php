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
	            $myRoomType = $_POST["room_type"];
	            $sql ="INSERT INTO sensor(id_room,type_sensor,sensor_name) VALUES ('".$myRoomType."','".$mySensorType."','".$myNewSensor."')";
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
					<option value = "Default">Choose sensor</option>
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
	            $row3 = mysqli_fetch_assoc($result3);
	            //$sql4 = "SELECT * FROM sensor WHERE id_room = '".$row3["id"]."';";
	            //$result4 = $db -> query($sql4);
	            //$row4 = mysqli_fetch_assoc($result4);


	         	?>

				<td><select name ="room_type" required form="addsensor">
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
		
		<div id="titleeditsensors">Edit Sensors</div>

			<form id="editsensors" name="editsensors" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Select Room</td>
				<td><select form="editsensors">
				<option></option>
				<option>living room</option>
				<option>bedroom</option>
				<option>etc...</option>
				</select></td></tr>
				<tr><td>Select Sensor</td>
				<td><select required form="editsensors">
					<option></option>
					<option>temperature</option>
					<option>alarm</option>
					<option>shutter</option>
					<option>humidity</option>
					<option>door</option>
					<option>light</option>
				</select></td></tr>
				<tr><td>New Sensor Name</td><td><input type="text" name="renamesensor" form="editsensors" required></td></tr>
				</table>
				<button class="managehousebutton" form="editsensors">Rename</button>
			</form>

			<div id="titledeletesensors">Delete Sensors</div>

			<form id="deletesensors" name="deletesensors">
				<table cellspacing="15">
					<tr><td>Select Room</td>
					<td><select form="deletesensors">
					<option></option>
					<option>living room</option>
					<option>bedroom</option>
					<option>etc...</option>
					</select></td></tr>
					<tr><td>Select Sensor</td>
					<td><select required form="deletesensors">
						<option></option>
						<option>temperature</option>
						<option>alarm</option>
						<option>shutter</option>
						<option>humidity</option>
						<option>door</option>
						<option>light</option>
					</select></td></tr></table>
				<button class="managehousebutton" form="deletesensors">Delete</button>
			</form>
	</div>

	<div id="managerooms">
		<div class="titlemanagehouse">Manage Rooms</div>
		<div class="hr"><hr /></div>	
		<div id="titleaddroom">Add a Room</div>
		<?php
     
      if (isset ($_POST['add_room_name'])  && isset($_POST['select_room_type'])){
            include 'database.php';
            $myAddRoomName = $_POST["add_room_name"];
            $mySelectRoomType = $_POST["select_room_type"];
            $sql2 ="INSERT INTO room(Name_room,type_room) VALUES ('".$myAddRoomName."','".$mySelectRoomType."')";
            echo 'Vous venez dajouter la pièce '.$myAddRoomName.'de type'.$mySelectRoomType. '!';           
            mysqli_query($db,$sql2);
            mysqli_close($db);
            echo "<meta http-equiv='refresh' content='0'>";
            


	    }
	    else{

	     ?>

		<form id="addroom" name="addroom" method="post" accept-charset="utf-8">
		<table cellspacing="15">
		<tr><td>Room Name</td><td><input name = "add_room_name" id="roominput" type="text" form="addroom" required></td></tr>
		<tr><td>Room type</td>
				<td><select name= "select_room_type" required form="addroom">
				<option></option>
				<option value = "1">kitchen</option>
				<option value = "2">living room</option>
				<option value = "3">bedroom</option>
				<option value = "4">bathroom</option></select></td></tr>
		</table>
		<button class="managehousebutton" form="addroom">Add</button>
		</form>

		<?php
             }
       ?>

		<div id="titleeditrooms">Edit Rooms</div>
			<form id="editrooms" name="editrooms" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Select Room</td>
				<td><select form="editrooms" required>
				<option></option>
				<option>living room</option>
				<option>bedroom</option>
				<option>etc...</option>
				</select></td></tr>
				<tr><td>New Room Name</td><td><input type="text" name="renameroom" form="editrooms" required></td></tr>
				</table>
				<button class="managehousebutton" form="editrooms">Rename</button>
			</form>

			<div id="titledeleterooms">Delete Rooms</div>

			<form id="deleterooms" name="deleterooms">
				<table cellspacing="15">
					<tr><td>Select Room</td>
					<td><select form="deleterooms" required>
					<option></option>
					<option>living room</option>
					<option>bedroom</option>
					<option>etc...</option>
					</select></td></tr>
					</table>
				<button class="managehousebutton" form="deleterooms">Delete</button>
			</form>
	</div>

</div>
</body>
</html>