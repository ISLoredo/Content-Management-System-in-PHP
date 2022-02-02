<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updatedContentToDB</title>
</head>
<body>
<?php

require_once("navigation.php"); 
require_once("database.php"); //this is for the database connection

$id = htmlspecialchars($_POST['content_id']);          //this is the primary key in the content db table to perform the UPDATE
$title = htmlspecialchars($_POST['title']);  
$metaKeywords = htmlspecialchars($_POST['metaKeywords']);  
$metaDescription = htmlspecialchars($_POST['metaDescription']);  
$contentData = htmlspecialchars($_POST['contentData']);  



$sql = "UPDATE content SET title='$title', metaKeywords='$metaKeywords', metaDescription='$metaDescription', contentData='$contentData' WHERE id='$id'";

if(mysqli_query($conn, $sql))  {
	echo "New record created successfully";
} else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	} 

	$conn->close();



?>
 </body>
</html>