<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Content</title>
</head>
<body>
<?php

require_once("navigation.php");

?>
<form name="myForm" method="post" action="insertContentToDB.php"> <br />

<p style="color: #10aae5; font-size: 25px;">Enter a Title 
<input type="text" name="title" id="title"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter Keywords
<input type="text" name="metaKeywords" id="metaKeywords"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter a Description
<input type="text" name="metaDescription" id="metaDescription"> <br />
</p>
<p style="color: #10aae5; font-size: 25px;">Enter your Content 
<input type="text" name="contentData" id="contentData"> <br />
</p>

<input type="submit">
</form>
</body>
</html>