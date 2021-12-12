// <script src="JS/style.js"></script>
function checkEmail()
{document.getElementById("name").style.backgroundColor = "red";
    if (document.getElementById("email").value == "") 
    {
	  	document.getElementById("emailErr").innerHTML = "Email Required";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else if(document.forgotPassword.email.value.indexOf("@")<1||document.forgotPassword.email.value.indexOf("@")+2>document.forgotPassword.email.value.lastIndexOf(".")||document.forgotPassword.email.value.lastIndexOf(".")+2>=document.forgotPassword.email.value.length)
	{
		document.getElementById("emailErr").innerHTML = "Invalid Email Format";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		document.getElementById("email").style.borderColor = "black";
	}
}
// function wordCount(text) {
//   var text = input.value;
//   var wordCount = 0;
//   for (var i = 0; i <= text.length; i++) 
//   {
//     if (text.charAt(i) == ' ') 
//     {
//       wordCount++;
//     }
//   }
//   return count.innerText = wordCount;
// }
function checkPassword()
{
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
	}
}
function search(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	if (document.getElementById("searchByID").value == "") 
    {
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/search.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		document.getElementById("search").style.borderColor = "black";
	}
}
function searchuser(id)
{//document.getElementById("searchByUserID").style.backgroundColor = "red";
	if (document.getElementById("searchByUserID").value == "") 
    {
		document.getElementById("searchByUserIDErr").innerHTML = "ID Required";
		document.getElementById("searchByUserIDErr").style.color = "red";
		document.getElementById("searchByUserID").style.borderColor = "red";
		document.getElementById("searchuser").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchUser.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByUserIDErr").innerHTML = "";
		document.getElementById("searchByUserID").style.borderColor = "black";
		document.getElementById("searchuser").style.borderColor = "black";
	}
}

function checkBookName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("book_name").value == "") 
	{
		document.getElementById("booknamEerr").innerHTML = "Book Name Required";
		document.getElementById("booknamEerr").style.color = "red";
		document.getElementById("book_name").style.borderColor = "red";
	}
	//  else if (wordCount(document.getElementById("name").value)<2)
	//  {
	
	//  	document.getElementById("namEerr").innerHTML = "Minimum Two Words";
	//  	document.getElementById("namEerr").style.color = "red";
	//  	document.getElementById("name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("booknamEerr").innerHTML = "";
		document.getElementById("book_name").style.borderColor = "black";
	}
			
}


function checkAuthorName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("author_name").value == "") 
	{
		document.getElementById("authornamEerr").innerHTML = "Author Name Required";
		document.getElementById("authornamEerr").style.color = "red";
		document.getElementById("author_name").style.borderColor = "red";
	}
	//  else if (wordCount(document.getElementById("name").value)<2)
	//  {
	
	//  	document.getElementById("namEerr").innerHTML = "Minimum Two Words";
	//  	document.getElementById("namEerr").style.color = "red";
	//  	document.getElementById("name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("authornamEerr").innerHTML = "";
		document.getElementById("author_name").style.borderColor = "black";
	}
			
}

function checkprice() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("book_price").value == "") 
	{
		document.getElementById("bookPriceEerr").innerHTML = "Price Required";
		document.getElementById("bookPriceEerr").style.color = "red";
		document.getElementById("book_price").style.borderColor = "red";
	}
	//  else if (wordCount(document.getElementById("name").value)<2)
	//  {
	
	//  	document.getElementById("namEerr").innerHTML = "Minimum Two Words";
	//  	document.getElementById("namEerr").style.color = "red";
	//  	document.getElementById("name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("bookPriceEerr").innerHTML = "";
		document.getElementById("book_price").style.borderColor = "black";
	}
			
}
