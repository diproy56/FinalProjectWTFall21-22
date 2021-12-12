<?php 

require_once 'model/model.php';
require 'controller/store_data.php';
//require_once 'controller/updateProduct.php';
//require 'controller/showData.php';
if(isset($_GET['user_name']))
{
  $usere = showuser($_GET['user_name']);  
}
else
{
  //header('Location: User information.php');
}
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
<link rel="stylesheet" type="text/css" href="css/edit_user_style.css">
<script src="JS/name_password.js"></script>
<script src="JS/email.js"></script>
<script src="JS/sign_up.js"></script>
</head>
<body>
<form name="form" method="POST">
 <fieldset class="wraper">
  <legend class="text">EDIT USER</legend>
<div class="first_content">

  <div class="input">
  <label for="name">Nmae</label><br>
  <input type="text" id="name" name="name" value="<?php echo $usere['name'] ?>" onkeyup="checkName()" onblur="checkName()" onclick="checkName()">
<br><span class="error" id="namEerr"> <?php echo $nameerr;?></span>
</div>
<div class="input">
  <label for="name">User name</label><br>
  <input type="text" id="user_name" name="user_name" value="<?php echo $usere['user_name'] ?>" onkeyup="checkuerName()" onblur="checkuerName()" onclick="checkuerName()">
        <br><span class="error" id="usernamEerr"><?php echo $Usernameerr;?></span>
</div>
<div class="input">
  <label for="buyingPrice">Email</label><br>
  <input type="text" id="email" name="email" value="<?php echo $usere['email'] ?>"onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
    <br><span class="error" id="emailErr">
      <?php echo $emailerr;?>
    </span>
</div>
<div class="input">
  <label for="sellingPrice">Password</label><br>
  <input type="text" id="password" name="password" value="<?php echo $usere['password'] ?>"onkeyup="checkPassword()" onblur="checkPassword()" onclick="checkPassword()" >
        <br><span class="error" id="passwordErr"><?php echo $passworderr;?></span>
</div>
<div class="input">
   <label for="gender">Gender</label><br>
  <input type="text" id="gender" name="gender" value="<?php echo $usere['gender'] ?>"><br>
</div>
<div class="input">
   <label for="dob">DOB</label><br>
  <input type="date" id="dob" name="dob" value="<?php echo $usere['dob'] ?>"onkeyup="checkdob()" onblur="checkdob()" onclick="checkdob()">
      <br><span class="error" id="doberr" ><?php echo $doberr;?></span><br>
</div>
</div>
<div class="second_content">
        <div class="Content">
  <img class="img_design" 
  src="uploads/<?php 
  if (isset($usere['image'])){echo $usere['image'];} 
  else{echo 'main.png';}
  ?>">     
    
</div>
</div>
<div class="submit">
  <input class="submit_input" type="submit" name = "updateEditUser" value="Save">
</div>
 
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>