<html>

<head>
	<title>Add Data</title>
	<style>
	h1 {
		text-align: center;
		margin-top: 100px;
		font-family: 'Courier New', Courier, monospace;
	}

	h3 {
		text-align: center;
		font-family: 'Courier New', Courier, monospace;
	}

	a {
		text-decoration: none;
	}



	span {
		color: #ffbb33;
		font-size: 20px;
	}
	</style>
</head>

<body>
	<?php
// Including config file
require_once "config.php";
 
// Defining and initializing variables
if(isset($_POST['Submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];



	// checking empty fields
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



		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}

	else {
         
		//insert data to database
		$result=mysqli_query($conn, "INSERT INTO message (name,email,message) VALUES('$name','$email','$message')");

		//display success message
		echo "<font color='#ffbb33'><h1>Thank you for your message</h1>.";
		echo "<a href='home.php'><font color='black'><h3>Back to Home Page? <span>Click here</span></h3></a>";
	}
         
    
    }
    


?>