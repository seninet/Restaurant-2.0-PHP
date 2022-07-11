<?php


require('config.php');


if(isset($_POST['Submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];


	if(empty($name) || empty($email) || empty($message)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}

		if(empty($message)) {
			echo "<font color='red'>comment field is empty.</font><br/>";
		}

		// 	if(empty($date)) {
		// 		echo "<font color='red'>date field is empty.</font><br/>";
		// }

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}

	else {
		// if all the fields are filled (not empty)             
		//insert data to database
		$result=mysqli_query($conn, "INSERT INTO message (name,email,message) VALUES('$name','$email','$message')");

		//display success message
		echo "<font color='#ffbb33'><h1>Thank you for Contact us, we will shortly respond for your message</h1>.";
		echo "<a href='home.php'><font color='black'><h3>Would you like to know what Other customers Comment about our Services? <span>Click here</span></h3></a>";
	}



}?>