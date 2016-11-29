<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page HTML de test</title>
    </head>
    <body>
   <?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	echo'salut';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
    </body>
</html>

