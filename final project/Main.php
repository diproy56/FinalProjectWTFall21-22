
<?php 

 require 'admin/head/Top3.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOK SHOP</title>
	<style type="text/css">
		.wraper
		{
				width: 33%;
	height: 330px;
	border: 1px solid black;
	margin: auto;
	padding: auto;
	margin-top: 80px;
	border-radius: 15px;
		}
		.link_text
		{
			width: 50%;
			height:35px;
			margin: auto;
			background: #1376D5;
			color: white;
			text-align: center;
			padding: auto;
			font-size: 25px;
			font-weight: bold;
			margin-top: 15px;
			border-radius: 10px;


		}
		.link_text:hover
		{
			transform: scale(1.1);
}
		.text
		{
			color: white;
			text-decoration: none;
			margin-top: 55px;
			
		}
		.header
{
	width: 100%;
	height: 50px;
	text-align: center;
	font-size: 30px;

	
}
	</style>
</head>
<body>

	<div class="wraper"> 
		<div class="content">
			<div class="header">
				<h3>SELECT</h3>
			</div>
			<hr style="margin: auto;width: 90%;">
			<div class="link_text">
				<a class="text" href="admin/public.php">ADMIN</a>
			</div>
			<div class="link_text">
				<a  class="text" href="Accountant/public.php">ACCOUNTANT</a>
			</div>
			<div class="link_text">
				<a class="text" href="Buyer/welcome.php">BUYER</a>
			</div>
			<div class="link_text">
				<a class="text" href="Book Seller/public.php">BOOK SELLER</a>
			</div>
		</div>
	</div>


<?php require 'admin/fotter/Footer.php';?>
</body>
</html>