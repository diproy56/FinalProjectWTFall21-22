function validation(val){
    var bookid = val.bookid.value;
    var flag = true;   
    if(bookid ==="")
    {   
        flag = false;
        document.getElementById('bookidErr').innerHTML=" Book Id can not be empty.";
    }
    return flag;
    }
    function result(pForm)
    {   

        var isValid=validation(pForm);
        if(isValid){
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status===200) {
                  document.getElementById("his").innerHTML = this.responseText;
            }
        }
        xhttp.open("POST","../Controller/historyAjax.php");
        xhttp.send();
    }
    }
    function view()
    {   

        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status===200) {
                  document.getElementById("his").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET","../Controller/historyAjax.php");
        xhttp.send();
    }
    function close()
    {   
       header("Location: ../Controller/bhistory.php");
    }