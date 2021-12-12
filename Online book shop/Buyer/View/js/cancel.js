    function isValid(){
    var flag = true;
    var id=document.forms["cancel"]["id"].value;
    
    if(id ==="")
    {   
        flag = false;
        document.getElementById('idErr').innerHTML=" Field can not be empty.";
    }
    return flag;
    }