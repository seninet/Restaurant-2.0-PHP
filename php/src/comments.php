<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM guestBook ORDER BY id DESC"); // using mysqli_query instead
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>guestbook</title>
	<style>
	table {
		margin: auto;
		text-align: center;
		margin-top: 5px;
		padding: 30px;
		width: 1000px;
		display: flex;
		flex-direction: column;
		border: 2px solid orange;
		font-family: 'Courier New', Courier, monospace;
	}


	p {
		display: flex;
		float: right;
		margin-right: 60px;
	}

	h2 {
		color: #ffbb33;
		text-decoration: none;
		text-align: center;
		font-family: 'Courier New', Courier, monospace;
		margin-top: 10px;
	}

	th {

		padding: 15px;

		width: 900px;

		align-content: center;
		justify-self: center;
	}

	td {
		padding-left: 40px;
	}

	a {
		color: black;
	}

	a:hover {
		color: orange;
		text-decoration: none;
		list-style: none;
	}
	</style>
</head>

<body>


	<table class='table table-bordered table-striped'>
		<tr>
			<h2 class="text-center">Customers Comment</h2>
			<a href=" home.php">
				<p>Back to Home Page</p>
			</a>
		</tr>
		<tr>
			<th>Name</th>
			<th>email</th>
			<th>Comment</th>
			<th>date</th>
			<th>Customer Id</th>
			<th>update</th>
		</tr>
		<?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['comment']."</td>"; 
						echo "<td>".$res['date']."</td>"; 
						echo "<td>".$res['id']."</td>"; 
				
            echo "<td><a href=\"update.php?id=$res[id]\">Edit</a> 
						</td>";       
       
					}
        ?>
	</table>



</body>

</html>
</body>

</html>