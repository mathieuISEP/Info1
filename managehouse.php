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

		<form id="addsensor" name="addsensor" method="post" accept-charset="utf-8">
			<table cellspacing="15">
				<tr><td>Sensor Name</td><td><input id="sensorinput" type="text" required></td></tr>
				<tr><td> Sensor Type </td>
				<td><select required form="addsensor">
					<option></option>
					<option>temperature</option>
					<option>alarm</option>
					<option>shutter</option>
					<option>humidity</option>
					<opiion>camera</opiion>
					<option>door</option>
					<option>light</option>
				</select></td></tr>
				<tr><td>Room</td>
				<td><select required form="addsensor">
				<option></option>
				<option>living room</option>
				<option>bedroom</option>
				<option>etc...</option>
				</select></td></tr>
			</table>
			<button class="managehousebutton">Add</button>
		</form>
		
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
					<opiion>camera</opiion>
					<option>door</option>
					<option>light</option>
				</select></td></tr>
				</table>
				<button class="managehousebutton">Edit Name</button>
				<button class="managehousebutton">Delete</button>
			</form>
			<form id="sensorname" name="sensorname">
				<table cellspacing="15">
				<tr><td>New Sensor Name</td><td><input type="text" form="sensorname" required></td></tr>
				</table>
				<button class="managehousebutton">Save</button>
			</form>
		</div>

	<div id="managerooms">
		<div class="titlemanagehouse">Manage Rooms</div>
		<div class="hr"><hr /></div>	
		<div id="titleaddroom">Add a Room</div>

		<form id="addroom" method="post" accept-charset="utf-8">
		<table cellspacing="15">
		<tr><td>Room Name</td><td><input id="roominput" type="text" required></td></tr>
		</table>
		<button class="managehousebutton">Add</button>
		</form>

		<div id="titleeditrooms">Edit Rooms</div>

			<form id="editrooms" name="editrooms" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Select Room</td>
				<td><select form="editrooms">
				<option></option>
				<option>living room</option>
				<option>bedroom</option>
				<option>etc...</option>
				</select></td></tr>
				</table>
				<button class="managehousebutton">Edit Name</button>
				<button class="managehousebutton">Delete</button>
			</form>

			<form id="roomname" name="roomname" method="post" accept-charset="uft-8">
				<table cellspacing="15">
				<tr><td>Room Name</td><td><input type="text" form="roomname" required></td></tr>
				</table>
				<button class="managehousebutton">Save</button>
			</form>

		</div>
	</div>

</div>
</body>
</html>