<?php 
 	// Connects to your Database 
 	mysql_connect("localhost", "evolvena_camuser", "cameratest") or die(mysql_error());
	mysql_select_db("evolvena_camera") or die(mysql_error());

 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM employees") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data
 
 Echo "<img src=http://dev.kevinlombardo.com/camera/images/".$info['photo'] ."> <br><br>"; 
 }
 ?> 
 
 <br><br><a href="index.html">home</a>