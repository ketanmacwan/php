function validate(field, query){
    var XMLHttp;
    XMLHttp = new XMLHttpRequest();
    XMLHttp.onreadystatechange = function(){
    if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
        document.getElementById(field).innerHTML = XMLHttp.responseText;
    }
    else{
        document.getElementById(field).innerHTML = "ERROR occured please try agian!";
    }
}

XMLHttp.open('GET','validation.php?field='+field+'&query='+query,false);
XMLHttp.send();
}

function checkform(){
    var username = document.getElementById('txtUser').value;
    var password = document.getElementById('txtPass').value;
    var email = document.getElementById('txtEmail').value;
    var website = document.getElementById('txtWeb').value;

    if(username == '' || password == '' || email == '' || website == ''){
        alert("Fill all Fields");
    }
    else{
        var username1 = document.getElementById('username');
        var password1 = document.getElementById('password');
        var email1 = document.getElementById('email');
        var website1 = document.getElementById('website');

        if(username1.innerHTML == "Must be 3+ Letters" || password1.innerHTML == "Password too short" || email1.innerHTML == "Invalid email" || website1.innerHTML == "invalid website"){
            alert("Fill valid Information!");
        }
        else{
            document.getElementById('myform').submit();
        }
    }

}