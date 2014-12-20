<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 
 <?php

$username = "root";
$password = "1234";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("destinos",$dbhandle) 
  or die("Could not select examples");

// Retrieve appropriate title according to the chosen language in the system
$sql = "SELECT m.CodigoMenu,mt.DescripcionMenu
        FROM MENU m
        INNER JOIN MENUTRANSLATION mt ON m.CodigoMenu = mt.CodigoMenu
        WHERE mt.CodigoIdioma = 'ES'";


//execute the SQL query and return records
$result = mysql_query($sql);

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo $row{'DescripcionMenu'}; //display the results
   
}
//close the connection
mysql_close($dbhandle);


?>

 </body>
</html>