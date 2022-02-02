<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Content</title>
</head>
<body>
<?php 

require_once("navigation.php");
require_once("database.php");  //this is for the database connection

//Setup our variable for our query string = GET method

$page = htmlspecialchars($_GET['page']);    //get the page variable from the browser URL string - and put in variable

echo "DEBUG = $page";    //Debug to show my local variable


$sql = "SELECT * from content where id='$page'";      //note the nesting of " '

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {


  //if we did find records (a record) then display that info

   while($row = mysqli_fetch_assoc($result))    {

        //echo " DEBUG - id " . $row["id"] , " - Title = " . $row["title"] . "<br />";

       //Create my local variables

       $title = $row["title"];
       $metaKeywords = $row["metaKeywords"];
       $metaDescription = $row["metaDescription"];
       $contentData = $row["contentData"];

   }

}

else {
    echo "0 Results";

}

mysqli_close($conn);

?>

<form name="myForm" method="post" action="updatedContentToDB.php"> <br />

<input type="hidden" name="content_id" id="content_id" value="<?php echo $page;?>">

<p style="color: #10aae5; font-size: 25px;">Enter a Title 
<input type="text" name="title" id="title" value="<?php echo $title;?>"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter Keywords
<input type="text" name="metaKeywords" id="metaKeywords" value="<?php echo $metaKeywords;?>"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter a Description
<input type="text" name="metaDescription" id="metaDescription" value="<?php echo $metaDescription;?>"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter your Content 
<input type="text" name="contentData" id="contentData" value="<?php echo $contentData;?>"> <br />
</p>

<input type="submit">
</form>
</body>
</html>