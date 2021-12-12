<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Online Bookshop</title>
<script src="../View/js/history.js"></script>
<link rel="stylesheet" href="../View/css/bhistory.css"></link>
</head>
<body>
<?php
include '../Model/dbhistory.php';
if(!empty($_GET["listID"]))
{
    $del = delete($_GET["listID"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}
?>
<?php
include '../View/Header.html';
?>
<h1>Total Added Books:</h1>
<form method="GET" name ="hView" onsubmit="result(this); return false;">
    <label for="bookid">Enter book Id:</label>
    <input type="text" id="bookid" name="bookid">    
    &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search" id="button">
    
    <span id="bookidErr"></span>
    <br><br>
</form>
<fieldset style="background-color: #FBE5C8">
<div id="his"></div>
</fieldset>
<button onclick="view()" id="button">View ALL</button>
<a href="bhistory.php" id="button">close </a>
</body>
</html>