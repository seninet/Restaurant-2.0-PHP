<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM message WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $email = $row["email"];
                $message = $row["message"];
								$date = $row["date"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>View Record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
	.wrapper {
		width: 500px;
		margin: 0 auto;
	}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1>View Record</h1>
					</div>
					<div class="form-group">
						<label>Name</label>
						<p class="form-control-static"><?php echo $row["name"]; ?></p>
					</div>
					<div class="form-group">
						<label>Email Adress</label>
						<p class="form-control-static"><?php echo $row["email"]; ?></p>
					</div>
					<div class="form-group">
						<label>Message</label>
						<p class="form-control-static"><?php echo $row["message"]; ?></p>
					</div>
					<div class="form-group">
						<label>Date</label>
						<p class="form-control-static"><?php echo $row["date"]; ?></p>
					</div>
					<p><a href="main.php" class="btn btn-warning">Back</a></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>