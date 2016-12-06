<?php
   $DB_SERVER = 'localhost';
   $DB_USERNAME = 'root';
   $DB_PASSWORD = null;
   $DB_DATABASE = 'autodhome';
   try{
  $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
  echo 'salut';
}
 catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";


}
?>
