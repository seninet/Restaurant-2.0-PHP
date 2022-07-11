<?php  
require_once 'config.php'; 

if(isset($_POST["insert"]))
{
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$query = "INSERT INTO tbl_images(name) VALUES ('$file')";
if(mysqli_query($conn, $query))
{
echo '<script>
alert("Image Inserted into Database")
</script>';

}

}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
	tbody {
		margin: auto;
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		grid-gap: 10px;
		border: 2px solid orange;

	}

	h3 {
		font-family: 'Courier New', Courier, monospace;
		color: orange;
	}

	td:hover {
		width: 400px;
	}


	.img-form {
		margin: auto;
		width: 300px;
		align-items: center;
	}

	.img-form input {
		margin: auto;
		padding: 5px;
		width: 200px;
	}

	a {
		color: black;
	}

	a:hover {
		color: orange;
	}

	p {
		display: flex;
		float: right;
		margin-right: 60px;
	}
	</style>
</head>

<body>
	<div class="container" style="width:1000px;">

		<h3 align="center">Insert and Display Images From Mysql Database</h3><br />
		<form method="post" enctype="multipart/form-data">
			<div class="img-form">
				<input type="file" name="image" id="image" /><br />
				<input class="bg-warning" type="submit" name="insert" id="insert" value="Upload" />
			</div>
		</form>
		<div>
			<h3 class="text-center">Image</h3>
		</div>
		<table class="table table-bordered">
			<a href=" home.php">
				<p>Back to Home Page</p>
			</a>
			<?php $query="SELECT * FROM tbl_images ORDER BY id DESC";
	$result=mysqli_query($conn, $query);

	while($row=mysqli_fetch_array($result)) {
		echo '  
<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'"height="200"width="200"class="img-thumnail"/></td>';  
echo "<td>";

// echo "<a href='read.php?id=". $row['id'] ."' title='View message' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
// echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
echo "<a href='imgdelete.php?id=". $row['id'] ."' title='Delete image' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
echo "</td>";
echo "</tr>";
	}

	?>

			<script>
			$(document).ready(function() {
					$('#insert').click(function() {
							var image_name = $('#image').val();

							if (image_name == '') {
								alert("Please Select Image");
								return false;
							} else {
								var extension = $('#image').val().split('.').pop().toLowerCase();

								if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
									alert('Invalid Image File');
									$('#image').val('');
									return false;
								}
							}
						}

					);
				}

			);
			</script>
		</table>
	</div>
</body>

</html>