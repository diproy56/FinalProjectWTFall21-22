    function isValid(){
    var flag = true;
    var fname=document.forms["profile"]["fname"].value;
    var lname=document.forms["profile"]["lname"].value;
    var gender=document.forms["profile"]["gender"].value;
    var dob=document.forms["profile"]["dob"].value;
    var religion=document.forms["profile"]["religion"].value;
    var phone=document.forms["profile"]["phone"].value;
    var email=document.forms["profile"]["email"].value;

    
    if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" First name can not be empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" Last name can not be empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" Gender can not be empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" Date of birth can not be empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" Religion can not be empty.";
        
    }

      if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Phone number can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    return flag;
    }