<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Content To DB</title>
</head>
<body>
<?php

 //Catch the info from the create form
 //Render the data to the screen as a test 
 //Connect to the database (do manally here at first)
 //Insert user data into the database 

$title = htmlspecialchars($_POST['title']);   //grab the value that the user put into the title text field
$metaKeywords = htmlspecialchars($_POST['metaKeywords']);   //grab the value that the user put into the title text field
$metaDescription = htmlspecialchars($_POST['metaDescription']);   //grab the value that the user put into the title text field
$contentData = htmlspecialchars($_POST['contentData']);   //grab the value that the user put into the title text field

echo "DEBUG - The Title = " . $title . "<br />";               //echo will render out data to the screen 
echo "DEBUG - The Title = " . $metaKeywords . "<br />";        //echo will render out data to the screen 
echo "DEBUG - The Title = " . $metaDescription . "<br />";     //echo will render out data to the screen 
echo "DEBUG - The Title = " . $contentData . "<br />";         //echo will render out data to the screen 


require_once("database.php");  //this is for the database connection


 //SQL Command Reference
//INSERT INTO 'content' ('id', 'title', 'metaKeywords', 'metaDescription', 'contentData') VALUES (NULL, 'test, 'test', 'test', 'test');

 //SQL Command 
$sql = "INSERT INTO content(title, metaKeywords, metaDescription, contentData) VALUES ('$title', '$metaKeywords', '$metaDescription', '$contentData')";

if(mysqli_query($conn, $sql))  {
	echo "New record created successfully";
}
  //Error Handler 
  else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	} 

//Close the database connection 
		$conn->close();

?>
 </body>
</html>
