<?php
include('../model/db.php');

$eid=$name=$dept= $joined=$sal="";
 if(isset($_POST["search"]))
 {
     
    $eid=$_POST["eid"];
   
 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->Searchemployee($conobj,$eid);
 
 if ($userQuery->num_rows > 0) {
 
    
     while($row = $userQuery->fetch_assoc()) {
        $eid=$row["ID"];
        $name=$row["Name"];
       $dept=$row["Department"];
       $joined=$row["JoiningDate"];
       $sal=$row["Salary"];
       
    
   } 
 }
   else {
     echo "0 results";
   }
}

 if(isset($_POST["update"]))
 {
    $userQuery=$connection->Updateemp($conobj,$eid,$name,$dept,$joined,$sal);
    if($userQuery==TRUE)
    {
        echo "update successful"; 
    }
    else
    {
        echo "could not update";    
    }
    $connection->CloseCon($conobj);
    
    }

 
    $connection->CloseCon($conobj);

 

?>