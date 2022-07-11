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
		margin-top: 30px;
		padding: 30px;
		width: 900px;
		display: flex;
		flex-direction: column;
		border: 2px solid orange;
		font-family: 'Courier New', Courier, monospace;
	}

	h3 {
		color: #ffbb33;
		text-decoration: none;
		text-align: center;
	}

	th {

		padding: 15px;
		background-color: #ffbb33;
		align-content: center;
		justify-self: center;
	}

	td {
		padding-left: 40px;
	}
	</style>
</head>

<body>


	<table>
		<tr>
			<th>Name</th>
			<th>email</th>
			<th>Comment</th>
			<th>date</th>
			<th>Customer Id</th>
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
						// echo "<td>".$res['Customerid']."</td>"; 
            // echo "<td><a href=\"edit.php?id=$res[Customerid]\">Edit</a> 
						// </td>";       
        }
        ?>
	</table><br><br>
	<a href="home.php">
		<h3>Back to Home Page</h3>
	</a>


</body>

</html>
</body>

</html>