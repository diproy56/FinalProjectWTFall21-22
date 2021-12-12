<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" type="text/css" href="css/add_book_style.css">
<script src="JS/name_password.js"></script>
<script src="JS/email.js"></script>
<script src="JS/sign_up.js"></script>
</head>
<body>
  <?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

require 'controller/store_data.php';
//require_once 'controller/updateUser.php';

?>
<form name="form" action="controller/saveProduct.php" method="POST" enctype="multipart/form-data" style="margin-bottom: 100px;" >
  
 <fieldset style="" class="wraper">
  <div class="content">
  <legend class="text">ADD User</legend>
<div class="input_design">
  <label class="input_header" for="name">Name</label><br>
  <input class="input_holder" type="text" id="name" name="name"nkeyup="checkName()" onblur="checkName()" onclick="checkName()">
<br><span class="error" id="namEerr"> <?php echo $nameerr;?></span>
</div>
<div class="input_design">
  <label class="input_header" for="user_name">User Name</label><br>
  <input class="input_holder" type="text" id="user_name" name="user_name"onkeyup="checkuerName()" onblur="checkuerName()" onclick="checkuerName()">
        <br><span class="error" id="usernamEerr"><?php echo $Usernameerr;?></span>
</div>
<div class="input_design">
  <label class="input_header" for="email">Email</label><br>
  <input class="input_holder" type="text" id="email" name="email"onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
    <br><span class="error" id="emailErr">
      <?php echo $emailerr;?>
    </span>
</div>
<div class="input_design">
  <label class="input_header" for="password">Password</label><br>
  <input class="input_holder" type="password" id="password" name="password"onkeyup="checkPassword()" onblur="checkPassword()" onclick="checkPassword()" >
        <br><span class="error" id="passwordErr"><?php echo $passworderr;?></span>
</div>
<div class="input_design">
  <label class="input_header" for="gender">gender</label><br>
  <input type="radio" id="gender" name="gender" value="female">Female
  <input type="radio" id="gender" name="gender" value="male">Male
  <input type="radio" id="gender" name="gender" value="other">Other<br>
</div>
<div class="input_design">
  <label class="input_header" for="dob">DOB</label><br>
  <input class="input_holder" type="date" id="dob" name="dob"onkeyup="checkdob()" onblur="checkdob()" onclick="checkdob()">
      <br><span class="error" id="doberr" ><?php echo $doberr;?></span><br>
  </div>

   <div class="input_design">
     <hr>
  <input  class="input_submit" type="submit" name = "saveUser" value="Save">
</div>
    </div>
    <br>

  
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>