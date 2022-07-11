<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<style type="text/css">
	.wrapper {
		width: 1100px;
		margin: 0 auto;
		font-family: 'Courier New', Courier, monospace;
		display: grid;
		grid-template-columns: 5% 95%;
	}

	.page-header {
		margin-top: 0;
	}

	.guest-book {
		margin-top: 100px;
		align-self: flex-start;
	}

	h2 {
		text-align: center;
	}

	table tr td:last-child a {
		margin-right: 15px;
	}



	a {
		color: orange;
		text-decoration: none;
		list-style: none;
	}

	a:hover {
		color: black;
		text-decoration: none;
		list-style: none;
	}

	th {
		border: 2px solid orange;
	}
	</style>
	<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
	</script> -->
</head>

<body>
	<div class="wrapper ">
		<div class="guest-book">
			<a href=" comments.php">
				<h3>GuestBook</h3>
			</a>
			<a href="imgform.php">
				<h3>Image Upload</h3>
			</a>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header clearfix">
						<h2 class="text-center">Message Board</h2>
					</div>

					<?php
                    // Including the config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM message";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Email-Address</th>";
                                        echo "<th>Message</th>";
																				echo "<th>Date</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
																				   echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View message' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            // echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete message' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                   
                    ?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>