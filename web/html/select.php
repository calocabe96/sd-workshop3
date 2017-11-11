<?php
 $con = new PDO('mysql:host=192.168.130.130;dbname=my_database;charset=utf8mb4', 'usuario', 'password');
 if (!$con)
   {
   die('Could not connect!');
   }
 echo "<br />";
 echo "Id calle  |  Flujo vehicular  |  Timestamp";
 echo "<br /><br />";

 foreach($con->query('SELECT * FROM curso') as $row) {
     echo $row['id_calle'].'  |  '.$row['flujo_vehicular'].'  |  '.$row['timestamp'];
     echo "<br />";
 }
?>
