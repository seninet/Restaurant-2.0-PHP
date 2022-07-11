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
	<?php //including the database connection file
	include_once("config.php");

	if(isset($_POST['Submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];


		// checking empty fields
		if(empty($name) || empty($email) || empty($comment)) {
			if(empty($name)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}

			if(empty($email)) {
				echo "<font color='red'>email field is empty.</font><br/>";
			}

			if(empty($comment)) {
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
			$result=mysqli_query($conn, "INSERT INTO guestBook(name,email,comment) VALUES('$name','$email','$comment')");

			//display success message
			echo "<font color='#ffbb33'><h1>Thank you for your Comment</h1>.";
			echo "<a href='comments.php'><font color='black'><h3>Would you like to know what Other customers Comment about our Services? <span>Click here</span></h3></a>";
		}
	}

	?></body>

</html>