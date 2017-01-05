<?php

include 'database.php';   

$temp1= mysqli_escape_String($db,$_POST[]);

$query = "UPDATE sensors SET current_data='".$temp1."' WHERE id='2';";

mysqli_query($db,$query);

mysqli_close($db);

?>