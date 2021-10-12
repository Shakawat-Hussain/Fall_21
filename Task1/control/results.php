<?php
$validatename="";
$validateage="";
$validateradio="";
$validatecheckbox="";
$emailerr="";
$validateemail;
$validatepass="";
$passwordErr = "";
$cpasswordErr= "";

$c1=$c2=$c3="";
$name=$email=$destination=$pwd=$cpwd="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$name=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$pwd=$_REQUEST["pwd"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["fname"];
}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["lname"];
}

if(empty($_POST["email"]) 
{
    $emailerr="you must enter email";
}
else{
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format";
    }

if(!empty($_POST["pwd"]) && ($_POST["pwd"] == $_POST["cpwd"])) {
    $validatepass = test_input($_POST["pwd"]);
    $cpwd = test_input($_POST["cpwd"]);
    if (strlen($_POST["pwd"]) <'8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    
     else {
        $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    }
}

if(!isset($_REQUEST["choice1"])&&!isset($_REQUEST["choice2"])&&!isset($_REQUEST["choice3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["choice1"]))
   {
       $c1= $_REQUEST["choice1"];
   }
   if(isset($_REQUEST["choice2"]))
   { 
       $c2= $_REQUEST["choice2"];
   }
   if(isset($_REQUEST["choice3"]))
   {
    $c3= $_REQUEST["choice3"];
   }
}
if(isset($_REQUEST["destination"]))
{
    $validateradio= $_REQUEST["destination"];
}
else{
    $validateradio= "please select at least one radio";
}

}
?>