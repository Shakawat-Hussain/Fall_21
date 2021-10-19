<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$gender=$_REQUEST["gender"];
$mobno=$_REQUEST["mobno"];
$dob=$_REQUEST["birth"];
$hsc=$_REQUEST["hsc"];
$ssc=$_REQUEST["ss"];
$course=$_REQUEST["course"];
$year=$_REQUEST["year"];
$season=$_REQUEST["season"];
}


$servername="localhost";
$username="root";
$password="";
$dbname="AIUB";
$con=new mysqli ($servername,$username,$password,$dbname);
if($con->connect_error)
{
  die("Connection Failes:".$con->connect_error)  ;
}

$sql="INSERT INTO new_students (F_Name,L_Name,Email,Gender,Mobile_No,DOB,HSC,SSC,course,Year,season)
 Values('$fname','$lname','$email','$gender','$mobno','$dob','$hsc','$ssc','$course','$year','$season')";
 if (con->query($sql)==true)
 {
     echo "New record created"
 }else
 {
echo "Error: ".$sql."   ".$con->error;
 }
 $con->close();
 ?>