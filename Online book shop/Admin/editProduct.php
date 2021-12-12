<?php 


require_once 'model/model.php';
require_once 'controller/updateProduct.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: Book information.php');
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
<link rel="stylesheet" type="text/css" href="css/add_book_style.css">
<script src="JS/style.js"></script>
</style>
</head>
<body>
<form method="POST">
 <fieldset class="wraper">
  <legend class="text">EDIT BOOK</legend>
<div class="input_design">
  <label class="input_header"  for="name">Book Id</label><br>
  <input class="input_holder"  type="text" id="ID" name="ID" value="<?php echo $product['ID'] ?>" readonly>
</div>
<div class="input_design">
  <label class="input_header"  for="name">Book Name</label><br>
  <input class="input_holder"  type="text" id="book_name" name="book_name" value="<?php echo $product['book_name'] ?>"onkeyup="checkBookName()" onblur="checkBookName()" onclick="checkBookName()">
<br><span class="error" id="booknamEerr"> <?php echo $booknameerr;?></span>
</div>
<div class="input_design">
  <label class="input_header"  for="buyingPrice">Author Name</label><br>
  <input  class="input_holder"  type="text" id="author_name" name="author_name" value="<?php echo $product['author_name'] ?>"onkeyup="checkAuthorName()" onblur="checkAuthorName()" onclick="checkAuthorName()">
<br><span class="error" id="authornamEerr"><?php echo $authornameerr;?></span>
</div>
<div class="input_design">
  <label class="input_header"  for="sellingPrice">Book Price</label><br>
  <input class="input_holder"  type="number" id="book_price" name="book_price" value="<?php echo $product['book_price'] ?>"onkeyup="checkprice()" onblur="checkprice()" onclick="checkprice()">
<br><span class="error" id="bookPriceEerr"><?php echo $priceerr;?></span>
</div>
  <div class="input_design">
  <hr>
  <input  class="input_submit" type="submit" name = "updateProduct" value="Save">
</div>
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>