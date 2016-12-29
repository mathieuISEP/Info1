<!DOCTYPE html>
<html>
<body>

<?php

   $DB_SERVER = 'localhost';
   $DB_USERNAME = 'root';
   $DB_PASSWORD = '';
   $DB_DATABASE = 'autodhome';
  
  	$db =  mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
  	echo 'Test:	';

  	$list_rooms = "SELECT Name_room 
					FROM room 
					WHERE id_home = 1";	



	$results = mysqli_query($db,$list_rooms);
	$r =mysqli_num_rows($results);
	echo $r;



	if ($result=mysqli_query($db,$list_rooms))
	  {
	  // Fetch one and one row
	  while ($row=mysqli_fetch_row($result))
	    {
	    echo "<pre>";
	    printf ($row[0]);
	    echo "</pre>";
	    }
	  // Free result set
	  mysqli_free_result($result);
	}

	mysqli_close($db);




	// while($row = mysql_fetch_assoc($results)){
 //    foreach($row as $cname => $cvalue){
 //        print "$cname: $cvalue\t";
 //    }
 //    print "\r\n";
	// }

// 	$result = $db->query($list_rooms);


// 	if ($result->num_rows > 0) {
//      //output data of each row
//      while($row = $result->fetch_assoc()) {
//         echo $row;
// 	     }
// 	} else {
// 	     echo "0 results";
// 	}




// $db->close();

?>

</body>
</html>