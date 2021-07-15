<?php    
$con = mysqli_connect('localhost','root','','laksn_db') or die("connection failed");
$sql = " SELECT * FROM products ";
$result = mysqli_query($con,$sql) or die("SQL Query Failed");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);
?>