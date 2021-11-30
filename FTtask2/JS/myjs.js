function fname()
{
    var fname = document.getElementById("fname").value;
    var letteronly = /^[a-zA-Z]+$/;
    if (fname.match(letteronly)){

    
    if (fname.length<5)
    {
        document.getElementById("show").innerHTML="it should be greater than 5 character";
    } else {
        document.getElementById("show").innerhtml="Your name is:"+fname;
    }
}
else {
    document.getElementById("show").innerhtml="Name should be only alphabet";
}
}
function lname()
{
    var lname = document.getElementById("lname").value;
    var letteronly = /^[a-zA-Z]+$/;
    if (fname.match(letteronly)){

    
    if (lname.length>5)
    {
        document.getElementById("print").innerHTML="Your name is:"+lname;
    } else {
        document.getElementById("print").innerhtml="it should be greater than 5 character";
    }
}
else {
    document.getElementById("print").innerhtml="Name should be only alphabet";
}
}
function email()
{
    var email=document.getElementById("email").value;
    var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    if(email.match(mailformat))
    {
        document.getElementById("showemail").innerhtml="Your email is:"+email;
    }
    else 
    {
        document.getElementById("showemail").innerhtml="Inavlid email format";
    }
    }


function password()
{
    var password= document.getElementById("password").value;
    if(password.length<8)
    {
        document.getElementById("perror").innerHTML="should be greater than 8";
    }
    else {
        document.getElementById("perror").innerHTML="Password is taken";
    }
}









function validateForm() {
  
  var lname = document.getElementById("lname").value;
  var age = document.getElementById("age").value;
  var designation = document.getElementById("lname").value;
}
