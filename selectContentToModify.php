<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Content To Modify</title>
</head>
<body>
<?php 
require_once("navigation.php");
require_once("database.php");  //this is for the database connection


$sql = "SELECT * FROM content";       //select everything from the content table


if($result = mysqli_query($conn, $sql)) { 

    if(mysqli_num_rows($result) > 0) {

      echo "<table>";
       echo "<tr>";
         echo "<th>id</th>";
         echo "<th>Title</th>";
         echo "<th>Delete Content</th>";
       echo "</tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['id'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['title'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "deleteContent.php?page=" . $row['id'] . ">" . "Delete Content" . "</a>" . "</td>";
            echo "</tr>";


      }

      echo "</table>";

      mysqli_free_result($result);
      }

      else {
          echo "No records matching your query.";
      }


   }







else {

          echo "ERROR: Could not execute $sql." . mysqli_error($conn);

}
mysqli_close($conn);

?>
 </body>
</html>