<?php 
// Include the database configuration file  
require_once 'config.php'; 
 
// If file upload form is submitted 
$sql = "SELECT * FROM images WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array();
// echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
echo '<img src="data:image/jpeg;base64,'.base64_encode($row->load()) .'" />';
?>