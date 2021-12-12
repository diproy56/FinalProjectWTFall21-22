<?php
$searchByID = "";
$searchByusername="";
require '../model/model.php';
$data=showUserdetails($_GET['id']);
 //echo $_GET['id'];
 If($data!=null)
 {
 $name = $data["name"];
$user_name = $data["user_name"];
 $eamil = $data["email"];
 $password = $data["password"]; 
 $gender = $data["gender"];
$dob = $data["dob"];
$image = $data["image"];

 echo "<table class='table'>";
 echo "<tr class'table_allrow'>";
 echo "<th class='table_data_blue'>user_name</th>";
 echo "<td  class='table_data'>" . $user_name . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>name Name</th>";
 echo "<td  class='table_data'>" . $name . "</td>";
 echo "<tr>";
 echo "<th class='table_data_blue'>eamil</th>";
 echo "<td  class='table_data'>" . $eamil . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>password</th>";
 echo "<td  class='table_data'>" . $password . "</td>";
echo "<tr>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>gender</th>";
 echo "<td  class='table_data'>" . $gender . "</td>";
 echo "<tr>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>dob</th>";
 echo "<td  class='table_data'>" . $dob . "</td>";
 echo "<tr>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>Image</th>";
echo "<td class='table_data'><img class='table_data_img' src='uploads/" . $image . "' alt='Profile Picture'</td>";
echo "</tr>";
echo "<tr>";
 echo "<th class='table_data_lightblue'>Choose</th>";

 echo "<td ><a href='editUser.php? user_name=".$user_name."'><span class='table_data_action'>Edit</span></a></td>";
 echo "<td  ><a href='deleteUser.php? user_name=".$user_name."'><span class='table_data_action'>Delete</span></a></td>";
 echo "<tr>";
 echo "</table>";
 }
 else if($data==null)
 {
	$searchByusername="ID not Found";
 	echo $searchByusername;
}

?>