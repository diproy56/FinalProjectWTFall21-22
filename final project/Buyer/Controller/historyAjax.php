<?php
include '../Model/dbhistory.php';

if(empty($_GET['Search']) or empty(input_data($_GET["bookid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["bookid"]));
}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

echo "<table id='customers'>";
echo "<tr>";
echo "<th>Book_Id</th>"; 
echo "<th>Book_Name</th>"; 
echo "<th>Amount</th>";
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["id"] . "</td>";
    echo "<td>" . $users[$i]["name"] . "</td>";
    echo "<td>" . $users[$i]["amount"] . "</td>";
    echo "</tr>";
}
?>