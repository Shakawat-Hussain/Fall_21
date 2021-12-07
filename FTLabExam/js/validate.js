function ename()
{
    var name=document.getElementById("name").value;
   
   if(name!="" && name<8)
    {
        document.getElementById("error1").innerHTML="Your Entered : "+name;
        
        //return (true);
        return name;
    }
    else 
    {
        document.getElementById("error1").innerHTML="Name format incorrect";
        return 0;
        
    }
    //return true;
}

function department()
{
   
    var department=document.getElementById("dept").value;
   
    if(department!="")
    {
        document.getElementById("error2").innerHTML="You entered: "+department;
        return department;
    }
    else 
    {
        document.getElementById("error2").innerHTML="invalid dept name";
        return false;
        
        
        
    }
return true;
}

function Salary()
{
   
    var salry=document.getElementById("sal").value;
  
    if(isNaN(salry))
    {
        document.getElementById("error5").innerHTML="invalid salary";
        return false;
    }
    else 
    {
        
        document.getElementById("error5").innerHTML="You entered: "+salry;
        return salry;
        
        
    }
return true;
}



function joindate()
{
   
    var joined=document.getElementById("joined").value;
    
    if(joined!="")
    {
        document.getElementById("error3").innerHTML="You entered: "+joined;
        return joined;
    }
    else 
    {
        document.getElementById("error3").innerHTML="Can't be empty";
        return false;
        
        
        
    }
return true;
}



function alltrue()
{
    if(ename() && department() && joindate())
  
    {
        
        return true;
       
    }
    else 
    {
        document.getElementById("error4").innerHTML="validation failed";
        return false;
        
    }
    
}
