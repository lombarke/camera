<?php 
 
 //This is the directory where images will be saved 
 $target = "images/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $pic=($_FILES['photo']['name']); 
 
 	// Connects to your Database
	mysql_connect("localhost", "evolvena_camuser", "cameratest") or die(mysql_error());
	mysql_select_db("evolvena_camera") or die(mysql_error());

 
 //Writes the information to the database 
 mysql_query("INSERT INTO employees(photo) VALUES ('$pic')") or die(mysql_error) ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
?> 

<br><br> <a href="view.php">view</a>
<br><br> <a href="index.html">back</a>
