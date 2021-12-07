<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function Searchemployee($conn,$eid)
 {
$result = $conn->query("SELECT * FROM employee WHERE ID=$eid");
 return $result;
 }



 function Updateemp($conn,$eid,$name,$dept,$joined,$sal)
 {
     $sql = "UPDATE employee SET Name='$name', Department='$dept',JoiningDate='$joined',Salary='$sal' WHERE ID='$eid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>