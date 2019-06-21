function showUsers(){
    var val = "none";
    retrieveData(val);
}

function showCredits(ele){
    retrieveData(ele);
}

function retrieveData(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)
            document.getElementById("d1").innerHTML = this.responseText;
    };
    xhttp.open("GET", "retrievePHP.php?name=" + str,true);
    xhttp.send();
}


function transferData(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)
            document.getElementById("transferDiv").innerHTML = "<h2><b>Transfer To:</b></h2>" + this.responseText;
    };
    xhttp.open("GET", "transferPHP.php?name=" + str,true);
    xhttp.send();
}

function transferingCredits(str){
    var radios = document.getElementsByName('otherUsers');
    var radioInput = 0;
    for(var i = 0; i < radios.length; i++)
        if(radios[i].checked)
            radioInput = radios[i].value;   
    var inp = document.getElementById("id1").value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)
            document.getElementById("d1").innerHTML = "<h2><b>Transaction successfull !</b></h2>" + this.responseText;
    };
    xhttp.open("GET", "successPHP.php?radioInput=" + radioInput +"&inp=" + inp +"&user=" + str,true);
    xhttp.send();
}

