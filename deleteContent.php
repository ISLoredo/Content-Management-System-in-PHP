<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Content</title>
</head>
<body>
<?php 

require_once("navigation.php");
require_once("database.php");  //this is for the database connection

$id = htmlspecialchars($_GET['page']);          //get the user id to delete from the database from the prior screen GET method

// sql ro delete the record

$sql = "DELETE FROM content WHERE id='$id'";        //query string to use

if(mysqli_query($conn, $sql))   {
    echo "Record deleted successfully.";
}

else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
   </body>
</html>