// <script src="JS/style.js"></script>

function checkConfirmPassword()
{//document.getElementById("confirm_password").style.backgroundColor = "red";
    if (document.getElementById("confirm_password").value == "") 
    {
		document.getElementById("confirm_passwordErr").innerHTML = "Password Required";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value.length<8)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value != document.getElementById("password").value)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("confirm_passwordErr").innerHTML = "";
		document.getElementById("confirm_password").style.borderColor = "black";
	}
}

function checkdob()
{//document.getElementById("dob").style.backgroundColor = "red";
    if (document.getElementById("dob").value == "") 
    {
		document.getElementById("dobErr").innerHTML = "Date Of Birth Required";
		document.getElementById("dobErr").style.color = "red";
		document.getElementById("dob").style.borderColor = "red";
	}
	else
	{
		document.getElementById("dobErr").innerHTML = "";
		document.getElementById("dob").style.borderColor = "black";
	}
}



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

function checkCurrentPassword()
{//document.getElementById("current_password").style.backgroundColor = "red";
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Enter Current Password";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}

function checkNewPassword()
{//document.getElementById("new_password").style.backgroundColor = "red";
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "Enter New Password ";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}
function checkRetypeNewPassword()
{//document.getElementById("retype_new_password").style.backgroundColor = "red";
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "Retype New Password";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "black";
	}
}