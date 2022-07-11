<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
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
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE guestBook SET name='$name',email='$email',comment='$comment' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: comments.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM guestBook WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $email = $res['email'];
    $comment = $res['comment'];

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
		font-family: 'Courier New', Courier, monospace;
		border: 2px solid orange;
		padding: 10px;
	}



	input {
		margin: 10px;
		width: 400px;
		height: 30px;
	}

	h2 {
		text-align: center;
	}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h2>Comment Update</h2>
					</div>
					<form class='table table-bordered table-striped' method="post" action="update.php">
						<div>
							<label for="name">Name</label>
							<input type=" text" name="name" value="<?php echo $name;?>">

						</div>
						<div>
							<label for="email">Email</label>
							<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						</div>
						<div>
							<label for="comment">Comment</label>
							<td><input type="text" name="comment" value="<?php echo $comment;?>"></td>
						</div>
						<div>
							<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

							<input class="bg-warning" type="submit" name="update" value="Update">
						</div>

				</div>
			</div>
		</div>
	</div>
	</form>
</body>

</html>